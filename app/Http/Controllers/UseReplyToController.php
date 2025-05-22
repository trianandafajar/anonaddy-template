<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUseReplyToRequest;

class UseReplyToController extends Controller
{
    public function update(UpdateUseReplyToRequest $request)
    {
        user()->update(['use_reply_to' => (bool) $request->use_reply_to]);

        $status = $request->use_reply_to
            ? 'Use Reply To Enabled Successfully'
            : 'Use Reply To Disabled Successfully';

        return back()->with('status', $status);
    }
}
