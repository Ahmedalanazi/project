<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Proposal;

use App\User;

use App\posterscoresheet;
use DB;


class PosterScoreSheetController extends Controller
{
    public function index(){

        $posterscoresheets = posterscoresheet::all()->where('judge_id', 1);
        $students = Student::all();
        $users = User::all();
        $proposals = Proposal::all(); 

        return view('posterScoreSheets.index')->with('posterscoresheets',$posterscoresheets)
                                              ->with('students',$students)
                                              ->with('users',$users)
                                              ->with('proposals', $proposals);
    }

    public function evaluate($id){

 
        $posterscoresheets = posterscoresheet::find($id);

        return view('posterScoreSheets.evaluate')->with('posterscoresheets',$posterscoresheets);
    }   



    public function update(Request $request, $id){


        //$input = platformscoresheet::find($id);
        //$input = Request::all($id);

        $criteria_one = $request->criteria_one * 3;

        $criteria_two = $request->criteria_two * 3;

        $criteria_three = $request->criteria_three * 7;

        $criteria_four = $request->criteria_four * 2;

        $criteria_five = $request->criteria_five * 2;

        $criteria_six = $request->criteria_six * 3;

        $total = $criteria_one + $criteria_two + $criteria_three + $criteria_four + $criteria_five + $criteria_six;


             DB::table('posterscoresheets')
             ->where('id',$id)
             ->update(['criteria_one' => $criteria_one  , 'criteria_one_comment' => $request->criteria_one_comment,
                       'criteria_two' => $criteria_two  , 'criteria_two_comment' => $request->criteria_two_comment,
                       'criteria_three' => $criteria_three , 'criteria_three_comment' => $request->criteria_three_comment,
                       'criteria_four' => $criteria_four  , 'criteria_four_comment' => $request->criteria_four_comment,
                       'criteria_five' => $criteria_five , 'criteria_five_comment' => $request->criteria_five_comment,
                       'criteria_six' => $criteria_six , 'criteria_six_comment' => $request->criteria_six_comment, 'general_comment' => $request->general_comment,
                       'total' => $total , 'experience' => $request->experience]);


       return redirect('posterScoreSheets\index');


    }


       public function edit($id){

 
        $posterscoresheets = posterscoresheet::find($id);

        return view('posterScoreSheets.edit')->with('posterscoresheets',$posterscoresheets);
    } 

    public function storeEdit(Request $request, $id){


        //$input = platformscoresheet::find($id);
        //$input = Request::all($id);

        $criteria_one = $request->criteria_one * 3;

        $criteria_two = $request->criteria_two * 3;

        $criteria_three = $request->criteria_three * 7;

        $criteria_four = $request->criteria_four * 2;

        $criteria_five = $request->criteria_five * 2;

        $criteria_six = $request->criteria_six * 3;

        $total = $criteria_one + $criteria_two + $criteria_three + $criteria_four + $criteria_five + $criteria_six;


             DB::table('posterscoresheets')
             ->where('id',$id)
             ->update(['criteria_one' => $criteria_one  ,
                       'criteria_two' => $criteria_two  , 
                       'criteria_three' => $criteria_three , 
                       'criteria_four' => $criteria_four , 
                       'criteria_five' => $criteria_five ,
                       'criteria_six' => $criteria_six ,
                       'total' => $total]);


       return redirect('posterScoreSheets\index');


    }
}
