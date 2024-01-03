<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartmodel extends Model
{
    protected $table ='cart_data';
    protected $fillable = ['productid','photo','photo2','photo3','photo4','productname','category','price','description','email'];
}
