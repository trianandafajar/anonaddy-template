<?php

namespace App\Http\Controllers;

class ShowRecipientController extends Controller
{
    public function index()
    {
        $recipients = user()->recipients()->with([
            'aliases:id,aliasable_id,email',
            'domainsUsingAsDefault.aliases:id,aliasable_id,email',
            'usernamesUsingAsDefault.aliases:id,aliasable_id,email',
        ])->latest()->get();

        $count = $recipients->count();

        $recipients->each(function ($recipient, $key) use ($count) {
            // Gabungkan alias dari domain default
            if ($recipient->domainsUsingAsDefault) {
                $domainAliases = $recipient->domainsUsingAsDefault->flatMap->aliases;
                $recipient->setRelation(
                    'aliases',
                    $recipient->aliases->concat($domainAliases)->unique('email')
                );
            }

            // Gabungkan alias dari username default
            if ($recipient->usernamesUsingAsDefault) {
                $usernameAliases = $recipient->usernamesUsingAsDefault->flatMap->aliases;
                $recipient->setRelation(
                    'aliases',
                    $recipient->aliases->concat($usernameAliases)->unique('email')
                );
            }

            // Tambahkan urutan kebalik (semacam index terbalik)
            $recipient['key'] = $count - $key;
        });

        return view('recipients.index', [
            'recipients' => $recipients,
            'aliasesUsingDefault' => user()->aliasesUsingDefault()->take(5)->get(),
            'aliasesUsingDefaultCount' => user()->aliasesUsingDefault()->count(),
            'user' => user()->load('defaultUsername'),
        ]);
    }
}
