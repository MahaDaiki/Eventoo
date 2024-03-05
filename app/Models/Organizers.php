<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizers extends Model
{
    use HasFactory;
    protected $table = 'organizers';

    protected $fillable = [
        'user_id',
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function events()
    {
        return $this->hasMany(Event::class, 'organizer_id');
    }
    
}
