<?php

class AuthController extends BaseController{
    public function login()
    {
        $data = Input::all();

        $credenciales = ['usuario'=>$data['usuario'],'password'=>$data['password']];
        if(Auth::attempt($credenciales))
        {
            return View::make('administrador.inicio');
        }
        return Redirect::back()->with('login_errors',1);
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}