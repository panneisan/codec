<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded=[];

    public function question(){
        $this->belongsTo(Question::class);
    }

    public function answer(){
        $this->hasMany(Answer::class);
    }
}
