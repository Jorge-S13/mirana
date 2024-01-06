<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\SeoResource;
use App\MoonShine\Resources\TagResource;
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
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ])->canSee(fn() => request()->routeIs('moonshine.*')),

            MenuGroup::make('Blog', [
                MenuItem::make(
                    'Posts',
                    new PostResource()
                ),
                MenuItem::make(
                    'Categories',
                    new CategoryResource()
                ),
                MenuItem::make(
                    'Tags',
                    new TagResource()
                ),
            ])->canSee(fn() => request()->routeIs('moonshine.*')),

            MenuItem::make('Web Site', static fn () => route('home'))->canSee(fn() => request()->routeIs('moonshine.*')),
            MenuItem::make('Seo', new SeoResource())->canSee(fn() => request()->routeIs('moonshine.*')),

            MenuItem::make('Home Page', '/')
                ->canSee(fn() => !request()->routeIs('moonshine.*')),
            MenuDivider::make()->canSee(fn() => !request()->routeIs('moonshine.*')),
            MenuItem::make('Contact Us', '/')
                ->canSee(fn() => !request()->routeIs('moonshine.*')),
            MenuDivider::make()->canSee(fn() => !request()->routeIs('moonshine.*')),
            MenuItem::make('Privacy Policy', '/')
                ->canSee(fn() => !request()->routeIs('moonshine.*')),
            MenuDivider::make()->canSee(fn() => !request()->routeIs('moonshine.*')),
            MenuItem::make('Terms and Conditions', '/')
                ->canSee(fn() => !request()->routeIs('moonshine.*')),
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
