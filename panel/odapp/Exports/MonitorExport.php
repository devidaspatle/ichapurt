<?php

namespace App\Exports;

use App\Monitor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;

class MonitorExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
        	'id',
            'Sr.No',
            'make',
            'model',
            'serial_number',
            'screen_size',
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
        $userId= Auth::check()?Auth::id():true;
        $location =User::Where('id',$userId)->where('location');
        $user_type=User::where('id',$userId)->where('user_type');

        if($user_type=='user'){
            return Monitor::where('status','Y')->where('location',$location)->get();
        }
        else{
            return Monitor::all();
        }
    }
}
