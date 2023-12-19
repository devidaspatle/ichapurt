<?php

namespace App\Exports;

use App\Scanner;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;

class ScannerExport implements FromCollection,WithHeadings
{
     public function headings():array{
        return[
        	'id',
            'Sr.No',
            'make',
            'model',
            'serial_number',
            'scanner_type',
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
        $UserId =Auth::check()?Auth::id():true;
        $location =User::where('id',$UserId)->where('location');
        $user_type =User::where('id',$UserId)->where('user_type');

        if($user_type=='user'){
            return Scanner::where('status','Y')->where('location',$location)->get();
        }
        else{
            return Scanner::all();
        }    
    }
}
