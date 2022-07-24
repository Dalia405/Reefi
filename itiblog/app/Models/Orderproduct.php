<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderproduct extends Model
{
    use HasFactory;
    public $fillable = [ 'username','email','productname', 'image','description','quantity','price','totalprice','status'  ];
}
