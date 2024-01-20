<?php

namespace App\Observers;

use App\Models\Reviews;

class ReviewsObserver
{
    public function created(Reviews $reviews): void
    {

    }

    public function updated(Reviews $reviews): void
    {
        if ($reviews->getOriginal('is_published') == 0) {
            $reviews->posted_at = now();
            $reviews->saveQuietly();
        }
    }

    public function deleted(Reviews $reviews): void
    {
    }

    public function restored(Reviews $reviews): void
    {
    }

    public function forceDeleted(Reviews $reviews): void
    {
    }
}
