<?php

namespace App\Imports;

use App\Models\Medicine;
use Maatwebsite\Excel\Concerns\ToModel;

class MedicineImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Medicine([
            'type' => $row[0],
            'name' => $row[1],
            'brand' => $row[2],
            'unit' => $row[3],
            'price' => $row[4],
            'update_year' => $row[5]
        ]);
    }
}
