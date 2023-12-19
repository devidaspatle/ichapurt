<?php

namespace App\Exports;
use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;
class ProductExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        	'id',
            'Sr.No',
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

        $userId = Auth::check()? Auth::id():true;
        $location = User::where('id', $userId)->value('location');
        $user_type = User::where('id',$userId)->value('user_type');
        if($user_type=='user'){
            return Product::where('status','Y')->where('location',$location)->get();
        }else{
            return Product::all();
        }
    }
}
