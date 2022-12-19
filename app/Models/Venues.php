<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function venues($params  = [])
    {
        $query = Venue::query()->with(['country']);

        if(!empty($params['search']))
        {
            $query
            ->whereRaw("( title LIKE '%".$params['search']."%'
                 OR state LIKE '%".$params['search']."%' OR city LIKE '%".$params['search']."%')");
        }

        if(!empty($params['city']))
        {
            $query
            ->where('city','LIKE',"%{$params['city']}%");
        }

        if(!empty($params['state']))
        {
            $query
            ->where('state','LIKE',"%{$params['state']}%");
        }

        return $query
        ->where(["status" => 1])->orderBy('updated_at', 'DESC')->paginate(9);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function Event()
    {
        return $this->belongsTo(Venues::class);
    }
}
