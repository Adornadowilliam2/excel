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
        return ['ID', 'Link', 'Content', 'Remarks', 'Views', 'Comment','Like','Link Clicked','Share','Save'];
    }
}

