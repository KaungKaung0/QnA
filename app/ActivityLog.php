<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    //
    protected $fillable =[
    	'user_id' , 'ans_id' , 'vote'
    ];
    // protected $hidden =[
    // 	'user_id' , 'ans_id' , 'vote'
    // ];

    public function user(){
    	$this->hasMany('App\User');
    }
    public function answer(){
    	$this->hasMany('App\Answer');
    }
}
