<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // public function eventtime(){

    //     return this->belongsToMany(App\Eventtime);
    // }

    // public function platformscoresheet(){

    //     return this->hasMany(App\platformscoresheet);
    // }

    // public function posterscoresheet(){

    //     return this->hasMany(App\posterscoresheet);
    // }

    // public function category(){

    //     return this->belongsToMany(App\Category);
    // }

    // public function proposal(){

    //     return this->hasMany(App\Proposal);
    // }

    // public function department(){

    //     return this->belongsTo(App\Department);
    // }




    protected $fillable = [

        'fname', 'lname', 'email', 'password', 'user_type', 'category_id', 'department_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
