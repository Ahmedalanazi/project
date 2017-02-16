@extends('layouts.app')

@section('content')
<div class="container">

 <div class="table-responsive">          
<table class="table ">
  <thead>
    <tr>
      <th>Student Name</th>
      <th>Judge Name</th>
      <th>Title</th>
      <th>Room</th>
      <th>time</th>
      <th>Total</th>
      
    </tr>
  </thead>
    @foreach ( $platformscoresheets as $platformscoresheet )

  <tbody>

    <tr>
      @foreach ($students as $student)
      @if ($platformscoresheet->student_id == $student->id )
      
      <td>{{$student->name}}</td>
      @endif
      @endforeach
    
      @foreach ($users as $user)
      @if ($platformscoresheet->judge_id == $user->id )
      
      <td>{{$user->fname}} {{$user->lname}}</td>
      @endif
      @endforeach

      @foreach ($proposals as $proposal)
      @if ($platformscoresheet->student_id == $proposal->student_id )
      
      <td>{{$proposal->title}}</td>
      @endif
      @endforeach

      <td> zurn 336</td>
      <td> 3:30</td>

      <td>{{$platformscoresheet->total}}</td>
      <td> 

      <button type="button" class="btn btn-default"><a href="{{$platformscoresheet->id}}\evaluate">Evaluate</a>
      </button>
   <!--     <button type="button" class="btn btn-default"><a href="{{$platformscoresheet->id}}\edit">edit</a>
      </button> -->

    </td>

    </tr>

  </tbody>
  @endforeach

</table>
</div>
</div>

@endsection