<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
@if (Session::has('flash_message'))
<div class="alert alert-success">{{Session::get('flash_message')}}</div>

@endif
@if (Session::has('f_message'))
<div class="alert alert-danger">{{Session::get('f_message')}}</div>

@endif
<h1> Welcome Celebrate Gannon Coordinator</h1>
<button type="button"><a href="#id_of_div" class="links" id="link_1" >Not Reviewed</a> </button>

<button type="button"><a href="#id_of_div2" class="links" id="link_2">Approved</a> </button>

  <div class="table-responsive">

  
<div id="id_of_div" class="divs "  >
<table class="table ">
 
  <thead>
    <tr>

      <th>Department </th>
      <th>Title</th>
      <th>Type</th>
      <th>Advisor Name(s)</th>
      <th>File</th>
      <th>Category</th>
      <th>Approve/Reject</th>

      
    </tr>
  </thead>
  

    @foreach ( $proposals as $proposal)


  <tbody>
  @if ($proposal->status == "NR")
    <tr>

      @foreach ($departments as $department)
      @if ($proposal->department_id == $department->id )
      
      <td>{{$department->name}}</td>
      @endif
      @endforeach
      
      <td>{{$proposal->title}}</td>
      <td>{{$proposal->type}}</td>
      <td>{{$proposal->advisors_names}}</td>
      <td> <a href="{{$proposal->file}}" > {{$proposal->file}}</a> </td>

      @foreach ($categories as $categorie)
      @if ($proposal->category_id == $categorie->id)

      <td>{{$categorie->name}}</td>

      @endif
      @endforeach


      <td> 
       

    <button type="button"  class="btn btn-default"><a href="coordinator\{{$proposal->id}}\approve">Approve</a>
      </button>

    <button type="button"  class="btn btn-default"><a href="coordinator\{{$proposal->id}}\reject">Reject</a></button>
  
    </td>
   

    </tr>
   
  
    @endif

  </tbody>
  
  @endforeach
</table>

      </div>
      </div>
  

      <div class="table-responsive"> 
      <div id="id_of_div2" class="divs" style="display:none">
         
<table class="table ">
  <thead>
    <tr>
      <th>Department </th>
      <th>Title</th>
      <th>Type</th>
      <th>Advisor Name(s)</th>
      <th>Category</th>

      
    </tr>
  </thead>
    @foreach ( $proposals as $proposal)

  <tbody>

    <tr>
    @if ($proposal->status == "A")
    @foreach ($departments as $department)
      @if ($proposal->department_id == $department->id )
      
      <td>{{$department->name}}</td>
      @endif
      @endforeach
      <td>{{$proposal->title}}</td>
      <td>{{$proposal->type}}</td>
      <td>{{$proposal->advisors_names}}</td>
      @foreach ($categories as $categorie)
      @if ($proposal->category_id == $categorie->id)

      <td>{{$categorie->name}}</td>
      @endif
      @endforeach
    
   
    </tr>
    @endif
  </tbody>
  @endforeach

</table>
      </div>


  </div>
  </div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script >
  
        $('div.alert').delay(3000).slideUp(300);

        $('a.links').click(function (e){
          e.preventDefault();
          var div_id = $('a.links').index($(this))
           $('.divs').hide().eq(div_id).show();
          });
        </script>

</body>
</html>
