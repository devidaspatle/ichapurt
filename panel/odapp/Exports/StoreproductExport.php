<?php

namespace App\Exports;
use App\Productexprot;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StoreproductExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'id',
            'LabName',
            'Asset Type',
            'Make',
            'Model',
            'Serial Number',
            'Processor',
            'Ram',
            'Harddisk',
            'Screen Size',
            'Slot',
            'Power Backup',
            'Vendor',
            'Purchase Date',
            'Warranty',
            'status',
            'Comment',
            'created_at'
        ];
    } 
    public function collection()
    {
        return Productexprot::all();
    }
}
