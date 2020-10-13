<?php

namespace App\Http\Controllers;

use App\Imports\PharmacyImport;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PharmacyController extends Controller
{
    public function index()
    {
        $data = Pharmacy::all();

        return [
            'data' => $data
        ];
    }
    public function fileImport()
    {
        Excel::import(new PharmacyImport, 'data/komuniti_farmasi.csv');

        return [
            'data successfully imported'
        ];
    }
}
