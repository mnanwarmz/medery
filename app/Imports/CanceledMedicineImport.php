<?php

namespace App\Imports;

use App\Models\CanceledMedicine;
use Maatwebsite\Excel\Concerns\ToModel;

class CanceledMedicineImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new CanceledMedicine([
            'register_number' => $row[0],
            'product_name' => $row[1],
            'description' => $row[2],
            'register_date' => $row[3],
            'end_register_date' => $row[4],
            'cancel_date' => $row[5],
            'holder_name' => $row[6],
            'manufacturer_name' => $row[7],
        ]);
    }
}
