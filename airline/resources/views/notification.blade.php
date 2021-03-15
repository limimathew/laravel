

Skip to content
Using Gmail with screen readers
Meet
New meeting
Join a meeting
Hangouts


Unsubscribe from Team YourStory?
You haven't opened any emails from this sender in the last month
UnsubscribeNo, thanks
Conversations
2.73 GB of 15 GB used
Terms · Privacy · Programme Policies
Last account activity: 13 hours ago
Details

<h1>NOTIFICATION VIEW</h1>

  <form method="get" action="addnotification">
   
  <table>
    <tr>
      <td>Flight Number</td>
      <td>Flight Name</td>
      <td>Departure</td>
      <td>Arrival</td>
      <td>Departure Date</td>
      <td>Notification</td>
    
      <td>action</td>
     
      
      </tr>
     
      @foreach($data as $user) 
<td>{{ $user->fno }}</td>
<td>{{ $user->flname }}</td>
<td>{{ $user->departure }}</td>
<td>{{ $user->arrival }}</td>
<td>{{ $user->depdate }}</td>
<td>{{ $user->notification }}</td>

<td><a href="{{url('deletenoti/'. $user->id)}}">delete</a></td>



</tr>
@endforeach
  </table>
  
</form>
notification.blade.php
Displaying notification.blade.php.