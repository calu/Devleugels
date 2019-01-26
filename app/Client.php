<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
      'voornaam', 'familienaam', 'straat', 'huisnummer', 'bus',
      'postcode', 'gemeente', 'telefoon', 'gsm', 'email',
      'wachtwoord', 'geboortedatum', 'RRN', 'mutualiteit_id',
      'user_id', 'service_id','intake_id'  
    ];
    
    public function services()
    {
        return $this->hasMany(\App\Service);
    }    

}
