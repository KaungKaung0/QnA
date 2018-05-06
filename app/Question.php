<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $fillable = [
    	'question', 'q_id' , 'user_id' ,'viewer_count' ,'count' , 'total' , 'avg'
    ];

    public function user()
    {
        	return $this->hasOne('App\User');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
}
