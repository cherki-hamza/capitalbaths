<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // method for register new client
    public function register_client(Request $request){

        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $user = new User();
        $user->name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];
        $user->mobile = $data['mobile'];
        $user->country = $data['country'];
        $user->city = $data['city'];
        $user->role_id = 3;  // role => client

        $result  = $user->save();

        if($result == true){
            return response()->json(['status'=> 200 , 'message' => 'user client register successfully']);
        }else{
            return response()->json(['status'=> 200 , 'message' => 'Oops Server Error can you try again']);
        }



    }

    // methd for login without refreshing the page
    public function login_client(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login successful
            return response()->json(['success' => true, 'message' => 'Login successfuly']);
        } else {
            // Login failed
            return response()->json(['success' => false, 'message' => 'Invalid credentials Try Again']);
        }
    }


}
