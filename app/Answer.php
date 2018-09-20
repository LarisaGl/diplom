<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function category() {
      return $this->belongsTo("App/Category")
    }

    public function ask() {
      return $this->belongsTo("App/Ask")
    }

    public function Admin() {
      return $this->belongsTo("App/Admin")
    }

    public function asks() {
      return $this->hasMany("App/Ask");
    }
}
