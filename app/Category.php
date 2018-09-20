<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function answers() {
      return $this->hasMany("App/Answer");
    }

    public function asks() {
      return $this->hasMany("App/Ask");
    }
}
