<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DisclaimerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['lang']);
    }

    public function index(): View
    {
        return view('disclaimer.index');
    }
}
