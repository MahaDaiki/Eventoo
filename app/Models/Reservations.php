<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservations extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'reservation'; 

    protected $fillable = [
        'event_id',
        'client_id',
        'number_of_people',
        'status',
       
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function client()
    {
        return $this->belongsTo(Clients::class, 'client_id');
    }
}
