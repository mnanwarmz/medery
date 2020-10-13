<?php

namespace App\Http\Controllers;

use App\Imports\RegisteredMedicinesImport;
use App\Models\RegisteredMedicine;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RegisteredMedicineController extends Controller
{
    public function index()
    {
        $data = RegisteredMedicine::all();

        return [
            'data' => $data
        ];
    }
    public function fileImport()
    {
        Excel::import(new RegisteredMedicinesImport, 'data/produk_daftar.csv');

        return [
            'data successfully imported'
        ];
    }
}
