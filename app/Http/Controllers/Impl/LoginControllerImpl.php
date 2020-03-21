<?php


namespace App\Http\Controllers\Impl;
use Illuminate\Http\Request;


interface LoginControllerImpl
{
    public function loginPage();
    public function logout();
    public function authenticate(Request $request);
    public function isLogin();
}
