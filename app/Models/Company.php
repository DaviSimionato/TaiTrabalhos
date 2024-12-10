<?php

namespace App\Models;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'name',
        'user_id',
        'cnpj',
        'email',
        'address',
        'city_id',
        'state_id',
        'social_media_links',
        'employees_count',
        'profile_picture',
        'logo',
        'sector'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function jobListings() {
        return $this->hasMany(JobListing::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
