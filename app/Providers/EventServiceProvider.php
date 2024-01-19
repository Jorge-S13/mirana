<?php

namespace App\Providers;

use App\Models\Affiliate;
use App\Models\Hardware;
use App\Models\News;
use App\Models\Post;
use App\Models\Reviews;
use App\Models\TopPicks;
use App\Observers\AffiliateObserver;
use App\Observers\HardwareObserver;
use App\Observers\NewsObserver;
use App\Observers\PostObserver;
use App\Observers\ReviewsObserver;
use App\Observers\TopPicksObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Post::observe(PostObserver::class);
        News::observe(NewsObserver::class);
        Affiliate::observe(AffiliateObserver::class);
        Hardware::observe(HardwareObserver::class);
        Reviews::observe(ReviewsObserver::class);
        TopPicks::observe(TopPicksObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
