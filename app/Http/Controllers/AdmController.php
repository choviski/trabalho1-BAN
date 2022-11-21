<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdmController extends Controller
{
    public function index(): view
    {
        return view('adm.entidades');
    }
}
