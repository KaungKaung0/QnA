<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
    	'answer', 'q_id' , 'user_id' , 
    ];

    protected $hidden = [
    	'q_id' 
    ];

    public function user()
    {
        	return $this->hasOne('App\User');
    }
    public function question()
    {
    	return $this->belongsTo('App\Question');
    }
}
