<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meat extends Model
{
    use HasFactory;
    protected $fillable = ["productname","description","img_path","price"];
}
