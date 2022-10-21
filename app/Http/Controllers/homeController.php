<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class homeController extends Controller
{
   public function index(){
      $product = product::all();

    return view('home',compact('product'));
   }


   public function direct(){
      $datatype =auth::user()->usertype;
       if($datatype=='1'){
         return view("admin.home");
       }else{
         return view('home');

       }


      
     }
  
     


}
