<!DOCTYPE html>
<html>
    <head>
        <title>Flight Adding</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
<link rel="stylesheet" type="text/css" href="{{asset('/css/index_style.css')}}" media="all"/>
    </head>
  <body class="overhidden">
    <header>
        <nav>
            <div class="container-fluid top ">
                <div class="row">
                    <div class="col-7">
                        <a href="#" class="text-decoration-none text-white">Home Terms</a>
                    </div>
                <div class="col-5 text-end">
                    <i class="fab fa-facebook text-white "></i>
                    <i class="fab fa-instagram text-white "></i>
                    <i class="fab fa-linkedin text-white "></i>
                    <i class="fab fa-twitter text-white "></i>
                    <i class="fab fa-youtube text-white "></i>
                    <i class="fab fa-google text-white "></i>
                </div>
            </div>
        </div>
     </nav>  
 </header>
 <!--------------------menu section-------------->
 <nav class="navbar top1 navbar-expand-lg menubar" >
    <div class="container">
      <a href="#" class="text-decoration-none text-white">TRAVEL KITE</a>  
      <div class="">
          <ul class="navbar-nav ">
              <li class="nav-item"><a href="" class="nav-link">Home</a></li> 

              <li class="nav-item"><a href="" class="nav-link">Airport</a></li>

              <li class="nav-item"><a href="#" class="nav-link">Flight</a>
                <ul class="submenu ">

                  <li class="nav-item "><a href="" class="nav-link">Add</a></li>
                  
                  <li class="nav-item"><a href="" class="nav-link">View</a></li>

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">            Notification</a>
                <ul class="submenu">

                  <li class="nav-item"><a href="" class="nav-link">Add</a></li>
                  <li class="nav-item"><a href="" class="nav-link">View</a></li>

                </ul>
              </li>

              <li class="nav-item"><a href="" class="nav-link">Booking</a></li>
           <li class="nav-item"><a href="" class="nav-link">Log Out </a></li>
          </ul>
      </div>
    </div> 
 </nav>
<!--nav end-->
<section>

<div class="container ">
<div class="row">
<div class="container col-5 ms-5">
<h3 class="text-center text-primary mt-5">ADD FLIGHTS</h3>
<form  method="post" action="{{url('fedit')}}" class=" ">

<fieldset>

@csrf

<label class=>Airline Name</label>
<input type="text" name="airlinename" placeholder="airlinename" value="{{$fdata->airlinename}}" required  class="form-control">

<label class="">Departure</label>
<input type="text" name="departure"  placeholder="departure" value="{{$fdata->departure}}"  required class="form-control">


<label class="form-label">Arrival</label>
<input type="text" name="arrival"  value="{{$fdata->arrival}}"  required class="form-control"><br>


<label class="">Date</label>
<input type="date" name="date" value="{{$fdata->date}}" required   class="form-control">
 
 
<label class="form-label">Departure Time</label>
<input type="time" name="dtime" value="{{$fdata->dtime}}"   required class="form-control"><br>

<label class="form-label">Arrival Time</label>
<input type="time" name="atime" value="{{$fdata->atime}}"  required class="form-control"><br>


<label class="form-label">Seat Capacity</label>
<input type="text" name="seat" value="{{$fdata->seat}}"   required class="form-control"><br>

<label class="form-label">Bussiness</label>
<input type="text" name="bussiness" value="{{$fdata->bussiness}}"  required class="form-control"><br>

<label class="form-label">Economy</label>
<input type="text" name="economy" value="{{$fdata->economy}}"  required class="form-control"><br>

<label class="form-label">First</label>
<input type="text" name="first" value="{{$fdata->first}}"   required class="form-control"><br>

<label class="form-label">Business cost</label>
<input type="text" name="bcost" value="{{$fdata->bcost}}"   required class="form-control"><br>
<label class="form-label">Economy cost</label>
<input type="text" name="ecost" value="{{$fdata->ecost}}"  required class="form-control"><br>
<label class="form-label">First</label>
<input type="text" name="fcost" value="{{$fdata->fcost}}"  required class="form-control"><br>

<input type="hidden" name="id" value="{{$fdata->fid}}">
<div class="container text-center">

<input type="submit" name="update" value="Update" class="btn btn-primary w-50 mt-3  mb-3">
</div>


</fieldset>


</form>
</div>

<div class="col-7">
</div>

</div class="">
</div>
</section >

</body>
</html>

