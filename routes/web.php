<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/contact", function () {
    return view("/contact");
});

Route::post("/contact", function (Request $request) {
    return Response::json(["message" => "hola"])->setStatusCode(200);
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
