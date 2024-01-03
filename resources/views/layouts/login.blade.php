<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data
      :class="store.darkMode.on && 'dark'"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    @moonShineAssets
</head>
<div class="authentication">
    <div class="authentication-logo">
        <a href="/" rel="home">
            <img class="h-16"
                 src="{{ asset(config('moonshine.logo') ?? 'vendor/moonshine/logo.svg') }}"
                 alt="{{ config('moonshine.title') }}"
            >
        </a>
    </div>

    <div class="authentication-content">
        <div class="authentication-header">
            <h1 class="title">
                @lang(
                    'moonshine::ui.login.title',
                    ['moonshine_title' => config('moonshine.title')]
                )
            </h1>

            <p class="description">
                @lang('moonshine::ui.login.description')
            </p>
        </div>

        @yield('content')

        <p class="text-center text-2xs">
            {!! config('moonshine.auth.footer', '') !!}
        </p>

        <div class="authentication-footer">
            @include('moonshine::ui.social-auth', [
                'title' => trans('moonshine::ui.login.or_socials')
            ])
        </div>
    </div>
</div>
</html>
