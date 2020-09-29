<?php

namespace Concerns;

use App\Receipt;

trait ManagesReceipts
{
    /**
     * Get all of the receipts for the Billable model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function receipts()
    {
        return $this->morphMany(Receipt::class, 'billable')->orderByDesc('created_at');
    }
}
