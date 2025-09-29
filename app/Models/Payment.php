<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Pricing(){
       return $this->belongsTo(Pricing::class,'PricingId','id');
    }
}
