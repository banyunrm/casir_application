<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $primaryKey = 'SaleID';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }
    public function saledetails()
    {
        return $this->hasMany(SaleDetail::class, 'SaleID');
    }
}
