<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'login', 'password'
    ];

    public function answers() {
      return $this->hasMany("App/Answer");
    }
}
