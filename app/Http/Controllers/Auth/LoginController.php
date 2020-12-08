<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Session\Session;
use Session;
use App\Helpers\Properti_app;
use Config;

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

    protected $redirectTo = '/home';
    //protected $year = '2020';

    private function setYear($year)
    {
        $this->year = $year;
    }

    private function getYear()
    {
        return $this->year;
    }

    private function setPath()
    {
        $this->redirectTo = route('home', ['tahun' => $this->getYear()]);
    }

    private function getPath()
    {
        return $this->redirectTo;
    }

    function username()
    {
        return 'username';
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
            'year' => 'required|string'
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($request->input('year')) {
            $dbname = trim(Properti_app::getDb() . $request->input('year'));
            $value_setting = [
                'DB_DATABASE'   => $dbname,
                'TAHUN_ANGGARAN' => $request->input('year')
            ];
            Properti_app::changeEnv($value_setting);
            $request->session()->put('dbname', $dbname);
            $request->session()->put('year', $request->input('year'));
            $this->setYear($request->input('year'));
            $this->setPath();

            return redirect()->intended('/');
        }
    }
}
