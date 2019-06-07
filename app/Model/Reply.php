<?php

namespace App\Model;

use app\User;
use app\Model\Like;
use app\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question(){
    	return $this->belongsTo(Question::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function like(){
    	return $this->hasMany(Like::class);
    }
}
