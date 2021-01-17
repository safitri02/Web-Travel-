<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
    return view('login.index');
   }

   public function proses(Request $req)
   {

      $data = [
         'email' => $req->input('email'),
         'password' => $req->input('password')
      ];

      $masuk = Auth::attempt($data);

      if($masuk){
         return redirect('/admin');
      } else{
         echo "Email Atau Password salah";
      }

   }

   public function logout()
   {
      Auth::logout();
      return redirect('/login');
   }



}
