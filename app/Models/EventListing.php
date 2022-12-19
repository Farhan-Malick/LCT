<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventListing extends Model
{
    use HasFactory;
    public function events(){
        return $this->hasOne(Event::class,'id','event_id');
    }
  
}
