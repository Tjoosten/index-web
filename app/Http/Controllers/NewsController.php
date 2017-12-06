<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsValidator;
use App\Repositories\NewsRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

    /**
     * De creatie view voor een nieuw bericht.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('news.backend-create');
    }

    /**
     * Slaag een nieuw bericht op in de database.
     *
     * @todo Attach categories to the post.
     * @todo Implement activity logger
     *
     * @param  NewsValidator $input The given user input (Validated)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsValidator $input): RedirectResponse
    {
        $input->merge(['author_id' => $input->user()->id]);

        if ($article = $this->newsRepository->create($input->except(['_token']))) {
            $article->addMedia($input->file('article_image'))->toMediaCollection('images');

            flash("Het nieuws bericht is opgeslagen in het systeem.")->success();
        }

        return redirect()->route('news.admin.index');
    }

    /**
     * Geef een specifiek artikel weer. Indien een artikel niet gevonden is zal er
     * een error worden weeregegen. (HTTP 404 - Not Found)
     *
     * @param  string $articleSlug The slug voor het gegeven artikel. (slug = URI fragment)
     *
     * @return \Illuminate\View\View
     */
    public function show($articleSlug): View
    {
        $article = $this->newsRepository->entity()->whereSlug($articleSlug)->firstOrFail();

        return view('news.show', compact('article'));
    }

    /**
     * Verwijder een artikel in de opslag. Hierdoor zullen ook de media assets verwijderd worden.
     *
     * @todo registreer de activiteits monitor.
     *
     * @param  int $articleId The unieke waarde foor de data in de opslag
     * @return |Illuminate\Http\RedirectResponse
     */
    public function delete($articleId): RedirectResponse
    {
        $article = $this->newsRepository->find($articleId) ?: abort(Response::HTTP_NOT_FOUND);

        if ($article->delete()) {
            flash("{$article->title} is verwijderd uit het systeem.")->success();
        }

        return redirect()->route('news.admin.index');
    }
}
