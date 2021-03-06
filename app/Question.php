<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $casts = [
      'option_name' => 'array',
  ];
  protected $fillable = ['title', 'question_type', 'option_name', 'user_id'];
  public function survey() {
    return $this->belongsTo(Survey::class);
  }
  protected $table = 'question';
}
