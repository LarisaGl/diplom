<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $fillable = [
        'id', 'ask', 'category_id', 'user_id', 'answer_id', 'status', 'date-add'
    ];

    public function category() {
      return $this->belongsTo("App/Category");
    }

    public function user() {
      return $this->belongsTo("App/User");
    }

    public function answer() {
      return $this->belongsTo("App/Answer");
    }
}
