<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;
    protected $fillable = [
        'title',
        'description',
        'time',
        'location',
        'duration',
        'disponible_tickets',
        'is_valid',
        'is_automatic',
        'organizer_id',
        'category_id',
        'id_media'
       
    ];

    public function organizer()
    {
        return $this->belongsTo(Organizers::class, 'organizer_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservations::class, 'event_id');
    }
}

