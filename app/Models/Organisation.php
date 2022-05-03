<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Organisation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name' => 'string',
        'bio' => 'string',
        'year' => 'integer',
        'primary_phone' => 'string',
        'secondary_phone' => 'string',
        'tertiary_phone' => 'string',
        'primary_email' => 'string|email',
        'secondary_email' => 'string|email',
        'location' => 'string',
        'filepath' => 'string',
        'user_id' => 'string'
    ];

    /**
     * Get the user(administration) related to this organisation
     * i.e. in this case the CEO
     * 
     * @var obj<Organisation>
     * 
     * @return obj<User>
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
