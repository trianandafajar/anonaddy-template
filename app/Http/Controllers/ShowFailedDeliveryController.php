<?php

namespace App\Http\Controllers;

class ShowFailedDeliveryController extends Controller
{
    public function index()
    {
        $failedDeliveries = user()
            ->failedDeliveries()
            ->with([
                'recipient:id,email',
                'alias:id,email',
            ])
            ->select([
                'id',
                'alias_id',
                'recipient_id',
                'sender',
                'remote_mta',
                'bounce_type',
                'code',
                'attempted_at',
                'is_stored',
                'created_at',
            ])
            ->latest()
            ->get();

        return view('failed_deliveries.index', [
            'failedDeliveries' => $failedDeliveries,
        ]);
    }
}
