<?php

namespace App\Observers;

use App\Models\News;

class NewsObserver
{
    public function created(News $news): void
    {

    }

    public function updated(News $news): void
    {
        if ($news->getOriginal('is_published') == 0) {
            $news->posted_at = now();
            $news->saveQuietly();
        }
    }

    public function deleted(News $news): void
    {
    }

    public function restored(News $news): void
    {
    }

    public function forceDeleted(News $news): void
    {
    }
}
