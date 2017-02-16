<?php

namespace App\Http\Controllers;
use App\proposal;
use App\approvedproposal;
use App\department;
use App\category;
use App\student;
use DB;
use Session;
use Mail;
use Illuminate\Mail\Mailer;
use App\Mail\approvedmail;
use App\Mail\advisorapproveemail;
use App\Mail\rejectedemail;
use App\Mail\advisorrejectemail;

use Illuminate\Http\Request;

class CoordinatorController extends Controller
{
    public function index(){


    	$proposals = DB::table('proposals')
                ->orderBy('category_id', 'asc')
                ->get();


        $departments = Department::all();
        $categories = Category::all();



    
    	return view('coordinator.coordinator')->with('proposals',$proposals)->with('departments',$departments)->with('categories',$categories);

    }
    public function reject($id){
    	
        $rejected = proposal::find($id);
        
        $student = student::find($rejected->student_id);
        
        Mail::to($student->email)->send(new rejectedemail);

        $email= new advisorrejectemail($student->name);
        
        Mail::to($rejected->advisor_email)->send($email);



    	DB::table('proposals')
            ->where('id', $id)
            ->update(['status' => 'R','notified' => 1]);

    	return redirect('coordinator');
    }

	public function approve($id){
    		
        
    	$approved = proposal::find($id);
    	
        $student = student::find($approved->student_id);
    	
        Mail::to($student->email)->send(new approvedmail);

        $email= new advisorapproveemail($student->name);

        Mail::to($approved->advisor_email)->send($email);

    	$ids = DB::table('approvedproposals')->pluck('proposal_id');
    	

    	$enterd=false;
    	for ( $i = 0 ; $i < count($ids); $i++)
    	{
    		if ($approved->id == $ids[$i]){

    			$enterd=true;

    		}

    	}
    	if ($enterd==true)
    	{


            Session::flash('f_message','Alrady Approved !!');
            return redirect('coordinator');

        }else{

    	
            DB::table('proposals')
            ->where('id', $id)
            ->update(['status' => 'A','notified' => 1]);
            
			DB::table('approvedproposals')->insert(
   		 ['department_id' => $approved->department_id , 'student_id' => $approved->student_id , 'category_id' => $approved->category_id , 'proposal_id' => $approved->id ]
   		 );


        Session::flash('flash_message','Done. proposal title: '."$approved->title".' has been approved');
            

        return redirect('coordinator');



		}
    	
    

    	
    }

    public function download ($pathToFile){

       $path = storage_path('app/files/'.$pathToFile);

        return response()->download($path);
    }
    
}
