<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pageadd extends Model
{
    use HasFactory;
    protected $fillable = ['productname', 'description','image' ,'quantity','price','totalprice','id_product'];
}
