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
<div  class="bg-image"
style="background-image: url('https://www.electronicproducts.com/wp-content/uploads/computer-peripheral-systems-in-flight-entertainment.jpg');
      height: 100vh">
<div class="container text-cenetr py-5">
<form action="{{url('seatselected')}}" method="post" class="form">

@csrf
<table class="bg-white">
<tr>
<td>
     Flight id:</td>
     <td><input type="text" value="{{$values['fid']}}" name="flid"></td>
</tr>
<tr>
<td>
    Flight Name:</td>
    <td><input type="text" value="{{$values->airlinename}}" name="fname"></td>
</tr>
<tr>
<td>
    Departure:</td>
    <td><input type="text" value="{{$values->departure}}" name="departure"></td>
   </tr>
   <tr>
   <td>
    Arrival:</td>
    <td><input type="text" value="{{$values->arrival}}" name="arrival"></td>
    </tr>
    <tr>
    <td>
    Date:</td>
    <td><input type="text" value="{{$values->date}}" name="date"></td>
   <tr>
   <td>
    Departure time:</td>
    <td><input type="text" value="{{$values->dtime}}" name="dtime"></td>
  </tr>
  <tr>
  <td>
    Arrival Time:</td>
    <td><input type="text" value="{{$values->atime}}" name="atime"></td>
   </tr>
   <td>
    No of seats available:</td>
    <td><input type="text" value="{{$values->seat}}" name="seats"></td>
    </tr>
    <tr>
    <td>
    No of business seats available:</td>
    <td><input type="text" value="{{$values->bussiness}}" name="bseats"></td>
    </tr>
    <tr>
    <td>
    No of economy seats available:</td>
    <td><input type="text" value="{{$values->economy}}" name="eseats"></td>
    </tr>
    <tr>
    <td>
    No of  first class seats available:</td>
    <td><input type="text" value="{{$values->first}}" name="fseats"></td>
   </tr>
   <tr>
   <td>
    Cost of business class:</td>
    <td><input type="text" value="{{$values->bcost}}" name="bcostss"></td>
    </tr>
    <tr>
    <td>
    Cost of economic class:</td>
    <td><input type="text" value="{{$values->ecost}}" name="ecostss"></td>
    </tr>
    <tr>
    <td>
    Cost of first class:</td>
    <td><input type="text" value="{{$values->fcost}}" name="fseatss"></td>
    </tr>
    </table>
    
<div class="bg-primary">
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
</div>
</form>
</div>
<a href="userhomepage">Home page</a>
 </div>   
</body>
</html>