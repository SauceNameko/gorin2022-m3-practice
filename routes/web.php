<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SetmenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/admin", [LoginController::class, "login"])->name("login");
Route::post("/admin", [LoginController::class, "check"])->name("check");
Route::get("/dashboard", [UserController::class, "index"])->name("dashboard");
Route::get("/admin/logout", [LoginController::class, "logout"])->name("logout");

Route::get("/admin/item", [ItemController::class, "index"])->name("item_index");
Route::get("/admin/item/create", [ItemController::class, "create"])->name("item_create");
Route::post("/admin/item/store", [ItemController::class, "store"])->name("item_store");
Route::get("/admin/item/edit/{id}", [ItemController::class, "edit"])->name("item_edit");
Route::post("/admin/item/update/{id}", [ItemController::class, "update"])->name("item_update");
Route::get("/admin/item/destroy/{id}", [ItemController::class, "destroy"])->name("item_destroy");

Route::get("/admin/setmenu", [SetmenuController::class, "index"])->name("setmenu_index");
Route::get("/admin/setmenu/create", [SetmenuController::class, "create"])->name("setmenu_create");
Route::post("/admin/setmenu/store", [SetmenuController::class, "store"])->name("setmenu_store");
Route::get("/admin/setmenu/edit/{id}", [SetmenuController::class, "edit"])->name("setmenu_edit");
Route::post("/admin/setmenu/update/{id}", [SetmenuController::class, "update"])->name("setmenu_update");
Route::get("/admin/setmenu/destroy/{id}", [SetmenuController::class, "destroy"])->name("setmenu_destroy");
