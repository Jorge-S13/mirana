@extends('layouts.app')

@section('content')
    <x-moonshine::grid>
        <x-moonshine::column>
            <x-moonshine::box>
                <x-moonshine::title>
                    {!! $post->title !!}
                </x-moonshine::title>
                <x-moonshine::divider />
                <div class="main_image">
                    <img src="{{asset('storage/' . $post->main_image)}}"/>
                </div>
                <style>
                    .main_image{
                        display: flex;
                        justify-content: center;
                    }
                </style>
                <x-moonshine::divider />
                {!! $post->content !!}
            </x-moonshine::box>
        </x-moonshine::column>
    </x-moonshine::grid>
@endsection
