<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\Contact as ModelsContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

use function PHPUnit\Framework\isNull;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        "name" => "required",
        "phone_number" => ["required", "digits:9"],
        "email" => ["required", "email"],
        "age" => ["required", "min:1", "max:100"]
    ];

    public function index()
    {
        //
        // $contacts = Contact::where("user_id", auth()->id())->get();
        $contacts = auth()
            ->user()
            ->contacts()
            ->orderBy("name", "desc")
            ->paginate(9);
        return view("contacts.index", ["contacts" => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->rules);

        if ($request->hasFile("profile_picture")) {
            $path = $request->file("profile_picture")->store("profiles", "public");
            $data["profile_picture"] = $path;
        }

        // $request->file("profile_picture")
        // $data = $request->validate($this->rules);

        $data["user_id"] = auth()->id();

        Cache::forget(auth()->id());

        Contact::create($data);
        // $contact = auth()->user()->contacts()->create($data);
        return redirect("home")->with("alert", [
            "message" => "Contact {$data['name']} successfully saved",
            "type" => "success"
        ]);
    }

    public function validateEx3(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:64",
            "description" => "required|string|max:512",
            "price" => "required|numeric|gt:0",
            "has_battery" => "boolean|required",
            "battery_duration" => "required_if:has_battery,true|numeric|gt:0",
            "colors" => "required|array",
            "colors.*" => "string|required",
            "dimensions" => "required|array",
            "dimensions.width" => "required|numeric|gt:0",
            "dimensions.height" => "required|numeric|gt:0",
            "dimensions.length" => "required|numeric|gt:0",
            "accessories" => "required|array",
            "accessories.*" => "required|array",
            "accessories.*.name" => "required|string",
            "accessories.*.price" => "required|numeric|gt:0",
        ]);

        return response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
        $this->authorize('view', $contact);
        return view("contacts.show", compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
        $this->authorize('update', $contact);
        Cache::forget(auth()->id());


        return view("contacts.edit", ["contact" => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
        $this->authorize('update', $contact);

        $data = $request->validate($this->rules);

        if ($request->hasFile("profile_picture")) {
            $path = $request->file("profile_picture")->store("profiles", "public");
            $data["profile_picture"] = $path;
        } else {
            unset($data["profile_picture"]);
        }

        // Contact::update($data);
        Cache::forget(auth()->id());

        $contact->update($data);
        return redirect("home")->with("alert", [
            "message" => "Contact $contact->name succesfully updated",
            "type" => "success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
        $this->authorize('delete', $contact);


        $contact->delete();
        Cache::forget(auth()->id());

        return redirect("home")->with("alert", [
            "message" => "Contact $contact->name succesfully removed",
            "type" => "success"
        ]);
    }
}
