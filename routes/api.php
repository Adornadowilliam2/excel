<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/export-products', function () {
    return Excel::download(new ProductsExport, 'products.xlsx');
});

Route::prefix("products")->group(function(){
    Route::get("/retrieve", [ProductController::class, "index"]);
    Route::post("/add", [ProductController::class, "store"]);
    Route::post("/update", [ProductController::class, "update"]);
    Route::post("/delete", [ProductController::class, "destroy"]);
});