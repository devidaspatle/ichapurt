<?php
namespace App\Imports;

use App\Storeproduct;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Storeproduct($row);
        // return new Storeproduct([
        //     'id' => $row['id'],
        //     'productId' => $row['productId'],
        //     'make'=> $row['make'],
        //     'model' => $row['model'],
        //     'serial_number'=> $row['serial_number'],
        //     'processor'=> $row['processor'],
        //     'ram'=> $row['ram'],
        //     'hdd'=> $row['hdd'],
        //     'screen_size'=> $row['screen_size'],
        //     'power_backup'=> $row['power_backup'],
        //     'vendor'=> $row['vendor'],
        //     'purchase_date'=> $row['purchase_date'],
        //     'warranty'=> $row['warranty'],
        //     'comment'=> $row['comment'],
        //     'created_at'=> $row['created_at'],
        //     'updated_at'=> $row['updated_at'],
        //     'currentStatus'=> $row['currentStatus'],
        // ]);
    }
}
