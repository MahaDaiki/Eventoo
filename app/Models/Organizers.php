<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organizers extends Model
{
    use HasFactory, SoftDeletes;
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
