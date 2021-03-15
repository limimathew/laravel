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
<li> <a href="#">Home </a></li>
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
<li> <a href="addnotification">Add</a></li>
<li> <a href="getnoti">View</a></li>

</ul>
</div>
</li>

  <li> <a href="logout">Logout</a>
</ul>
</nav> </header>
 <!--------------------menu section-------------->
 <!--nav end-->
<section>


</section >

</body>
</html>

