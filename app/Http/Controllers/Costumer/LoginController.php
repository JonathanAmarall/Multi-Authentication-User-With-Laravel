<?php

namespace App\Http\Controllers\Costumer;

use Costumer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class LoginController extends Controller
{
    protected $redirecTo= '/home';
    
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('Costumer.login');
    }

    public function logar(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('costumer')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended(route('cliente.dashboard'));
        }
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('costumer')->logout();
        return redirect()->route('logar');
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withErrors('Usuário e/ou senha incorretos');
    }
}
