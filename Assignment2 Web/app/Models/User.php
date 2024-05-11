<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "information";
    protected $fillable=["fullName", "username", "email", "password", "phone", "address", "birth" , "ImgName"];
    public $timestamps = false;
    
}
