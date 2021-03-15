<!DOCTYPE html>
<html>
    <head>
        <title>userhome</title>
            
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
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
  <body>
    <nav class="menubar navbar-light">

<ul>
<li> <a href="#">Home </a></li>
<li> <a href="selectflight">Flights search</a></li>

<li> <a href="{{url('notifyuser')}}">Notification</a></li>

  <li> <a href="logout">Logout</a>
</ul>
</nav>
 <!--------------------menu section-------------->
 <!--nav end-->
<section>


<h1>user home page</h1>
</section >

</body>
</html>

