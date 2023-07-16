<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'long',
        'lat',
        'category_id',
        'average_rating',
    ];

    public function category()
    {
        return $this->belongsTo(DestinationCategory::class);
    }



    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'wishlist');
    }

    public function photos()
    {
        return $this->hasMany(DestinationPhoto::class);
    }

}
