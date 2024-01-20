<?php

namespace App\Observers;

use App\Models\TopPicks;

class TopPicksObserver
{
    public function created(TopPicks $topPicks): void
    {

    }

    public function updated(TopPicks $topPicks): void
    {
        if ($topPicks->getOriginal('is_published') == 0) {
            $topPicks->posted_at = now();
            $topPicks->saveQuietly();
        }
    }

    public function deleted(TopPicks $topPicks): void
    {
    }

    public function restored(TopPicks $topPicks): void
    {
    }

    public function forceDeleted(TopPicks $topPicks): void
    {
    }
}
