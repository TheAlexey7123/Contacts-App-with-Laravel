<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactShareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokenController;

use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProductController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Laravel\Cashier\Checkout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return auth()->check() ? redirect("/home") : view('welcome');
});

Auth::routes();

// Route::get("/contacts/create", [ContactController::class, 'create'])->name('contacts.create');
// Route::post("/contacts/create", [ContactController::class, 'store'])->name('contacts.store');

// Route::get("/contacts/{contact}/edit", [ContactController::class, 'edit'])->name('contacts.edit');
// Route::put("/contacts/{contact}/update", [ContactController::class, 'update'])->name('contacts.update');
// Route::delete("/contacts/{contact}/", [ContactController::class, 'destroy'])->name('contacts.destroy');

// Route::get("/contacts/{contact}/show", [ContactController::class, "show"])->name("contacts.show");
// Route::get("/contacts", [ContactController::class, "index"])->name("contacts.index");

Route::middleware(["auth", "subscription"])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource("/contacts", ContactController::class);
    Route::resource("contact-shares", ContactShareController::class)
        ->except(["show", "edit", "update"]);
    Route::resource("/tokens", TokenController::class)->only(["store", "create"]);
});
// Route::resource("products", ProductController::class);

// Route::get("/contact", function () {
//     return view("contact");
// });

Route::get('/billing', [StripeController::class, "billing"])->name("billing");
// ->middleware(['auth'])->name('billing');

Route::get("/checkout", [StripeController::class, "checkout"])->name("checkout");
Route::get("/free-trial-end", [StripeController::class, "freeTrialEnded"])->name("freeTrialEnded");


// Route::get('/checkout', function (Request $request) {
//     return $request->user()
//         ->newSubscription('default', config("stripe.price_id"))
//         ->checkout();
//     // ->trialDays(5)
//     // ->allowPromotionCodes();
//     // ->checkout([
//     //     'success_url' => route('your-success-route'),
//     //     'cancel_url' => route('your-cancel-route'),
//     // ]);
// });

Route::post("/ejercicio3", [ContactController::class, "validateEx3"])->name("ex3");

Route::post("/contact", function (Request $request) {
    $data = $request->all;
    contact::create($data);
    // $contact = new Contact();
    // $contact->name = $data["name"];
    // $contact->phone_number = $data["phone_number"];
    // $contact->save();
});

Route::post("/ejercicio2/a", function (Request $request) {
    //devolver lo mismo que me mandan
    // return $request;

    return Response::json([
        "name" => $request["name"],
        "description" => $request["description"],
        "price" => $request["price"]
    ]);
});

Route::post("/ejercicio2/b", function (Request $request) {
    $price = $request["price"];
    if ($price <= 0) {
        return Response::json([
            "message" => "Price can't be less than 0"
        ])->setStatusCode(422);
    }
});

Route::post("/ejercicio2/c", function (Request $request) {
    //SAVE5 SAVE10 SAVE15
    $discount = 0;
    $query = $request->query('discount');
    $price = $request["price"];

    if ($query == "SAVE5") {
        //
        $discount = 5;
    } elseif ($query == "SAVE10") {
        //
        $discount = 10;
    } elseif ($query == "SAVE15") {
        //
        $discount = 15;
    }

    $price = $price * (100 - $discount) / 100;
    $res = Response::json([
        "name" => $request["name"],
        "description" => $request["description"],
        "price" => $price,
        "discount" => $discount
    ]);

    return $res;
});
