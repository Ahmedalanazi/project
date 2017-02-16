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
   
    {!!  Form::open() !!}

          <td> echo Form::label('studentid','{{$editposters->student_id}}'); </td>

    {!!  Form::close() !!}


      <td>{{$editposters->judge_id}}</td>

      <td>
      	  <select>
  			<option value="volvo">{{$editposters->criteria_one}}</option>
  			<option value="saab">Saab</option>
  			<option value="mercedes">Mercedes</option>
  			<option value="audi">Audi</option>
		  </select>
		</td>


      <td>{{$editposters->criteria_one_comment}}</td>
      <td>{{$editposters->criteria_two}}</td>
      <td>{{$editposters->criteria_two_comment}}</td>
      <td>{{$editposters->criteria_three}}</td>
      <td>{{$editposters->criteria_three_comment}}</td>
      <td>{{$editposters->criteria_four}}</td>
      <td>{{$editposters->criteria_four_comment}}</td>
      <td>{{$editposters->criteria_five}}</td>
      <td>{{$editposters->criteria_five_comment}}</td>
      <td>{{$editposters->criteria_six}}</td>
      <td>{{$editposters->criteria_six_comment}}</td>
      <td>{{$editposters->experience}}</td>
      <td>{{$editposters->total}}</td>
      <td> 

     
       

    </td>

    </tr>
      

  </tbody>
      

</table>





      </div>
      </div>
  

      
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>

</html>