<?php

namespace App\Exports;

use App\Fulldesktop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;

class FulldesktopExport implements FromCollection,WithHeadings
{
      public function headings():array{
        return[
        	'id',
            'Sr.No',
            'cpu_serial_number',
            'monitor_serial_number',
            'keyboard_serial_number',
            'mouse_serial_number',
            'txtcondition',
            'location',
            'campus',
            'office',
            'created_at',
            'updated_at',
            'status',
        ];
    } 
    public function collection()
    {  
        $userId = Auth::check() ? Auth::id() : true;
        $location = User::where('id', $userId)->value('location');
        $user_type = User::where('id', $userId)->value('user_type');
        if($user_type =='user') {
            return Fulldesktop::where('status','Y')->where('location',$location)->get();
        }else
        {
            return Fulldesktop::all();
        }
           
        
    }
}