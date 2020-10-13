<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredMedicine extends Model
{
    use HasFactory;

    protected $fillable = ['registered_number', 'product_name', 'status', 'holder_name', 'ref_number', 'manufacturer_name', 'description'];
}
