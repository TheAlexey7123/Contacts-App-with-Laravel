<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Cache::remember(
            auth()->id(),
            now()
                ->addMinutes(30),
            fn() => auth()->user()->contacts()->latest()->take(9)->get()
        );

        return view("home", compact("contacts"));
        // return view('home', [
        //     "contacts" => auth()->user()->contacts()->latest()->take(9)->get()
        // ]);
    }
}
