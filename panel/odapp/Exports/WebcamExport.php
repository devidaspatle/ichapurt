<?php

namespace App\Exports;

use App\Webcam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;

class WebcamExport implements FromCollection,WithHeadings
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
            'Updated_at',
            'status'
        ];
    } 
    public function collection()
    {  
        $userId =Auth::check()?Auth::id():true;
        $location =User::where('id',$userId)->where('location');
        $user_type =User::where('id',$userId)->where('user_type');

        if($user_type=='user')
        {
            return Webcam::where('status','Y')->where('location',$location)->get();
        }
        else{
            return Webcam::all();
        }
       
    }
}
