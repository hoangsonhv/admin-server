<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserContrller;
use App\Http\Controllers\CommentController;




Route::get("/login",[AdminController::class,"getLogin"]);

Route::post("/login",[AdminController::class,"postLogin"]);

Route::get("/logout", [AdminController::class, "logout"])->name("admin.logout");

Route::middleware("admin")->group(function (){
    Route::get('/', function () {
        return view('admin/home');
    });
    Route::get("/home", [AdminController::class, "homeAdmin"])->name("admin.home");

    Route::get("/products", [ProductController::class, "list"]);
    Route::get('/products/add', [ProductController::class, "add"]);
    Route::post('/productSave', [ProductController::class, "productSave"]);
    Route::get('/products/edit/{id}', [ProductController::class, "edit"]);
    Route::post('/products/update/{id}', [ProductController::class, "update"]);
    Route::get('/products/delete/{id}', [ProductController::class, "destroy"]);

    Route::get("/categories", [CategoryController::class, "categoryList"]);
    Route::get('/categories/add', [CategoryController::class, "categoryAdd"]);
    Route::post('/categorySave', [CategoryController::class, "categorySave"]);
    Route::get('/categories/edit/{id}', [CategoryController::class, "categoryEdit"]);
    Route::post('/categories/update/{id}', [CategoryController::class, "categoryUpdate"]);
    Route::get('/categories/delete/{id}', [CategoryController::class, "delete"]);

    Route::get("users",[UserContrller::class,"listUser"]);
    Route::get("users/edit/{id}",[UserContrller::class,"editUser"]);
    Route::post("users/update/{id}",[UserContrller::class,"updateUser"]);
    Route::get("users/delete/{id}",[UserContrller::class,"deleteUser"]);

    Route::get("comments",[CommentController::class,"listComment"]);
    Route::get("comments/delete/{id}",[CommentController::class,"deleteComment"]);

    Route::get("teams",[AdminController::class,"getTeam"]);
    Route::get("teams/add",[AdminController::class,"getSaveTeam"]);
    Route::post("teamsAdd",[AdminController::class,"saveTeam"]);
});


