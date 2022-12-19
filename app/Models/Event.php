<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Venues;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $hidden  = ['online_location'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     *  total events
     */

    public function total_events()
    {
        return Event::where(['status' => 1])->count();
    }

    public function venues()
    {
        return $this->belongsToMany(Venues::class);
    }

}
