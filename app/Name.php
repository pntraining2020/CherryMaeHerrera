<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'name',
        'clock_in',
        'clock_out',
        
    ];
    public function check()
    {
        return $this->hasMany('App\Break', 'nameid', 'id');
    }
    
}