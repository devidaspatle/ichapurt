<?php

namespace App\Exports;
use App\Vendor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VendorExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        	'id',
            'vendor_name',
            'mobile',
            'email',
            'country',
            'state',
            'city',
            'address',
            'currentStatus',
            'created_at',
            'updated_at'
        ];
    } 
   
    public function collection()
    {
        return Vendor::all();
    }
}
