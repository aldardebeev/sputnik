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

    public function users()
    {
        return $this->belongsToMany(User::class, 'wishlist');
    }
}