<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class platformscoresheet extends Model
{

    // public function user(){

    // 	return this->belongsTo(App\User);
    // }


    protected $fillable = [

        'criteria_one', 'criteria_one_comment',

        'criteria_two', 'criteria_two_comment',

        'criteria_three', 'criteria_three_comment',

        'criteria_four', 'criteria_four_comment',

        'criteria_five', 'criteria_five_comment',

        'criteria_six', 'criteria_six_comment',

        'criteria_seven', 'criteria_seven_comment',

        'experience',   'total', 'general_comment',
    ];
}
