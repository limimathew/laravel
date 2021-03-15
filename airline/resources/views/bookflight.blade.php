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

</head>
<body>
<div class="container text-cenetr py-5">
 <table class="table tbg">

 <thead>
    <tr>
    <th>Flight id</th>
    <th>Airline Name</th>
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
    <th colspan="1" class="text-center">Action</th>

    </tr>
 </thead>
  <tbody>
    @foreach($value as $i)
        <tr>
        <td>{{$i->fid}}</td>
        <td>{{$i->airlinename}}</td>
        <td>{{$i->departure}}</td>
        <td>{{$i->arrival}}</td>
        <td>{{$i->date}}</td>
        <td>{{$i->dtime}}</td>
        <td>{{$i->atime}}</td>
        <td>{{$i->seat}}</td>
        <td>{{$i->bussiness}}</td>
        <td>{{$i->economy}}</td>
        <td>{{$i->first}}</td>
        <td>{{$i->bcost}}</td>
        <td>{{$i->ecost}}</td>
        <td>{{$i->fcost}}</td>

        <td class="text-center "><a href={{"booknow/".$i->fid}} class="text-white">Book Now</a></td>
        
        </tr>

    @endforeach
  </tbody>
 
 </table>
 </div>
 <a href="">Back</a>
    
</body>
</html>