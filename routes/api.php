<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/export-products', function () {
    return Excel::download(new ProductsExport, 'products.xlsx');
});
