<?php

namespace App\Exports;
use App\Employee;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        	'id',
            'fullname',
            'employee_code',
            'mobile',
            'email',
            'date_of_birth',
            'city',
            'department_id',
            'office',
            'comment',
            'currentStatus',
            'created_at',
            'updated_at'
        ];
    } 
   
    public function collection()
    {
        return Employee::all();
    }
}
