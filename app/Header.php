<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    //
    protected $fillable = [
        'description',
        'user_id'
    ];

    public function users() {
        return $this->belongsTo('App\User');
    }
    
}
