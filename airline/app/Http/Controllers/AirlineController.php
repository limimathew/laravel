<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Detail;
use App\Models\Log;
use App\Models\notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AirlineController extends Controller
{   
     
    /*******************
    *@function name:register1
    *@function:Login Function
    *@Author:Kavya B
    *@date:10/03/2021
    *******************/
   function  addFlight (Request $req)
    {
        $flight=new Flight;
        $flight->airlinename=$req->airlinename;
        $flight->departure=$req->departure;
        $flight->arrival=$req->arrival;
        $flight->date=$req->date;
        $flight->dtime=$req->dtime;
        $flight->atime=$req->atime;
        $flight->seat=$req->seat;
        $flight->bussiness=$req->bussiness;
        $flight->economy=$req->economy;
        $flight->first=$req->first;
        $flight->bcost=$req->bcost;
        $flight->ecost=$req->ecost;
        $flight->fcost=$req->fcost;
        $flight->save();
        return redirect('addflight');

        
    }
     
    /*******************
    *@function name:register1
    *@function:Login Function
    *@Author:Kavya B
    *@date:10/03/2021
    *******************/
    function viewFlight()
    {
        $n=Flight::all();
        return view('flightview',['data'=>$n]);
    }
    
    /*******************
    *@function name:register1
    *@function:Login Function
    *@Author:Kavya B
    *@date:10/03/2021
    *******************/
    function deleteFlight($id)
    {
        $data=Flight::find($id);
        $data->delete();
        return redirect("ftb");
    }

    //updation of flight
    function updateFlight($id)
    {
        $data=Flight::find($id);
        return view('flightupdate',['fdata'=>$data]);
    }
    function updateFlightAction(Request $req)
    {
       
        $data=Flight::find($req->id);
        $data->airlinename=$req->airlinename;
        $data->departure=$req->departure;
        $data->arrival=$req->arrival;
        $data->date=$req->date;
        $data->dtime=$req->atime;
        $data->seat=$req->seat;
        $data->bussiness=$req->bussiness;
        $data->economy=$req->economy;
        $data->bcost=$req->bcost;
        $data->first=$req->first;
        $data->ecost=$req->ecost;
        $data->fcost=$req->fcost;
        $data->save();
        return redirect("ftb");

    }

    
    /*******************
    *@function name:register1
    *@function:Login Function
    *@Author:Betty Thomas
    *@date:10/03/2021
    *******************/
    function bookFlight()
    {
        $data=Flight::all();
        return view('bookflight',['value'=>$data]);
    }
    
    /*******************
    *@function name:register1
    *@function:Login Function
    *@Author:Betty Thomas
    *@date:10/03/2021
    *******************/
    function bookNow($fid)
    {
        $data=Flight::find($fid);
        return view('booknow',['values'=>$data]);
    }
    
    /*******************
    *@function name:register1
    *@function:Login Function
    *@Author:Betty Thomas
    *@date:10/03/2021
    *******************/
    function ReduceNow()
    {
        $data=Flight::find(1);
        $value=$data->first;
        $value=$value-1;
        $data->first=$value;
        $data->save();
        echo "hai";
    }
    
    /*******************
    *@function name:select
    *@function:Function to view the flight deatils in the search page
    *@Author:Betty Thomas
    *@date:10/03/2021
    *******************/
    function select()
    {
        $data=Flight::all();
        $select=Flight::all();
        return view('search',['value'=>$data,'selected'=>$select]);
    }
    
    /*******************
    *@function name:searchResult
    *@function:Function to view the search result in the search page
    *@Author:Betty Thomas
    *@date:10/03/2021
    *******************/
    function searchResult(Request $req)
    {
        $data =Flight::where([
            ['departure', '=',$req->departure],
            ['arrival', '=',$req->arrival],
        ])->get();
        $select=Flight::all();
        return view('search',['value'=>$data,'selected'=>$select]);

    }


     
    /*******************
    *@function name:seatSelected
    *@function:Function to store the flight id in session and seat cost in session
    *@Author:Betty Thomas
    *@date:12/03/2021
    *******************/
    function seatSelected(Request $req)
    {    
        $id=$req->flid;
        $req->session()->put('flightid',$id);//storing flightid in session
        $select=Flight::find($id);//details of the flight
        $selected=$req->seat;
        $req->session()->put('seat',$selected);//seat:e,b,f*******storing seat selected in session
        if($selected=='e')
        {
            $cost=$select->ecost;
            $seatclass='economic';
        }
        elseif($selected=='b')
        {
            $cost=$select->bcost;
            $seatclass='business';
        }
        else
        {   
            $cost=$select->fcost;
            $seatclass='first';
        }


        $loginid=$req->session()->get('LoggedUser');
        $userdata=Log::find($loginid);//user details from the table
        if($userdata->age>60)
        {   $cost=($cost)-(($cost)*(10/100));
        }
        $req->session()->put('class',$seatclass);//*******storing class of the seat selected in session
        $req->session()->put('cost',$cost);//storing the cost in session after providing the concession

        return view('paymentdetails',['flight'=>$select,'user'=>$userdata,'pay'=>$cost,'seat'=>$seatclass]);

    }
    public function paymentsuccess(Request $req)
    {
        $cost=$req->session()->get('cost');
        return view('sucess',['cost'=>$cost]);

    }

    public function ticketGenerated(Request $req)
    {   //ticketid should be given to the page after the data is inserted
        $loginid=$req->session()->get('LoggedUser');
        $userdata=Log::find($loginid);//user details

        $fid=$req->session()->get('flightid');
        $select=Flight::find($fid);//flight details
        $seatclass=$req->session()->get('class');//seat class is stored
        // to store to details of the booking 
        $details=new Detail;
        $details->fid=$fid;
        $details->uid=$loginid;
        $details->seat=$seatclass;
        $details->save();
        $no=$details->id;
        //count decrement
        $data=Flight::find($fid);

        $selected=$req->session()->get('seat');//seat:e,b,f*******taking seat selected in session
        if($selected=='e')
        {
            $value=$data->economy;
            $value=$value-1;
            $data->economy=$value;
    
        }
        elseif($selected=='b')
        {
            $value=$data->bussiness;
            $value=$value-1;
            $data->bussiness=$value;
    
        }
        else
        {   
            $value=$data->first;
            $value=$value-1;
            $data->first=$value;
            
        }

        $value=$data->seat;
            $value=$value-1;
            $data->seat=$value;
            $data->save();
          return view('ticketview',['flight'=>$select,'user'=>$userdata,'seat'=>$seatclass,'id'=>$no]);
        
    }


    /*******************
    *@function name:register1
    *@function:Login Function
    *@Author:limi mathew
    *@date:10/03/2021
    *******************/

    public function register1(Request $request) {
        $air=new Log;
        $air->name=$request->name;
        $air->gender=$request->gender;
        $air->phone=$request->phone;
        $air->email=$request->email;
        $air->age=$request->age;
        $air->password=Hash::make($request->password);
        $air->save();
        //return redirect('login');
         echo 'hello';
         if($request)
        {
            return redirect("login")->with('sucess','sucessfully registered');
            
         }
         else{
            return back()->with('fail','something wrong');
        }
    }
    /*******************
    *@function name:check
    *@function:viewing registeration page
    *@Author:limi mathew
    *@date:10/03/2021
    *******************/
    function check(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $userinfo = Log::where('email','=',$req->email)->first();
        
        if(!$userinfo)
        {   
           return back()->with('fail','we cannot recoganize');
        }
        else{
            if(Hash::check($req->password,$userinfo->password))
            {   
                $req->session()->put('LoggedUser',$userinfo->id);
                if($userinfo->email=='admin@gmail.com')
                {
                return view("adminhome");
                }
            else{
                return view("userhome");
                }

            }
            else{
             return back()->with('fail','invalid password');
            }
        }
    }

    /*******************
    *@function name:check
    *@function:payment functions
    *@Author:limi mathew
    *@date:10/03/2021
    *******************/

/*******************
    *@function name:addnotification
    *@function:add notification
    *@Author:limi
    *@date:12/03/2021
    *******************/
    function addnotification()
 {   
     
  $data=Flight::all();
  return view('addnot',compact('data'));
 }
 /*******************
    *@function name:insertnotification
    *@function:insert notification
    *@Author:limi
    *@date:12/03/2021
    *******************/
 function insertnotification(Request $req)
 {
      //$ldate = date('Y-m-d H:i:s');
     $notification=new notification;
     $curTime = new \DateTime();
     $notification->notification=$req->notification;
     $notification->cdate=$curTime->format("Y-m-d H:i:s");
     $notification->fid=$req->id;

     
     $notification->save();
     return redirect('addnotification');
 }
 /*******************
    *@function name:notificationlist
    *@function:view notification
    *@Author:limi
    *@date:12/03/2021
    *******************/

 function notificationlist()
 {    
  
      
$data = DB::table('notifications')
    ->join('flights','flights.fid','=','notifications.fid')
    ->select('flights.airlinename','flights.departure','flights.arrival','flights.date','notifications.notification','notifications.id as id')
   ->get();
  
      return view('notificationview',compact('data'));
                  
}
/*******************
    *@function name:deletenoti
    *@function:delete  notification
    *@Author:limi
    *@date:12/03/2021
    *******************/

   function deletenoti($id)
      {
          $data=Notification::find($id)->delete();
          return redirect('getnoti');
      }
      function viewnotification()
      {    
       
           
     $data = DB::table('notifications')
         ->join('flights','flights.fid','=','notifications.fid')
         ->select('flights.airlinename','flights.departure','flights.arrival','flights.date','notifications.notification','notifications.id as id')
        ->get();
       
           return view('usernotification',['value'=>$data]);
                       
     }
     function logout()
      {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('index');
        } 
    } 

    
}
