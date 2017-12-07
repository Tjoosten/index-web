<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use Illuminate\View\View;

/**
 * Class FrontController
 *
 * @package App\Http\Controllers
 */
class FrontController extends Controller
{
    private $newsRepository; /** @var NewsController $newsRepository */

    /**
     * FrontController constructor.
     *
     * @param NewsRepository $newsRepository Abstraction layer between database and controller.
     *
     * @return void
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->middleware('lang');
        $this->newsRepository = $newsRepository;
    }

    /**
     * Application frontpage.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('welcome', [
            'messages' => $this->newsRepository->entity()->simplePaginate(3)
        ]);
    }
}
