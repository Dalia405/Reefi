<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    //product has many user
    public function user(){
        return $this->belongsToMany(User::class);
    }
 
}
