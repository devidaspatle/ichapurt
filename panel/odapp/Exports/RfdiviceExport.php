<?php

namespace App\Exports;

use App\Rfdivice;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;

class RfdiviceExport implements FromCollection,WithHeadings
{
   public function headings():array{
        return[
        	'id',
            'Sr.No',
            'make',
            'model',
            'serial_number',
            'txtcondition',
            'location',
            'campus',
            'office',
            'created_at',
            'updated_at',
            'status'
        ];
    }
    public function collection()
    { 
        $userId = Auth::check()?Auth::id():true;
        $userId =User::where('id',$userId)->where('location');
        $user_type =User::where('id',$userId)->where('user_type');

        if($user_type=='user')
        {
            return Rfdivice::where('status','Y')->where('location',$location)->get();
        }else{
            return Rfdivice::all();
        }
        
    }
}
