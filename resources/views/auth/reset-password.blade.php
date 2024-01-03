@extends('layouts.login')

@section('content')
    <div class="authentication">
        <div class="authentication-content">
            {{$form->render()}}

        </div>
    </div>
@endsection
