<?php

namespace App\Imports;

use App\Storeproduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductstoreImport implements ToModel
{
   
    public function model(array $row)
    {
        return new Storeproduct([
            'Lab Name' => $row[1],
            'Asset Type' => $row[2],
            'make' => $row[3],
            'model' => $row[4],
            'serial_number' => $row[5],
            'processor' => $row[6],
            'ram' => $row[7],
            'hdd' => $row[8],
            'screen_size' => $row[9],
            'power_backup' => $row[10],
            'vendor' => $row[11],
            'purchase_date' => $row[12],
            'warranty' => $row[13],
            'status' => $row[14],
            'comment' => $row[15] ? 1:0
        ]);
    }
}
