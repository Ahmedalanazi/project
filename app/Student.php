<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    // public function category(){

    // 	return this->belongsTo(App\Category);
    // }

    // public function proposal(){

    // 	return this->hasOne(App\Proposal);
    // }
    
    // public function approvedproposal(){

    // 	return this->hasOne(App\Approvedproposal);
    // }

    protected $fillable = [
        'name', 'email', 'universityId',
    ];
}
