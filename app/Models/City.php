<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $table = "cities";

    protected $fillable = [
        'name', 
        'state_id', 
        'jobs_listed'
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}