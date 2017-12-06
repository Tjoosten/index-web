<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class FrontController
 *
 * @package App\Http\Controllers
 */
class FrontController extends Controller
{
    /**
     * FrontController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('lang');
    }

    /**
     * Application frontpage.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('welcome');
    }
}
