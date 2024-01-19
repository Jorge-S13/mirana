<?php

namespace App\Observers;

use App\Models\Hardware;

class HardwareObserver
{
    public function created(Hardware $hardware): void
    {

    }

    public function updated(Hardware $hardware): void
    {
        if ($hardware->getOriginal('is_published') == 0) {
            $hardware->posted_at = now();
            $hardware->saveQuietly();
        }
    }

    public function deleted(Hardware $hardware): void
    {
    }

    public function restored(Hardware $hardware): void
    {
    }

    public function forceDeleted(Hardware $hardware): void
    {
    }
}
