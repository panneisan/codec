<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded=[];
    public function questionaire(){
        $this->belongsTo(Questionaire::class);
    }
    public function answers(){
        $this->hasMany(Answer::class);
    }
}
