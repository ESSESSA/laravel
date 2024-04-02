<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    Protected $fillable= ['number',
    'date',
    'tel',
   'customer_id',
   'statuts',
   ];


public function customer(){
return $this->belongTo(customer::class);

}
}
