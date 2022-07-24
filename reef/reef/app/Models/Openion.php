<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Openion extends Model
{
    use HasFactory;
    protected $fillable = ["name", "email", "comments", "star_rating", "website_rate", "products_rate", "service_rate"];
}
