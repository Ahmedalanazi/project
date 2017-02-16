<?php


namespace App\Http\Controllers;
use App\posterscoresheet;
use App\platformscoresheet;
use App\finalgrade;

use DB;
use Illuminate\Http\Request;

class ChairmanController extends Controller
{
    public function home(){
    	return view('chairman.chairman');
    }

    public function scores(){
    	 $posterscores = posterscoresheet::all();
    	 $platformscores = platformscoresheet::all();

    
    	return view('chairman.scores')->with('posterscores',$posterscores)->with('platformscores',$platformscores);
    	
    }

    public function posterscoresheetsdelete($id){

        DB::table('posterscoresheets')->where('id','=', $id)->delete();

        return redirect('chairman\scores');
        
    }
    public function posterscoresheetsedit($id){

        $editposters = posterscoresheet::find($id);

        return view('chairman.editscore')->with('editposters',$editposters);
        
    }
	public function platformscoresheetsdelete($id){

    	DB::table('platformscoresheets')->where('id','=', $id)->delete();

    	return redirect('chairman\scores');
    	
    }

    public function calculatescores(){
      
        $studenttotals = DB::table('posterscoresheets')->select('student_id','total')->get();

        $studentids = DB::table('posterscoresheets')->select('student_id')->distinct()->get();


        foreach ($studentids as $studentid){
            $result=0;
            $judgnumber=0;
            foreach ($studenttotals as $studenttotal){
                if($studentid->student_id == $studenttotal->student_id ){
                    $result = $result+$studenttotal->total;
                    $judgnumber=$judgnumber+1;
                }

            }

            DB::table('finalgrades')->insert(
         ['student_id' => $studentid->student_id , 'average' => $result/$judgnumber]);
          

        }

    $studentscores = DB::table('finalgrades')->select('student_id','average')->get();
    return view ('chairman.winners')->with('studentscores',$studentscores);
       
    }
    
}
