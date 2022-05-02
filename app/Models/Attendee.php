<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Attendee extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'event_id' => 'string'
    ];

    /**
     * Get the attendee on this event
     * 
     * @var obj<Event>
     * 
     * @return obj<Attendee>
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
