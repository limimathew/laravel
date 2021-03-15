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
<form action="{{url('seatselected')}}" method="post" class="form">

@csrf
     Flight id:<input type="text" value="{{$values['fid']}}" name="flid"><br><br> 
    Flight Name:<input type="text" value="{{$values->airlinename}}" name="fname"><br><br>
    Departure:<input type="text" value="{{$values->departure}}" name="departure"><br><br>
    Arrival:<input type="text" value="{{$values->arrival}}" name="arrival"><br><br>
    Date:<input type="text" value="{{$values->date}}" name="date"><br><br>
    Departure time:<input type="text" value="{{$values->dtime}}" name="dtime"><br><br>
    Arrival Time:<input type="text" value="{{$values->atime}}" name="atime"><br><br>
    No of seats available:<input type="text" value="{{$values->seat}}" name="seats"><br><br>
    No of business seats available:<input type="text" value="{{$values->bussiness}}" name="bseats"><br><br>
    No of economy seats available:<input type="text" value="{{$values->economy}}" name="eseats"><br><br>
    No of  first class seats available:<input type="text" value="{{$values->first}}" name="fseats"><br><br>
    Cost of business class:<input type="text" value="{{$values->bcost}}" name="bcostss"><br><br>
    Cost of economic class:<input type="text" value="{{$values->ecost}}" name="ecostss"><br><br>
    Cost of first class:<input type="text" value="{{$values->fcost}}" name="fseatss"><br><br>
    

    Select your seat:
    @if ($values->bussiness==0 and $values->economy==0 and $values->first==0)
        <p>no seats are available</p>
        <h6>check for another flight</h6>

@elseif ($values->bussiness!=0 and $values->economy!=0 and $values->first!=0)
    <input type="radio" name="seat" value="b">business
    <input type="radio" name="seat" value="e">economy
    <input type="radio" name="seat" value="f">first
    


    @elseif ($values->bussiness!=0 and $values->economy!=0 and $values->first==0)
    <input type="radio" name="seat" value="b">business
    <input type="radio" name="seat" value="e">economy
    


    @elseif ($values->bussiness==0 and $values->economy!=0 and $values->first!=0)
    <input type="radio" name="seat" value="e">economy
    <input type="radio" name="seat" value="f">first


    @elseif ($values->bussiness!=0 and $values->economy==0 and $values->first!=0)
    <input type="radio" name="seat" value="b">business
    <input type="radio" name="seat" value="f">first


    

    @elseif ($values->bussiness!=0 and $values->economy==0 and $values->first==0)
    <input type="radio" name="seat" value="b">business
    
    
    @elseif ($values->bussiness==0 and $values->economy!=0 and $values->first==0)
    <input type="radio" name="seat" value="e">economy
    
    
    @elseif ($values->bussiness==0 and $values->economy==0 and $values->first!=0)
    
    <input type="radio" name="seat" value="f">first
    
    
@else
    no  records!
@endif
<br><br>
<input type="submit" name="submit" value="Book Now">

</form>
</div>
 <a href="">Back</a>
    
</body>
</html>