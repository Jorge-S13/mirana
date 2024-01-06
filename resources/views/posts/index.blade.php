@extends('layouts.app')

@section('content')
    <x-moonshine::grid>
        @foreach($posts as $post)
            <x-moonshine::column colSpan="4">
                <x-moonshine::card
                    url="#"
                    :overlay="true"
                    :thumbnail="asset('storage/' . $post->main_image)"
                    :title="$post->title"
                    :values="[
                    'Category' => $post->category->name,
                    'Rating' => \MoonShine\Fields\Number::make('Rating')->stars()->setValue(4)->min(0)->max(5)->preview()
                    ]"
                >
                    @if(\Carbon\Carbon::parse($post->created_at)->diffInDays(\Carbon\Carbon::now()) < 10)
                        <x-slot:header>
                            <x-moonshine::badge color="green">new</x-moonshine::badge>
                        </x-slot:header>
                    @endif

                    {{ $post->description }}

                    <x-slot:actions>
                        <x-moonshine::link-button href="#">Read more</x-moonshine::link-button>
                        {{--                        <div>--}}
                        {{--                            {!! actionBtn("$post->likes_count", 'https://moonshine-laravel.com')->icon('heroicons.hand-thumb-up')!!}--}}
                        {{--                        </div>--}}
                    </x-slot:actions>
                </x-moonshine::card>
            </x-moonshine::column>
        @endforeach

    </x-moonshine::grid>
    {{$posts->links('moonshine::ui.pagination',['async' => false])}}
@endsection
