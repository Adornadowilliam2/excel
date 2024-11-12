<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::all(); // Fetch all products
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Price', 'Created At', 'Updated At'];
    }
}

