<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payement extends Model
{
    use HasFactory;
    Protected $fillable= ['amount',
    'date',
    'payement_method',
   'order_id',
   ];


public function order(){
return $this->belongTo(order::class);

}
}
