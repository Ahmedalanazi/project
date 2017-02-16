<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="table-responsive">

<table class="table ">
 <h1>Poster Scores</h1>
  <thead>
    <tr>

      <th>student ID </th>
      <th>judge ID</th>
      <th>cr1</th>
      <th>co1</th>
      <th>cr2</th>
      <th>co2</th>
      <th>cr3</th>
      <th>co3</th>
      <th>cr4</th>
      <th>co4</th>
      <th>cr5</th>
      <th>co5</th>
      <th>cr6</th>
      <th>co6</th>
      <th>exp</th>
      <th>tot</th>

      
    </tr>
  </thead>
  
  <tbody>

    <tr>
   
    @foreach ($posterscores as $posterscore)

      <td>{{$posterscore->student_id}}</td>
      <td>{{$posterscore->judge_id}}</td>
      <td>{{$posterscore->criteria_one}}</td>
      <td>{{$posterscore->criteria_one_comment}}</td>
      <td>{{$posterscore->criteria_two}}</td>
      <td>{{$posterscore->criteria_two_comment}}</td>
      <td>{{$posterscore->criteria_three}}</td>
      <td>{{$posterscore->criteria_three_comment}}</td>
      <td>{{$posterscore->criteria_four}}</td>
      <td>{{$posterscore->criteria_four_comment}}</td>
      <td>{{$posterscore->criteria_five}}</td>
      <td>{{$posterscore->criteria_five_comment}}</td>
      <td>{{$posterscore->criteria_six}}</td>
      <td>{{$posterscore->criteria_six_comment}}</td>
      <td>{{$posterscore->experience}}</td>
      <td>{{$posterscore->total}}</td>
      <td> 

     
       <button type="button" class="btn btn-default"><a href="{{$posterscore->id}}\posterscoresheetsedit">Edit</a>
      </button>
		<button type="button" class="btn btn-default"><a href="{{$posterscore->id}}\posterscoresheetsdelete">Delete</a>
      </button>

    </td>

    </tr>
      

  </tbody>
      @endforeach

</table>


<table class="table ">
  <h1>Platform Scores</h1>

  <thead>
    <tr>

      <th>student ID </th>
      <th>judge ID</th>
      <th>cr1</th>
      <th>co1</th>
      <th>cr2</th>
      <th>co2</th>
      <th>cr3</th>
      <th>co3</th>
      <th>cr4</th>
      <th>co4</th>
      <th>cr5</th>
      <th>co5</th>
      <th>cr6</th>
      <th>co6</th>
      <th>cr7</th>
      <th>co7</th>
      <th>exp</th>
      <th>tot</th>

      
    </tr>
  </thead>
  
  <tbody>

    <tr>
   
    @foreach ($platformscores as $platformscore)

      <td>{{$platformscore->student_id}}</td>
      <td>{{$platformscore->judge_id}}</td>
      <td>{{$platformscore->criteria_one}}</td>
      <td>{{$platformscore->criteria_one_comment}}</td>
      <td>{{$platformscore->criteria_two}}</td>
      <td>{{$platformscore->criteria_two_comment}}</td>
      <td>{{$platformscore->criteria_three}}</td>
      <td>{{$platformscore->criteria_three_comment}}</td>
      <td>{{$platformscore->criteria_four}}</td>
      <td>{{$platformscore->criteria_four_comment}}</td>
      <td>{{$platformscore->criteria_five}}</td>
      <td>{{$platformscore->criteria_five_comment}}</td>
      <td>{{$platformscore->criteria_six}}</td>
      <td>{{$platformscore->criteria_six_comment}}</td>
      <td>{{$platformscore->criteria_seven}}</td>
      <td>{{$platformscore->criteria_seven_comment}}</td>
      <td>{{$platformscore->experience}}</td>
      <td>{{$platformscore->total}}</td>
      <td> 

     
       <button type="button" class="btn btn-default"><a href="">Edit</a>
      </button>
		<button type="button" class="btn btn-default"><a href="{{$platformscore->id}}\platformscoresheetsdelete">Delete</a>
      </button>

    </td>

    </tr>
      

  </tbody>
      @endforeach

</table>




      </div>
      </div>
  

      
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>

</html>