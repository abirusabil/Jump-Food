<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodSchedule extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function MenuSunday(){
        return $this->belongsTo(Menu::class,'Sunday','id');
    }
    public function User(){
        return $this->belongsTo(User::class,'UserId','id');
    }
    public function MenuMonday(){
        return $this->belongsTo(Menu::class,'Monday','id');
    }
    public function MenuThusday(){
        return $this->belongsTo(Menu::class,'Thusday','id');
    }
    public function MenuWednesday(){
        return $this->belongsTo(Menu::class,'Wednesday','id');
    }
    public function MenuThursday(){
        return $this->belongsTo(Menu::class,'Thursday','id');
    }
    public function MenuFriday(){
        return $this->belongsTo(Menu::class,'Friday','id');
    }
    public function MenuSaturday(){
        return $this->belongsTo(Menu::class,'Saturday','id');
    }
}
