<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $fillable = [
    	'question', 'q_id'
    ];

    protected $hidden = [
    	'q_id'
    ];

    public function user()
    {
        	return $this->hasOne('App\User');
    }
}
