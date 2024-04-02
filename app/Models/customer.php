<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    Protected $fillable= ['firstname',
                         'lastname',
                         'tel',
                        'mail',
                        'password',
                        'address',
                        ];


       public function order(){
            return $this->belongTo(order::class);

       }
}
