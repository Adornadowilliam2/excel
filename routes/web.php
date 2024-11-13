<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProductController;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/export', function () {
    return Excel::download(new ProductsExport, 'data.xlsx');
});