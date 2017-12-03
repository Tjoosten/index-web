<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
}
