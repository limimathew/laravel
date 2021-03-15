<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment details</title>

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
<form action="{{url('payment')}}" method="get" class="form">

@csrf
     Flight id:<input type="text" value="{{$flight['fid']}}" name="flid"><br><br> 
    Flight Name:<input type="text" value="{{$flight->airlinename}}" name="fname"><br><br>
    Departure:<input type="text" value="{{$flight->departure}}" name="departure"><br><br>
    Arrival:<input type="text" value="{{$flight->arrival}}" name="arrival"><br><br>
    Date:<input type="text" value="{{$flight->date}}" name="date"><br><br>
    Departure time:<input type="text" value="{{$flight->dtime}}" name="dtime"><br><br>
    Arrival Time:<input type="text" value="{{$flight->atime}}" name="atime"><br><br>


    Name of the passenger:<input type="text" value="{{$user->name}}" name="name"><br><br>
    Age:<input type="text" value="{{$user->age}}" name="age"><br><br>


    Seat:<input type="text" value="{{$seat}}" name="seat"><br><br>

    Cost:<input type="text" value="{{$pay}}" name="pay">
    
    @if($user->age>60)
        <p>10% Concession Available</p>
@endif
<br><br>
<input type="submit" name="submit" value="R u ready for the payment">

</form>
</div>
</body>
</html>
   