@extends('layouts.app')

@section('content')


    <section id="hero" class="pattern-blur">
        {{--    <div class="pattern-overlay pattern-blur-right right-side-pattern">--}}
        {{--        <img src="{{asset('images/pattern-blur-right.png')}}" fetchpriority="low" alt="">--}}
        {{--    </div>--}}
        <div class="container ">
            <h2 class="section-title light text-center mt-5 pt-5">Our Blog</h2>
        </div>
    </section>

    <section id="blog" class="padding-large pt-5">
        <div class="container">
            <div class="product-content">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                                <div class="product-detail">
                                    <div class="clients-detail">
                                        <a href="{{route('blog.show',$post->slug)}}"> <img src="{{asset('storage/' . $post->main_image)}}" alt="{{$post->image_alt}}"> </a>
                                    </div>
                                    <div class="btn-card">
                                        <a href="{{route('blog.categories',$post->category->slug)}}" class="view-btn">{{$post->category_name}}</a>
                                    </div>
                                    <a href="{{route('blog.show',$post->slug)}}">
                                        <h3 class="block-title">{{$post->title}}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{$posts->onEachSide(3)->links()}}
        </div>
    </section>


@endsection
