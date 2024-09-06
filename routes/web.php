<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\TyreSizeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\PatterenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name("home");

Route::get("/manufacturers/{id}", [ManufacturerController::class, "manufacturer"])->name("manufacturers");


// Route::view("/tyre-patteren", "frontend.tyre-pattren")->name("tyre-patteren");

Route::get("/tyre-patteren/{m_id}/{id}", [PatterenController::class, "index"])->name("tyre-patteren");


Route::view("/booking", "frontend.booking")->name("booking");
Route::view("/checkout", "frontend.checkout")->name("checkout");
Route::view("/gallery", "frontend.gallery")->name("gallery");
Route::view("/about", "frontend.about")->name("about");
Route::view("/cart", "frontend.cart")->name("cart");


Route::group(["middleware" => "isLoggedIn"], function () {
    Route::get("/signup", [AuthController::class, "signup"])->name("signup");
    Route::post("/register", [AuthController::class, "register"])->name("register");

    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::post("/login-auth", [AuthController::class, "loginAuth"])->name("loginAuth");
});

Route::group(["middleware" => "auth"], function () {
    Route::get("/profile", [AuthController::class, "profile"])->name("profile");
    Route::get("/change-password", [AuthController::class, "changePassword"])->name("changePassword");
    Route::post("/update-password", [AuthController::class, "udpatePassword"])->name("udpatePassword");
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
});



// ADMIN ROUTES
Route::view("/admin/login", "admin.index")->name("admin.login");
Route::post("/admin/auth", [AdminController::class, "adminAuth"])->name("admin.auth");
Route::group(["middleware" => "isAdmin"], function () {
    Route::group(["prefix" => "admin"], function () {
        Route::get("dashboard", [AdminController::class, "index"])->name("admin.dashboard");

        // PRODUCTS
        Route::get("products", [AdminController::class, "products"])->name("admin.products");
        Route::get("products/add", [AdminController::class, "addProduct"])->name("admin.addProduct");
        Route::post("products/save", [AdminController::class, "saveProduct"])->name("admin.saveProduct");
        Route::get("products/edit/{id}", [AdminController::class, "editProduct"])->name("admin.editProduct");
        Route::post("products/update/{id}", [AdminController::class, "updateProduct"])->name("admin.updateProduct");
        Route::post("products/delete/", [AdminController::class, "deleteProduct"])->name("admin.deleteProduct");


        // MANFUACTURES
        Route::get("manufacturers", [AdminController::class, "manufacturers"])->name("admin.manufacturers");
        Route::get("manufacturers/add", [AdminController::class, "addManufacturers"])->name("admin.addManufacturers");
        Route::post("manufacturers/save", [AdminController::class, "saveManufacturers"])->name("admin.saveManufacturers");
        Route::get("manufacturers/edit/{id}", [AdminController::class, "editManufacturers"])->name("admin.editManufacturers");
        Route::post("manufacturers/update", [AdminController::class, "updateManufacturers"])->name("admin.updateManufacturers");
        Route::post("manufacturers/delete", [AdminController::class, "deleteManufacturers"])->name("admin.deleteManufacturers");

        // TYRE PATTERENS
        Route::get("tyre-patteren", [AdminController::class, "tyrePatteren"])->name("admin.tyrePatteren");
        Route::get("tyre-patteren/add", [AdminController::class, "addTyrePatteren"])->name("admin.addTyrePatteren");
        Route::post("tyre-patteren/save", [AdminController::class, "saveTyrePatteren"])->name("admin.saveTyrePatteren");
        Route::get("tyre-patteren/edit/{id}", [AdminController::class, "editTyrePatteren"])->name("admin.editTyrePatteren");
        Route::post("tyre-patteren/delete", [AdminController::class, "deleteTyrePatteren"])->name("admin.deleteTyrePatteren");

        // USERS
        Route::get("users", [AdminController::class, "users"])->name("admin.users");
        Route::get("users/add", [AdminController::class, "addUser"])->name("admin.addUser");
        Route::get("users/edit/{id}", [AdminController::class, "editUser"])->name("admin.editUser");

        // TYRE SIZES 
        Route::get("/tyre-sizes", [TyreSizeController::class, "index"])->name("admin.tyreSize");
        Route::get("/tyre-sizes/add", [TyreSizeController::class, "add"])->name("admin.addTyreSize");
        Route::post("/tyre-sizes/save", [TyreSizeController::class, "save"])->name("admin.saveTyreSize");
        Route::get("/tyre-sizes/edit/{id}", [TyreSizeController::class, "edit"])->name("admin.editTyreSize");
        Route::post("/tyre-sizes/update/{id}", [TyreSizeController::class, "update"])->name("admin.updateTyreSize");
        Route::post("/tyre-sizes/delete", [TyreSizeController::class, "delete"])->name("admin.deleteTyreSize");


        // ORDERS
        Route::get("orders", [AdminController::class, "orders"])->name("admin.orders");
    });
});
