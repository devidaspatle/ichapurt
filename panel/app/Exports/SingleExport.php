<?php

namespace App\Exports;
use App\Singleakata;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class SingleExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        	'id',
            'customerId',
            'category_name',
            'akata01',
            'akata02',
            'akata03',
            'akata04',
            'akata05',
            'akata06',
            'akata07',
            'akata08',
            'akata09',
            'akata10',
            'created_at'
        ];
    } 
   
    public function collection()
    {
        return Singleakata::all();
    }
}
