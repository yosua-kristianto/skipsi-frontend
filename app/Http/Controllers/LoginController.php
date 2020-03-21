<?php

namespace App\Http\Controllers;

use Session;
use Redirect;

use App\Http\Controllers\Impl\LoginControllerImpl;
use Illuminate\Http\Request;

class LoginController extends Controller implements LoginControllerImpl
{

    //Page control
    public function loginPage()
    {
        $image_url = "https://pixabay.com/photos/hardwood-antique-backdrop-1851071/";
        return view('auth/login')
                ->with($image_url);
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }

    public function authenticate(Request $request)
    {
        return view('cms/home/home');
        // TODO: Implement login() method.
    }

    public function isLogin()
    {
        if(Session::get('id') != null)
            return redirect('/auth/login');
        else return redirect('/home');

    }
}
