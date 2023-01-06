<?php

namespace App\Models;

use App\Models\EventListing;
use App\Models\VanueSections;
use App\Models\Purchases;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class TicketListing extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function add_tickets($params = [], $ticket_id = null)
    {
        // if ticket_id exist then update otherwise create
        return TicketListing::updateOrCreate(
            ['id'=> $ticket_id],
            $params
        );
    }

    protected function quantity(): Attribute
    {
        $sum = Purchases::where('ticket_id', $this->id)->sum('quantity');
        return Attribute::make(
            get: fn ($value) => $value - $sum,
        );
    }

    public function get_event_tickets($params = [])
    {

        if(!empty($params['ticket_ids']))
        {
            $result = TicketListing::with(['taxes'])
                    ->whereIn('id', $params['ticket_ids'])
                    ->where('eventlisting_id', $params['eventlisting_id'])
                    ->orderBy('price')
                    ->get();
        }
        else
        {
            $result = TicketListing::with(['taxes'])->where(['eventlisting_id' => $params['eventlisting_id'] ])
                ->orderBy('price')
                ->get();
        }
        return $result;
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function event(){
        return $this->hasOne(EventListing::class,'id','eventlisting_id');
    }
    public function Section(){
        return $this->hasOne(VanueSections::class,'id');
    }
    public function Currency(){
        return $this->hasOne(Currency::class,'id');
    }

}
