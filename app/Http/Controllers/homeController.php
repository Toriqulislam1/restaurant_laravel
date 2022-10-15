<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class homeController extends Controller
{
   public function index(){


    return view('home');
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
