<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Proposal;

use App\User;

use App\platformscoresheet;
use DB;


class PlatformScoreSheetController extends Controller
{
    //  public function index(){

    // 	$platformScoreSheets = Student::all();

    // 	//return $categories;

    // 	return view('platformScoreSheets.index')->with('students', $platformScoreSheets);
    // 	//return view('categories.index', compact('categories'));

    // }


    // public function show($id) {

    // 	$students = Student::find($id);

    // 	return view('students.show')->with('students', $category);
    // }



    // public function create(){

    // 	return view('platformScoreSheets.fill');
    // }

    // public function store(){

    // 	$input = Request::all();

    // 	Student::create($input);

    // 	return redirect('platformScoreSheets\index');

    //}

    public function index(){


        $platformscoresheets = platformscoresheet::all()->where('total',0)->where('judge_id', 3);
        $students = Student::all();
        $users = User::all();
        $proposals = Proposal::all(); 
    
        return view('platformScoreSheets.index')->with('platformscoresheets',$platformscoresheets)
                                                ->with('students',$students)
                                                ->with('users',$users)
                                                ->with('proposals', $proposals);
    }

    public function evaluate($id){

       // return view('platformScoreSheets.fill');

        // DB::table('platformscoresheets')
        //     ->where('id', $id);

        $platformscoresheets = platformscoresheet::find($id);

        if ( $platformscoresheets -> fineart == 0){

        return view('platformScoreSheets.evaluate')->with('platformscoresheets',$platformscoresheets); }

      else {

        return view('platformScoreSheets.evaluateFa')->with('platformscoresheets',$platformscoresheets);
}
    }   



    public function update(Request $request, $id){


        //$input = platformscoresheet::find($id);
        //$input = Request::all($id);
      $platformscoresheets = platformscoresheet::find($id);

      if ( $platformscoresheets -> fineart == 0) {

        $criteria_one = $request->criteria_one * 3;

        $criteria_two = $request->criteria_two * 2;

        $criteria_three = $request->criteria_three * 2;

        $criteria_four = $request->criteria_four * 7;

        $criteria_five = $request->criteria_five * 2;

        $criteria_six = $request->criteria_six * 2;

        $criteria_seven = $request->criteria_seven * 2;

        $total = $criteria_one + $criteria_two + $criteria_three + $criteria_four + $criteria_five + $criteria_six +        $criteria_seven;

        //echo $criteria_one;

            //var_dump($_POST);

             DB::table('platformscoresheets')
             ->where('id',$id)
             ->update(['criteria_one' => $criteria_one  , 'criteria_one_comment' => $request->criteria_one_comment,
                       'criteria_two' => $criteria_two  , 'criteria_two_comment' => $request->criteria_two_comment,
                       'criteria_three' => $criteria_three , 'criteria_three_comment' => $request->criteria_three_comment,
                       'criteria_four' => $criteria_four  , 'criteria_four_comment' => $request->criteria_four_comment,
                       'criteria_five' => $criteria_five , 'criteria_five_comment' => $request->criteria_five_comment,
                       'criteria_six' => $criteria_six , 'criteria_six_comment' => $request->criteria_six_comment,
                    'criteria_seven' => $criteria_seven,  'criteria_seven_comment' => $request->criteria_seven_comment, 'general_comment' => $request->general_comment,
                       'total' => $total , 'experience' => $request->experience]);  }

             else {


        $criteria_one = $request->criteria_one * 15;

        $criteria_two = $request->criteria_two * 20;

        $criteria_three = $request->criteria_three * 35;

        $criteria_four = $request->criteria_four * 10;

        $criteria_five = $request->criteria_five * 10;

        $criteria_six = $request->criteria_six * 10;

        $criteria_seven = 0;

        $total = $criteria_one + $criteria_two + $criteria_three + $criteria_four + $criteria_five + $criteria_six +   $criteria_seven;

        //echo $criteria_one;

            //var_dump($_POST);

             DB::table('platformscoresheets')
             ->where('id',$id)
             ->update(['criteria_one' => $criteria_one  , 'criteria_one_comment' => $request->criteria_one_comment,
                       'criteria_two' => $criteria_two  , 'criteria_two_comment' => $request->criteria_two_comment,
                       'criteria_three' => $criteria_three , 'criteria_three_comment' => $request->criteria_three_comment,
                       'criteria_four' => $criteria_four  , 'criteria_four_comment' => $request->criteria_four_comment,
                       'criteria_five' => $criteria_five , 'criteria_five_comment' => $request->criteria_five_comment,
                       'criteria_six' => $criteria_six , 'criteria_six_comment' => $request->criteria_six_comment,
                    'criteria_seven' => $criteria_seven,  'criteria_seven_comment' => 'none', 'general_comment' => $request->general_comment,
                       'total' => $total , 'experience' => $request->experience]);  }

        //platformscoresheet::update($input);



       return redirect('platformScoreSheets\index');



       // return redirect('categories\index');
    
        //     DB::table('proposals')
        //     ->where('id', $id)
        //     ->update(['status' => 1]);
        // return redirect('platformScoreSheets.index');
    }

    public function edit($id){


        $platformscoresheets = platformscoresheet::find($id);

        return view('platformScoreSheets.edit')->with('platformscoresheets',$platformscoresheets);

 
        // $posterscoresheets = posterscoresheet::find($id);

        // return view('platformScoreSheets.edit')->with('posterscoresheets',$posterscoresheets);
    } 

    public function storeEdit(Request $request, $id){


        //$input = platformscoresheet::find($id);
        //$input = Request::all($id);

      $platformscoresheets = platformscoresheet::find($id);


      if ( $platformscoresheets -> fineart == 0) {



        $criteria_one = $request->criteria_one * 3;

        $criteria_two = $request->criteria_two * 2;

        $criteria_three = $request->criteria_three * 2;

        $criteria_four = $request->criteria_four * 7;

        $criteria_five = $request->criteria_five * 2;

        $criteria_six = $request->criteria_six * 2;

        $criteria_seven = $request->criteria_seven * 2;

        $total = $criteria_one + $criteria_two + $criteria_three + $criteria_four + $criteria_five + $criteria_six +        $criteria_seven ;


             DB::table('platformscoresheets')
             ->where('id',$id)
             ->update(['criteria_one' => $criteria_one  ,
                       'criteria_two' => $criteria_two  , 
                       'criteria_three' => $criteria_three , 
                       'criteria_four' => $criteria_four , 
                       'criteria_five' => $criteria_five ,
                       'criteria_six' => $criteria_six ,
                       'criteria_seven' => $criteria_seven, 
                       'total' => $total]); }

             else {


        $criteria_one = $request->criteria_one * 15;

        $criteria_two = $request->criteria_two * 20;

        $criteria_three = $request->criteria_three * 35;

        $criteria_four = $request->criteria_four * 10;

        $criteria_five = $request->criteria_five * 10;

        $criteria_six = $request->criteria_six * 10;

        $criteria_seven = 0;

        $total = $criteria_one + $criteria_two + $criteria_three + $criteria_four + $criteria_five + $criteria_six + $criteria_seven ;


             DB::table('platformscoresheets')
             ->where('id',$id)
             ->update(['criteria_one' => $criteria_one  ,
                       'criteria_two' => $criteria_two  , 
                       'criteria_three' => $criteria_three , 
                       'criteria_four' => $criteria_four , 
                       'criteria_five' => $criteria_five ,
                       'criteria_six' => $criteria_six ,
                       'criteria_seven' => $criteria_seven, 
                       'total' => $total]); 




             }


       return redirect('platformScoreSheets\index');


    }
}
