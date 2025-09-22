<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'profile_picture',
    //     'is_verified',
    //     'verification_token',
    // ];


    protected $fillable = ['name', 'photo']; // photo added for file upload
}


