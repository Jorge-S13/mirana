<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data
      :class="store.darkMode.on && 'dark'"
>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0TRY7HSQH7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0TRY7HSQH7');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{seo()->meta()->description()}}">
    <meta name="keywords" content="{{seo()->meta()->keywords()}}">

    <title>{{seo()->meta()->title()}}</title>

    @moonShineAssets
</head>
<x-moonshine::layout>
    <x-moonshine::layout.flash />

    <x-moonshine::layout.top-bar :home_route="route('home')">
        <x-slot:profile>
            @auth
                <x-moonshine::layout.profile
                    route="/profile"
                    :log-out-route="route('web.logout')"
                />
            @elseguest
                <x-moonshine::link-button :href="route('login')">
                    Log in
                </x-moonshine::link-button>
            @endauth
        </x-slot:profile>
        <x-moonshine::layout.menu />

    </x-moonshine::layout.top-bar>
    <main class="layout-page">
        <x-moonshine::grid>
            <x-moonshine::column>
                <x-moonshine::layout.header
                    :notifications="false"
                    :locales="false"
                />

                <x-moonshine::layout.content/>
            </x-moonshine::column>
        </x-moonshine::grid>
    </main>
</x-moonshine::layout>
</html>
