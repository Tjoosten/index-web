<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class NewsController
 *
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    private $newsRepository; /** @var NewsRepository $newsRepository */

    /**
     * NewsController constructor.
     *
     * @param NewsRepository $newsRepository
     *
     * @return void
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->middleware('auth');
        $this->middleware('lang');

        $this->newsRepository = $newsRepository;
    }

    /**
     * Get the admin control panel for the news messages.
     *
     * @return \Illuminate\View\View
     */
    public function backendIndex(): View
    {
        return view('news.backend-index', [
            'messages' => $this->newsRepository->entity()->simplePaginate(15)
        ]);
    }

    public function create(): View
    {
        return view('news.backend-create');
    }
}
