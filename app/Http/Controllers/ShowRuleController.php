<?php

namespace App\Http\Controllers;

class ShowRuleController extends Controller
{
    public function index()
    {
        $rules = user()
            ->rules()
            ->orderBy('order')
            ->get();

        return view('rules.index', compact('rules'));
    }
}
