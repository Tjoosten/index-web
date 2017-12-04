<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class VisieController extends Controller
{
    public function __construct()
    {
        $this->middleware(['lang']);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('visie.index');
    }
}
