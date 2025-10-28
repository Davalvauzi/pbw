<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::select('id', 'product_name', 'unit', 'type', 'information', 'qty', 'producer', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Produk',
            'Satuan',
            'Tipe',
            'Informasi',
            'Jumlah',
            'Produsen',
            'Tanggal Dibuat'
        ];
    }
}
