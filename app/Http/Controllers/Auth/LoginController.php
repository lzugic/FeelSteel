<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    //Login

    function login(Request $req){
        $user = User::where(['name'=>$req->name])->first();

        if(!$user || !Hash::check($req->password, $user->password)){
            return "Korisnicko Ime ili Sifra se ne poklapaju";
        }
        $req->session()->put('user', $user);

             if($user->is_admin == true){//Admin
                
                    return redirect('admin/dashboard');

            }elseif($user->is_admin == false){//User

                    return redirect('/');
                
            }
    }



    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
