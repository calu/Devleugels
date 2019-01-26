<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'soort', 'user_id','status'        
    ];

    public function client()
    {
        return $this->belongsTo(\App\Client);
    }

}
