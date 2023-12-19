<?php

namespace App\Exports;
use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class SearchproductExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        	'id',
            'Product Id',
            'Asset Code',
            'Location',
            'Campus',
            'Office',
            'Department',
            'Employee',
            'Employee Id',
            'Issuance date',
            'Asset Type',
            'Located At',
            'Exact Location',
            'Make',
            'Model',
            'Serial Number',
            'Processor',
            'Ram',
            'Hard Disk',
            'Screen Size',
            'Slot',
            'Power Backup',
            'Vendor',
            'Purchase Date',
            'Warranty',
            'AMC',
            'pro_condition',
            'Comment',
            'created_at',
            'updated_at',
            'currentStatus'
        ];
    } 
    public function collection()
    {
        return Product::all();
    }
}
