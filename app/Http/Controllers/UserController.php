<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['username'=>$req->username])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Korisnicko Ime ili Sifra se ne poklapaju";
        }else{
            $req->session()->put('user', $user);
            return $user;
        }
    }
    function Register(Request $req){
        $user = new User;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        
        return redirect('login');

        //return $req->input();
    }

}
