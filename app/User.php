<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'fullname','email','password','mobile'
    ];
    // protected $id= "userid";
    protected $primaryKey = "userid";
}
