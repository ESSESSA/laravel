<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_line extends Model
{
    use HasFactory;
    Protected $fillable= ['product_id',
    'quantity',
    'price',
    'order_id',
   ];


public function product(){
return $this->belongTo(product::class);

}
public function order(){
    return $this->belongTo(order::class);

}

}
