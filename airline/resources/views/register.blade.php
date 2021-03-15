<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
   
</head>
<body>
    
<form action="register1" method="post">
@csrf

<div class="row mt-5">
 <div class="col-xl-4 m-auto">
<div class="card-header">
  <h4 class="card-title font-weight-bold"> Registeration Form  </h4>
  @if(Session::get('sucess'))
<div class="alert alert-success">
   {{Session::get('sucess')}}
   </div>
@elseif(Session::get('failed'))
<div class="alert alert-danger ">
                               
 {{Session::get('failed')}}
 </div>
  @endif
    </div>
  <div class="card-body">
 <div class="form-group">
   <label for="name"> Name <span class="text-danger">*  </label>
  <input type="text" name="name" class="form-control">
 <span class="style text-danger">@error('name'){{$message}} @enderror</span> 
  </div>
  
  <div class="mb-4">
  <label for="name"> Gender <span class="text-danger">*  </label>
<input class="form-check-input" name="gender" type="radio"  value="female"id=female>

<label class="form-check-label " for=female  >female</label>
<input class="form-check-input" name="gender" value="male" type="radio" id=male>
<label class="form-check-label " for="male" >male</label>
</div>
<div class="row mb-3">
    <div>
    <label for="name"> Phone <span class="text-danger">*  </label>
      <input type="text" class="form-control" placeholder="phone-no" name="phone" required pattern="[6-9]{1}[0-9]{9}">
    </div>
    <div>
    <label for="name"> Age <span class="text-danger">*  </label>
      <input type="number" class="form-control" placeholder="age" name="age" >
    </div>
  </div>
  <div class="form-group">
   <label for="name"> email <span class="text-danger">*  </label>
  <input type="text" name="email" class="form-control">
  <span class="style text-danger">@error('email'){{$message}} @enderror</span> 
  </div>
  <div class="form-group">
   <label for="name"> password<span class="text-danger">*  </label>
  <input type="text" name="password" class="form-control">
  <span class="style text-danger">@error('password'){{$message}} @enderror</span> 
  </div>
 
  <button type="submit" class="btn btn btn-success mt-2">Register</button>
 <a href="login">login</a>
</div>
</div>  
</form>   

                    
        
                           
                            
</body>
</html>