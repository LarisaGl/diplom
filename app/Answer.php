<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'id', 'answer', 'ask_id', 'category_id', 'admin_id'
    ];

    public function category() {
      return $this->belongsTo("App/Category");
    }

    public function ask() {
      return $this->belongsTo("App/Ask");
    }

    public function admin() {
      return $this->belongsTo("App/Admin");
    }

    public $timestamps = true;
}
