
<h1>NOTIFICATION VIEW</h1>

<form>
 
<table border="1">
  <tr>
    
    <td>Flight Name</td>
    <td>Departure</td>
    <td>Arrival</td>
    <td>Departure Date</td>
    <td>Notification</td>
  
  
   
    
    </tr>
   
    @foreach($value as $user) 
      
      <td>{{ $user->airlinename }}</td>
      <td>{{ $user->departure }}</td>
      <td>{{ $user->arrival }}</td>
      <td>{{ $user->date }}</td>
      <td>{{ $user->notification }}</td>



      </tr>
      @endforeach
      </table>
      <a href="userhomepage">Home page</a>

</form>
