<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    function __construct()
    {
        $this->view = 'dashboard.';
        //  $this->middleware('level:admin|satker');
    }

    function index(Request $request)
    {
        //print_r($request->session()->get('year'));
        $tahun = $request->session()->get('year');
        $data  = null;
        return view($this->view . 'home', compact('data','tahun'));
    }
}
