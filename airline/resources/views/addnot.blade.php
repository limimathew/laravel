<form method="get" action="insertnotification" class="form-group">

  <center>
    @csrf
    <fieldset>
    
      <h1 class="py-5">Flight notification</h1>
      <label class="bold">select flight number</label> 
      <select name="fno" class="form-select"  >
             @foreach($data as $user)

                 <option value="{{ $user->id }}">0278110{{ $user->fid }}</option>
              @endforeach
      </select>
      <label class="bold">select flight name</label> 
      <select name="flname" class="form-select" value="{{$user->flname}}">
      @foreach($data as $user)
      <option>{{ $user->airlinename }}</option>
      @endforeach
      </select>

      <label class="bold">Departure date</label> 
      <select name="depdate" class="form-select" value="{{$user->depdate}}">
      @foreach($data as $user)
      <option>{{$user->date}}</option>
      @endforeach
      
      </select>
      <br><br>
      @foreach($data as $user)
      <input type="hidden" name="id" value="{{$user->fid}}">
      @endforeach
      <!-- <label class="bold">today's date</label> <br>
      <input type="date" name="sdate"><br><br> -->
      <textarea placeholder="Notification" name="notification" class="form-control"></textarea><br><br>
      <input type="submit" name="submit" value="Notify" class="btn btn-primary">

    </fieldset>
    
  </center>
</form>
