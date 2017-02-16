<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
    ];
	
 //    public function students(){

 //    	return this->hasMany(App\Student);
 //    }

  
	// public function user(){

 //    	return this->belongsToMany(App\User);
 //    }

 //    public function proposals(){

 //    	return this->hasMany(App\Proposal);
 //    }

}
