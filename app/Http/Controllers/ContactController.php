<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class ContactController
 *
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * ContactController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['lang']);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function store(): View
    {

    }
}
