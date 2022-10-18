<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class adminController extends Controller
{
  public function user(){

    $user =user::all();
   



    return view('admin.user',compact('user'));
  }

public function user_delete($id){

    $data= user::find($id);
         
    $user =auth::user()->usertype;

if( $user=='1'){
    echo "not allow";
}else{
  $data->delete;
    return redirect()->back();


}

}


public function menu(){



  

  return view('admin.menu');
}


public function reservation(Request $request){

  $reser = new reservation;
  $reser->name      = $request->name;
  $reser->email     = $request->email;
  $reser->phone     = $request->phone;
  $reser->guest     = $request->guests;
  $reser->date      = $request->date;
  $reser->time      = $request->time;
  $reser->message   = $request->message;

  $reser->save();
 return redirect()->back();
}

public function reservation_show(){

$reser_show = reservation::all();


return view('admin.reservation_show',compact('reser_show'));

}














}