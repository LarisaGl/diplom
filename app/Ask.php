<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    public function category() {
      return $this->belongsTo("App/Category")
    }

    public function user() {
      return $this->belongsTo("App/User")
    }

    public function answer() {
      return $this->belongsTo("App/Answer")
    }

    public function answers() {
      return $this->hasMany("App/Answer");
    }
}
