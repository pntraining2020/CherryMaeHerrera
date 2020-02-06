<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breaks extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'nameid',
        'clock_in',
        'clock_out',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

   
}