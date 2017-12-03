<?php

namespace App\Http\Controllers;

use App\Http\Requests\BugValidator;
use Github\Client;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BugController extends Controller
{
    private $github;

    public function __construct(Client $github)
    {
        $this->middleware(['auth']);

        $github->authenticate(config('github.user.name'), config('github.user.pass'), $github::AUTH_HTTP_PASSWORD);
        $this->github = $github;
    }

    public function index(Client $client): View
    {
        return view('bugs.report', [
            'labels' => $this->github->api('issue')->labels()->all(
                config('github.repo.organization'), config('github.repo.name')
            )
        ]);
    }

    public function send(BugValidator $input): RedirectResponse
    {
        // Store the issue to GitHub.
        $create = $this->github->api('issue')->create(
            config('github.repo.organization'), config('github.repo.name'), [
                'title' => $input->title, 'body' => $input->description
            ]
        );

        // Attach the label to the issue
        $attach = $this->github->api('issue')->labels()->add(
            config('github.repo.organization'), config('github.repo.name'), $create['number'], $input->label
        );

        if ($create && $attach) {
            flash('Jouw rapportering is opgeslagen. Wij kijken er snel naar. Bedankt voor de melding')
                ->success();
        }

        return redirect()->route('bug.melding');
    }
}
