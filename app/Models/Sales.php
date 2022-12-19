<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sales extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    protected $fillable = [
        'user_id',
        'event_id',
        'ticket_id',
        'quantity',
        'price',
        
        
        
        
    ];

    public function event(){
        return $this->hasOne(Event::class,'id','event_id');
    }

    public function ticket(){
        return $this->hasOne(Ticket::class,'id','ticket_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
