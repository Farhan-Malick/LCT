<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function add_tickets($params = [], $ticket_id = null)
    {
        // if ticket_id exist then update otherwise create
        return Ticket::updateOrCreate(
            ['id'=> $ticket_id],
            $params
        );

    }

    public function get_event_tickets($params = [])
    {

        if(!empty($params['ticket_ids']))
        {
            $result = Ticket::with(['taxes'])
                    ->whereIn('id', $params['ticket_ids'])
                    ->where('event_id', $params['event_id'])
                    ->orderBy('price')
                    ->get();
        }
        else
        {
            $result = Ticket::with(['taxes'])->where(['event_id' => $params['event_id'] ])
                ->orderBy('price')
                ->get();
        }

        return $result;
    }

    public function event(){
        return $this->hasOne(Event::class,'id','event_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
