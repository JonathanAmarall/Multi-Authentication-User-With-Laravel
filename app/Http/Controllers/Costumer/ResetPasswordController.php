<?php

namespace App\Http\Controllers\Costumer;

use Auth;
use Password;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/costumer/dashboard';
    /**
     * Only guests for "admin" guard are allowed except
     * for logout.
     * 
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest:costumer');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('costumer.password.reset', [
            'title' => 'Reset Admin Password',
            'passwordUpdateRoute' => 'cliente.password.update',
            'token' => $token,
        ]);
    }

    public function broker()
    {
        return Password::broker('costumers');
    }
    // protected function guard()
    // {
    //     return Auth::guard('costumer');
    // }
}
