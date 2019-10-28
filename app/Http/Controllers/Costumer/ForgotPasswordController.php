<?php

namespace App\Http\Controllers\Costumer;

use App\Costumer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest:costumer');
    }
    public function showLinkRequestForm()
    {
        return view('costumer.password.email', [
            'title' => 'Recuperação de Senha',
            'passwordEmailRoute' => 'password.email'
        ]);
    }
    public function broker(){
        return Password::broker('costumers');
    }
    public function guard(){
        return Auth::guard('costumer');
    }
}
