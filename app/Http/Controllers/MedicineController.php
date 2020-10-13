<?php

namespace App\Http\Controllers;

use App\Imports\MedicineImport;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MedicineController extends Controller
{
    public function index()
    {
        $data = Medicine::all();

        return [
            'data' => $data
        ];
    }
    public function fileImport()
    {
        Excel::import(new MedicineImport, 'data\market_price.csv');

        return [
            'data successfully imported'
        ];
    }
}
