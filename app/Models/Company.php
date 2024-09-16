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
        'cnpj',
        'email',
        'address',
        'city_id',
        'state_id',
        'social_media_links',
        'employees_count',
        'profile_picture',
        'logo'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
