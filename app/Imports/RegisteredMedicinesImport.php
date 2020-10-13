<?php

namespace App\Imports;

use App\Models\RegisteredMedicine;
use Maatwebsite\Excel\Concerns\ToModel;

class RegisteredMedicinesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new RegisteredMedicine([
            'ref_number' => $row[0],
            'registered_number' => $row[1],
            'product_name' => $row[2],
            'status' => $row[3],
            'description' => $row[4],
            'holder_name' => $row[5],
            'manufacturer_name' => $row[6],
        ]);
    }
}
