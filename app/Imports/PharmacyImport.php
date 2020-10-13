<?php

namespace App\Imports;

use App\Models\Pharmacy;
use Maatwebsite\Excel\Concerns\ToModel;

class PharmacyImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pharmacy([
            'name' => $row[0],
            'address' => $row[1],
            'road_address' =>  $row[2],
            'city' => $row[3],
            'state' => $row[5],
            'postcode' => $row[6],
        ]);
        // $table->id();
        // $table->string('name');
        // $table->string('address');
        // $table->string('postcode');
        // $table->string('city');
        // $table->string('state');
        // $table->string('phone');
        // $table->string('long');
        // $table->string('lat');
        // $table->string('email');
        // $table->unsignedInteger('user_id');
        // $table->timestamps();
    }
}
