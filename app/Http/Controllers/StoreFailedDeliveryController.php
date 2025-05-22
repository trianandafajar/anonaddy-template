<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreFailedDeliveryRequest;

class StoreFailedDeliveryController extends Controller
{
    public function update(UpdateStoreFailedDeliveryRequest $request)
    {
        user()->update([
            'store_failed_deliveries' => (bool) $request->store_failed_deliveries,
        ]);

        $status = $request->store_failed_deliveries
            ? 'Store Failed Deliveries Enabled Successfully'
            : 'Store Failed Deliveries Disabled Successfully';

        return back()->with('status', $status);
    }
}
