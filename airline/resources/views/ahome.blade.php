<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

    <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
<link rel="stylesheet" type="text/css" href="{{asset('/css/index_style.css')}}" media="all"/>
</head>
<body>
    <!-- navigation-->

    



     <!-- nav2 -->

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
</nav>

</body>
</html>