<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    protected $guarded =[];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function questions(){
        $this->hasMany(Question::class);
    }

}
