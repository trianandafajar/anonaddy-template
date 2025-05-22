<?php

namespace App\Http\Controllers;

class ShowDomainController extends Controller
{
    public function index()
    {
        $domains = user()
            ->domains()
            ->with('defaultRecipient:id,email')
            ->withCount('aliases')
            ->latest()
            ->get();

        return view('domains.index', [
            'domains' => $domains,
        ]);
    }
}
