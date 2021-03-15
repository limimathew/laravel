<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flight view</title>

            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
            <link rel="stylesheet" type="text/css" href="{{asset('/css/index_style.css')}}" media="all"/>
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
background-color:rgb(132, 40, 238);
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

.tbg{
    background-color: rgb(108, 66, 223);
    
}

/*add table*/
.top1{
    background-color: rgb(173, 122, 236);
}
.slide{
    background-color: rgba(247, 231, 243, 0.2);
}
.top{
    background-image:url("../img/plane.jpg");
    background-size: cover;
}
</style>
</head>

<body>
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
  <!----------nav ends--------->
<div class="container text-cenetr py-5">
 <table class="table tbg text-white table-hover vertical-align ">

 <thead class="">
    <tr>
    <th >Airline Name</th>
    <th>Departure</th>
    <th>Arrival</th>
    <th>Date</th>
    <th>Departure Time</th>
    <th>Arrival Time</th>
    <th>Seating Capacity</th>
    <th>Bussiness</th>
    <th>Economy</th>
    <th>First</th>
    <th>Bussiness Cost</th>
    <th>Economy Cost</th>
    <th>First Cost</th>
    <th colspan="2" class="text-center">Action</th>

    </tr>
 </thead>
  <tbody class="text-cenetr">
    @foreach($data as $value)
        <tr>
        <td>{{$value->airlinename}}</td>
        <td>{{$value->departure}}</td>
        <td>{{$value->arrival}}</td>
        <td>{{$value->date}}</td>
        <td>{{$value->dtime}}</td>
        <td>{{$value->atime}}</td>
        <td>{{$value->seat}}</td>
        <td>{{$value->bussiness}}</td>
        <td>{{$value->economy}}</td>
        <td>{{$value->first}}</td>
        <td>{{$value->bcost}}</td>
        <td>{{$value->ecost}}</td>
        <td>{{$value->fcost}}</td>

        <td class="text-center "><a href={{"update/".$value->fid}} class="text-white btn btn-outline-warning">Update</a></td>
        <td class="text-center text-white"><a href={{"delete/".$value->fid}} class="text-white btn btn-outline-danger ">Delete</a></td>
        </tr>

    @endforeach
  </tbody>
 
 </table>
 </div>

    
</body>
</html>