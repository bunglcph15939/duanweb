<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function index(){

    }

    // Hien thi man hinh login
    public function login(){
        return view('screens.frontend.login');
    }

    // Xu ly login
    public function processLogin(Request $request){
        $rule = [
            'email' => 'required|email',
            'password' => 'required|',
        ];
        $messages = [
            'email.required' => 'Email không được để chống',
            'password.required' => 'Password không được để chống',
            'email.email' => 'Kiểm tra lại email'
        ];
        $request->validate($rule,$messages);

        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt([
            'email'=> $email,
            'password' => $password
        ])){
            
            return redirect()->route('home');
        }
        else{
            return back();
        }
    }

    //Hien thi ra man hinh dang ky
    public function register(){
        return view('screens.frontend.register');
    }

    //Xu ly dang ky
    public function processRegister(UserRequest $request){
        // dd($request->all());
        $user = new User();
        if($request->hasFile('avatar')){
            // dd($request->avatar);
            $file = $request->avatar;
            $ext = $request->avatar->extension();
            $file_name = time().'-'.'user.'.$ext;
            $file->move(public_path('frontend/images/avatars'), $file_name);
        }
        // $request->merge(['avatar' => $file_name]);
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->avatar = $file_name;
        $user->save();
        $user->assignRole(4);
        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('verification.notice');
        // return redirect()->route('auth.login')->with('status', 'Đăng kí thành công. Mời đăng nhập');
    }   
}
