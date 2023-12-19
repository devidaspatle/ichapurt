<?php

namespace App\Exports;

use App\Printer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Illuminate\Support\Facades\Auth;

class PrinterExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
        	'id',
            'Sr.No',
            'make',
            'model',
            'serial_number',
            'printer_type',
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
         $userId=Auth::check()?Auth::id():true;
         $location=User::where('id',$userId)->where('location');
         $user_type=User::where('id',$userId)->where('user_type');

         if($user_type=='user'){
            return Printer::where('status','Y')->where('location',$location)->get();
         }
         else{
            return Printer::all();
         }
        
    }
}
