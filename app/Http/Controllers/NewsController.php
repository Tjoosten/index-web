<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsValidator;
use App\Repositories\NewsRepository;
use Illuminate\Http\RedirectResponse;
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

    /**
     * @param  NewsValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsValidator $input): RedirectResponse
    {
        // TODO: Create slug for the article.

        $input->merge(['author_id' => $input->user()->id]);

        if ($article = $this->newsRepository->create($input->except(['_token']))) {
            $article->addMedia($input->file('article_image'))->toMediaCollection('images');

            flash("Het nieuws bericht is opgeslagen in het systeem.")->success();
        }

        return redirect()->route('news.admin.index');
    }
}
