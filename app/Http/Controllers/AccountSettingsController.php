<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountInfoValidator;
use App\Http\Requests\AccountSecurityValidator;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AccountSettingsController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->middleware(['auth']);
        $this->userRepository = $userRepository;
    }

    public function index(): View
    {
        $userId = auth()->user()->id;
        $user = $this->userRepository->find($userId, ['name', 'email']) ?: abort(Response::HTTP_NOT_FOUND);

        return view('account-settings.index', compact('user'));
    }

    public function updateSecurity(AccountSecurityValidator $input): RedirectResponse
    {
        $user = $this->userRepository->find(auth()->user()->id) ?: abort(Response::HTTP_NOT_FOUND);
        $input->merge(['password' => bcrypt($input->password)]);

        if ($user->update($input->except(['_token', '_method']))) {
            flash("U hebt uw account beveiliging succesvol aangepast")->success();
        }

        return redirect()->route('account.settings', ['type' => 'beveiliging']);
    }

    public function updateInformation(AccountInfoValidator $input): RedirectResponse
    {
        $user = $this->userRepository->find(auth()->user()->id) ?: abort(Response::HTTP_NOT_FOUND);

        if ($user->update($input->except(['_token', '_method']))) {
            flash('U hebt uw account informatie succesvol aangepast')->success();
        }

        return redirect()->route('account.settings', ['type' => 'informatie']);
    }
}
