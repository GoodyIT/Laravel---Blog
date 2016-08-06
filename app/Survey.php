<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  protected $fillable = ['title', 'description'];
  // can have many answers or question
  public function questions() {
    return $this->hasMany(Question::class);
  }
  public function answers() {
    return $this->hasMany(Answer::class);
  }

  protected $table = 'survey';
}
