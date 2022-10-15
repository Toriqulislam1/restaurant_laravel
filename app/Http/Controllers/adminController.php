<?php

namespace App\Http\Controllers;
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
         $data->delete();
//     $user =auth::user()->usertype;

// if( $user=='1'){
//     echo "not allow";
// }else{
//     $user->delete;
    return redirect()->back();


}

}



