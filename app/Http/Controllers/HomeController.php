<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User; 

class HomeController extends Controller
{
    //create the redirect function

    public function redirect(){


        if(Auth::id())
        { 
          // checking if there's any user trying to log in


          if(Auth::user()->usertype=='0'){ // 0 means a normal user and 1 means admin
            return view('Users.home'); //dashboard in the resource.php

             }
          else{
            return view('admin.home');
             }

         }



    
        else{
            return redirect()->back();
        }
    }
    public function index()
    {

        return view('Users.home');

    }
    
} 
