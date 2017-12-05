<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsValidator;
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

    public function store(NewsValidator $input)
    {
        //  array:6 [▼
        //      "_token" => "9PQO9CuTUcTWgTkyXme5MiNocrZLTH7zUiMFqC6e"
        //      "publish_date" => "2017-12-05",
        //      "article_image" => UploadedFile {#434 ▶}
        //      "is_published" => null
        //      "title" => array:3 [▼
        //          "nl" => null
        //          "fr'" => null
        //          "en" => null
        //      ]
        //      "categories" => array:3 [▼
        //          "nl" => null
        //          "fr" => null
        //          "en" => null
        //      ]
        //      "message" => array:3 [▼
        //          "nl" => null
        //          "fr" => null
        //          "en" => null
        //      ]
        // ]
    }
}
