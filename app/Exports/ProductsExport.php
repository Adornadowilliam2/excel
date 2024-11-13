<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::all();
    }

    public function headings(): array
    {
        return ['ID', 'Link', 'Content', 'Remarks', 'Views', 'Comment','Like','Link Clicked','Share','Save', 'Created_At', 'Update_At'];
    }
}

