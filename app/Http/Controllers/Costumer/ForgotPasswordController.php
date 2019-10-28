<?php

namespace App\Http\Controllers\Costumer;

use Costumer;
use Password;
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
            'passwordEmailRoute' => 'cliente.password.email'
        ]);
    }
    public function broker(){
        return Password::broker('costumers');
    }
    public function guard(){
        return Auth::guard('costumer');
    }
}
