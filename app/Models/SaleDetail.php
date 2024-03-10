<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $primaryKey = 'DetailID';

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'SaleID');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }
}
