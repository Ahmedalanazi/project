<!DOCTYPE html>
<h1> Winners</h1>


@foreach ($studentscores as $studentscore)
{{$studentscore->student_id}}
{{$studentscore->average}} 
@endforeach



</html>
