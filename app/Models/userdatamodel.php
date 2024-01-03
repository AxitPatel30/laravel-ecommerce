<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdatamodel extends Model
{
    protected $table ='user_data';
    protected $fillable = ['emailadd','name','address','city','state','country'];
}
