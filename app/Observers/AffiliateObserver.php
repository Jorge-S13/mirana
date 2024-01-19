<?php

namespace App\Observers;

use App\Models\Affiliate;

class AffiliateObserver
{
    public function created(Affiliate $affiliate): void
    {

    }

    public function updated(Affiliate $affiliate): void
    {
        if ($affiliate->getOriginal('is_published') == 0) {
            $affiliate->posted_at = now();
            $affiliate->saveQuietly();
        }
    }

    public function deleted(Affiliate $affiliate): void
    {
    }

    public function restored(Affiliate $affiliate): void
    {
    }

    public function forceDeleted(Affiliate $affiliate): void
    {
    }
}
