<?php

namespace App\Models;

use App\Models\City;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'modality',
        'type',
        'salary',
        'benefits',
        'tags',
        'candidates_count',
        'city_id',
        'category_id',
        'sub_category_id',
        'company_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
