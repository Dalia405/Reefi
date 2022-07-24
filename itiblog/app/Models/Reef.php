<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reef extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'quantity','image' ,'price'];
}
