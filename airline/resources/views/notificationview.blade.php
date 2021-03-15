
<h1>NOTIFICATION VIEW</h1>

  <form>
   
  <table>
    <tr>
      
      <td>Flight Name</td>
      <td>Departure</td>
      <td>Arrival</td>
      <td>Departure Date</td>
      <td>Notification</td>
    
      <td>action</td>
     
      
      </tr>
     
      @foreach($data as $user) 
        
        <td>{{ $user->airlinename }}</td>
        <td>{{ $user->departure }}</td>
        <td>{{ $user->arrival }}</td>
        <td>{{ $user->date }}</td>
        <td>{{ $user->notification }}</td>

        <td><a href="{{url('deletenoti/'. $user->id)}}">delete</a></td>



        </tr>
        @endforeach
        </table>

        <a href="admin">Back</a>
  
</form>
