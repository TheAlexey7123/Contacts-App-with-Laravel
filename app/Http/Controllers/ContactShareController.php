<?php

namespace App\Http\Controllers;

use App\Mail\ContactShared;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;


class ContactShareController extends Controller
{
    public function index()
    {
        $contactsSharedWithUser = auth()->user()->sharedContacts()->with("user")->get();
        $contactsShareByUser = auth()->user()
            ->contacts()
            ->with(["sharedWithUsers" => fn($query) => $query->withPivot('id')])
            ->get()
            ->filter(fn($contact) => $contact->sharedWithUsers->isNotEmpty());

        return view("contact-shares.index", compact("contactsSharedWithUser", "contactsShareByUser"));
    }

    public function create()
    {
        return view("contact-shares.create");
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            "user_email" => "exists:users,email|not_in:{$request->user()->email}",
            "contact_email" => Rule::exists('contacts', 'email')->where("user_id", auth()->id())
        ], [
            "user_email.not_in" => "You can't share a contact with yourself",
            "contact_email.exists" => "This contact was not found in your contact list"
        ]);

        $user = User::where("email", $data["user_email"])->first(["id"]);
        $contact = Contact::where("email", $data["contact"])->first(["id"]);

        $shareExists = $contact->sharedWithUsers()->wherePivot("user_id", $user->id)->first();
        if ($shareExists) {
            return back()->withInput()->withErrors([
                "contact_email" => "This contact was already shared with user $user->email"
            ]);
        }

        $contact->sharedWithUsers()->attach($user->id);

        Mail::to($user)->send(new ContactShared(auth()->user()->email, $contact->email));

        return redirect()->route("home")->with("alert", [
            "message" => "Contact $contact->email shared with $user->email succesfully"
        ]);
    }

    public function destroy(int $id)
    {
        // $contactShare = auth()->user()->contacts()->with([
        //     "sharedWithUsers" => fn($q) => $q->where("contact_shares.id", $id)
        // ])->get()->firstWhere(fn($contact) => $contact->sharedWithUsers->isNotEmpty());

        $contactShare = DB::selectOne("SELECT * FROM contacts where id = ?", [$id]);
        $contact = Contact::findOrFail($contactShare->contact_id);

        abort_if($contactShare->user_id !== auth()->id(), 403);

        $contact->sharedWithUsers()->detach($contactShare->user_id);

        return redirect()->route("contact-shares.index")->with("alert", [
            "message" => "Contact $contact->email unshared",
            "type" => "success"
        ]);
    }
}
