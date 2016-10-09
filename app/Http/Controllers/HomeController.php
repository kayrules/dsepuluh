<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Theme;

class HomeController extends Controller
{
    public function GET_index()
    {
        $params = array();
        return view('home.index', $params);
    }
}
