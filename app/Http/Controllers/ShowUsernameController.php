<?php

namespace App\Http\Controllers;

class ShowUsernameController extends Controller
{
    public function index()
    {
        $usernames = user()
            ->usernames()
            ->with([
                'defaultRecipient:id,email',
            ])
            ->withCount('aliases')
            ->latest()
            ->get();

        return view('usernames.index', compact('usernames'));
    }
}
