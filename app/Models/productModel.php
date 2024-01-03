<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table ='product_data';
    protected $fillable = ['photo','photo2','photo3','photo4','category','price','description'];
}
