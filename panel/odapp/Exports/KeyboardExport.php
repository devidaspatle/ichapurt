<?php

namespace App\Exports;

use App\Keyboard;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
Use App\User;
Use Illuminate\Support\Facades\Auth;

class KeyboardExport implements FromCollection,WithHeadings
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
        $location=User::where('id',$userId)->where('location');
        $user_type=User::where('id',$userId)->where('user_type');

        if($user_type=='user'){
            return Keyboard::where('status','Y')->where('location',$location);
        }
        return Keyboard::all();
    }
}
