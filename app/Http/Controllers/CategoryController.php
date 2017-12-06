<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryValidator;
use App\Repositories\TagsRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    private $tagsRepository; /** @var TagsRepository $tagsRepository */

    /**
     * CategoryController constructor.
     *
     * @param TagsRepository $tagsRepository
     *
     * @return void
     */
    public function __construct(TagsRepository $tagsRepository)
    {
        $this->middleware(['auth', 'lang']);
        $this->tagsRepository = $tagsRepository;
    }

    /**
     * The idnex weergave voor de categories.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('categories.index', ['categories' => $this->tagsRepository->entity()->simplePaginate(10)]);
    }

    /**
     * De creatie view voor een nieuwe categorie.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('categories.create');
    }

    /**
     * @todo docblock
     * @todo registratie routering
     * @todo validator
     * @todo build up breadcrumb
     */
    public function edit($category): View
    {
        $category = $this->tagsRepository->findOrFail($category);

        return view('todo', compact('category'));
    }

    /**
     * Opslag van een nieuwe category op in de databank.
     *
     * @todo fill in validator
     *
     * @param  CategoryValidator $input De door de gebruiker gegeven data (gevalideerd).
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryValidator $input): RedirectResponse
    {
        $input->merge(['author_id' => $input->user()->id]);

        if ($category = $this->tagsRepository->entity()->create($input->all())) {
            flash("De categorie '{$category->name}' is toegevoegd in het systeem.")->success();
        }

        return redirect()->route('category.admin.index');
    }

    /**
     * Verwijder een categorie in de database.
     *
     * @param int $category The unieke waarde van de categorie in de opslag.
     *
     * @return RedirectResponse
     */
    public function delete($category): RedirectResponse
    {
        $category = $this->tagsRepository->findOrFail($category);

        if ($category->delete()) {
            flash("De categorie '{$category->name}' is verwijderd uit het systeem.")->success();
        }

        return redirect()->route('category.admin.index');
    }
}
