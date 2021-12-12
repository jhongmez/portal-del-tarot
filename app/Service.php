<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    
}
