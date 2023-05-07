<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstPageController extends Controller
{
    public function first()
    {
        return view('Login.index');
    }
}
