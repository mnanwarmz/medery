<?php

namespace App\Http\Controllers;

use App\Imports\CanceledMedicineImport;
use App\Models\CanceledMedicine;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CanceledMedicineController extends Controller
{
    public function fileImport()
    {
        Excel::import(new CanceledMedicineImport, 'data/produk_batal.csv');

        return [
            'data successfully imported'
        ];
    }
    public function index()
    {
        $data = CanceledMedicine::all();

        return [
            'data' => $data
        ];
    }
}
