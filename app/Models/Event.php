<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendee;

class Event extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title' => 'string',
        'description' => 'string',
        'start_date' =>'date',
        'end_date' => 'date',
        'reg_end' => 'date',
        'seats' => 'integer',
        'location' => 'string',
        'filepath' => 'string',
        'price' => 'string'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_date' =>'date',
        'end_date' => 'date',
        'reg_end' => 'date',
    ];

    /**
     * Get the event related to this attendee
     * 
     * @var array<Attendee>
     * 
     * @return obj<Event>
     */
    public function event()
    {
        return $this->hasMany(Attendee::class);
    }
}
