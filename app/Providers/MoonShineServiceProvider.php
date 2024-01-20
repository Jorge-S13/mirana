<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\AffiliateResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\HardwareResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\ReviewsResource;
use App\MoonShine\Resources\SeoResource;
use App\MoonShine\Resources\TagResource;
use App\MoonShine\Resources\TopPicksResource;
use MoonShine\Menu\MenuDivider;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
//            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
//               MenuItem::make(
//                   static fn() => __('moonshine::ui.resource.admins_title'),
//                   new MoonShineUserResource()
//               ),
//               MenuItem::make(
//                   static fn() => __('moonshine::ui.resource.role_title'),
//                   new MoonShineUserRoleResource()
//               ),
//            ]),

            MenuGroup::make('Content Manager', [
                MenuItem::make(
                    'News',
                    new NewsResource()
                ),
                MenuItem::make(
                    'Blog',
                    new PostResource()
                ),
                MenuItem::make(
                    'Reviews',
                    new ReviewsResource()
                ),
                MenuItem::make(
                    'Hardware Hub',
                    new HardwareResource()
                ),
                MenuItem::make(
                    'Top Picks',
                    new TopPicksResource()
                ),
                MenuItem::make(
                    'Affiliate links',
                    new AffiliateResource()
                ),
            ]),
            MenuItem::make('Categories', new CategoryResource()),

            MenuItem::make('Tags', new TagResource()),
            MenuItem::make('Seo', new SeoResource()),
            MenuItem::make('Web Site', static fn () => route('home')),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
