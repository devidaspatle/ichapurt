<?php

namespace App\Exports;

use App\Headphone;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;

class HeadphoneExport implements FromCollection,WithHeadings
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
        $userId = Auth::check()? Auth::id():true;
        $location = User::where('id', $userId)->value('location');
        $user_type = User::where('id',$userId)->value('user_type');
        if($user_type=='user'){
            return Headphone::where('status','Y')->where('location',$location)->get();
        }else{
            return Headphone::all();
        }
        
    }
}
