<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  public function questions() {
    return $this->hasMany(Question::class);
  }
  protected $table = 'survey';
}
