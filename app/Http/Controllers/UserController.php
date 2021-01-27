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
            return redirect('/');
        }
    }
}
