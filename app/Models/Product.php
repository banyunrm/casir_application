<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'ProductID';

    public function saledetails()
    {
        return $this->hasMany(SaleDetail::class, 'ProductID');
    }
}
