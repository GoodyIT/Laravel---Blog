<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $fillable = ['title', 'question_type'];
  public function survey() {
    return $this->belongsTo(Survey::class);
  }
  protected $table = 'question';
}
