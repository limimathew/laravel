

Skip to content
Using Gmail with screen readers
Meet
New meeting
Join a meeting
Hangouts


Unsubscribe from Team YourStory?
You haven't opened any emails from this sender in the last month
UnsubscribeNo, thanks
Conversations
2.73 GB of 15 GB used
Terms · Privacy · Programme Policies
Last account activity: 13 hours ago
Details

<!DOCTYPE html>
<html>
    <head>
        <title>Flight Adding</title>
            
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>flight add</title>
            <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
   
            <style>
.menubar
{
background-color:#d9b3ff;
text-align:center;


}
.menubar ul
{
list-style:none;
display:inline-flex;
padding:15px;

}
.menubar ul li a
{
text-decoration:none;
color:black;
padding:15px;
}
.menubar ul li
{
padding:10px;

}
.menubar ul li a:hover
{
background-color:rgb(102, 8, 119);
border-radius:10px;

}
.submenu
{
display:none;
}
.menubar ul li:hover .submenu
{
display:block;
position:absolute;
margin-top:14px;
background-color:#d9b3ff;
border-radius:10px;


}
.menubar ul li a:hover 
{

color: white;


}
.submenu ul li a:hover{
	color: white;

}

.menubar ul li:hover .submenu ul
{
display:block;
}
.submenu ul li
{
border-bottom:1px solid rgb(102, 8, 119);
}
.row
{

display:flex;
}
.col h2
{
text-align:center;
text-decoration:underline;
}

</style>
    </head>
  <body class="overhidden bg-dark"style="background-image: url('https://images.wallpaperscraft.com/image/plane_sky_flight_aviation_44479_2560x1440.jpg');
      height: 100vh">>
    <header>
    @csrf
    <nav>
        <div class="top container-fluid">
            <div class="row">
           
                <div class="col-7 text-white">

                    <h4 class="h5">Admin Home Page</h4>
                </div>
                <div class="col-5 text-end text-white">
                    <i class="fab fa-facebook  "></i>
                    <i class="fab fa-instagram "></i>
                    <i class="fab fa-youtube "></i>
                     <i class="fab fa-google "></i>
                </div>
            </div>
        </div>
      </nav>
<div class="first">
<nav class="menubar navbar-light">

<ul>
<li> <a href="/index">Home </a></li>
<li> <a href="#">Flights</a>
<div class="submenu">
<ul>
<li> <a href="/addflight">Add </a></li>
<li> <a href="ftb">View</a></li>

</ul>
</div>
</li>

<li> <a href="#">Notification</a>
<div class="submenu">
<ul>
<li> <a href="#">Add</a></li>
<li> <a href="#">View</a></li>

</ul>
</div>
</li>

  <li> <a href="#">Logout</a>
</ul>
</nav> </header>
 <!--------------------menu section-------------->
 <!--nav end-->
<section>

<div class="container ">
<div class="row">
<div class="container col-5 ms-5">
<h3 class="text-center text-primary mt-5">ADD FLIGHTS</h3>
<form   action="addf" method="post" >
@csrf
<fieldset>
<label class=>Airline Name</label>
<input type="text" name="airlinename" placeholder="airlinename" required  class="form-control">

<label class="">Departure</label>
<input type="text" name="departure"  placeholder="departure" required class="form-control">


<label class="form-label">Arrival</label>
<input type="text" name="arrival"  required class="form-control"><br>


<label class="">Date</label>
<input type="date" name="date"required   class="form-control">
 
 
<label class="form-label">Departure Time</label>
<input type="time" name="dtime"  required class="form-control"><br>

<label class="form-label">Arrival Time</label>
<input type="time" name="atime"  required class="form-control"><br>


<label class="form-label">Seat Capacity</label>
<input type="text" name="seat"  required class="form-control"><br>

<label class="form-label">Bussiness</label>
<input type="text" name="bussiness"  required class="form-control"><br>

<label class="form-label">Economy</label>
<input type="text" name="economy"  required class="form-control"><br>

<label class="form-label">First</label>
<input type="text" name="first"  required class="form-control"><br>

<label class="form-label">Business cost</label>
<input type="text" name="bcost"  required class="form-control"><br>
<label class="form-label">Economy cost</label>
<input type="text" name="ecost"  required class="form-control"><br>
<label class="form-label">First</label>
<input type="text" name="fcost"  required class="form-control"><br>

<div class="container text-center">

<input type="submit" name="submit" value="Register" class="btn btn-primary w-50 mt-3  mb-3">
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

addflight.blade.php
Displaying addflight.blade.php.