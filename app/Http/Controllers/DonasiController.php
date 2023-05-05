<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function listprogram()
    {
        return view('user.listprogram');
    }
}
