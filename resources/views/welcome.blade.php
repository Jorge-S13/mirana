@extends('layouts.app')

@section('content')

{{--  News  --}}
<section id="hero" class="pattern-blur">
    <div class="container ">
        <h2 class="section-title light text-center mt-5 pt-5">News</h2>
    </div>
</section>

<section id="blog" class="padding-large pt-5">
    <div class="container">
        <div class="product-content">
            <div class="row">
                @foreach($news as $new)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                            <div class="product-detail">
                                <div class="clients-detail">
                                    <a href="{{route('news.show',$new->slug)}}"> <img src="{{asset('storage/' . $new->main_image)}}" alt="{{$new->image_alt}}"> </a>
                                </div>
                                <div class="btn-card">
                                    <a href="{{route('news.categories',$new->category->slug)}}"
                                       class="view-btn">{{$new->category_name}}</a>
                                </div>
                                <a href="{{route('news.show',$new->slug)}}">
                                    <h3 class="block-title">{{$new->title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{--  News  --}}

{{--  Blog  --}}
    <section id="hero" class="pattern-blur">
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
                                        <a href="{{route('blog.categories',$post->category->slug)}}"
                                           class="view-btn">{{$post->category_name}}</a>
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
        </div>
    </section>
{{--  Blog  --}}

{{--  Reviews  --}}
<section id="hero" class="pattern-blur">
    <div class="container ">
        <h2 class="section-title light text-center mt-5 pt-5">Reviews</h2>
    </div>
</section>

<section id="blog" class="padding-large pt-5">
    <div class="container">
        <div class="product-content">
            <div class="row">
                @foreach($reviews as $review)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                            <div class="product-detail">
                                <div class="clients-detail">
                                    <a href="{{route('reviews.show',$review->slug)}}"> <img src="{{asset('storage/' . $review->main_image)}}" alt="{{$review->image_alt}}"> </a>
                                </div>
                                <div class="btn-card">
                                    <a href="{{route('reviews.categories',$review->category->slug)}}"
                                       class="view-btn">{{$review->category_name}}</a>
                                </div>
                                <a href="{{route('reviews.show',$review->slug)}}">
                                    <h3 class="block-title">{{$review->title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{--  Reviews  --}}

{{--  Hardware Hub  --}}
<section id="hero" class="pattern-blur">
    <div class="container ">
        <h2 class="section-title light text-center mt-5 pt-5">Hardware Hub</h2>
    </div>
</section>

<section id="blog" class="padding-large pt-5">
    <div class="container">
        <div class="product-content">
            <div class="row">
                @foreach($hardwares as $hardware)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                            <div class="product-detail">
                                <div class="clients-detail">
                                    <a href="{{route('hardware.show',$hardware->slug)}}"> <img src="{{asset('storage/' . $hardware->main_image)}}" alt="{{$hardware->image_alt}}"> </a>
                                </div>
                                <div class="btn-card">
                                    <a href="{{route('hardware.categories',$hardware->category->slug)}}"
                                       class="view-btn">{{$hardware->category_name}}</a>
                                </div>
                                <a href="{{route('hardware.show',$hardware->slug)}}">
                                    <h3 class="block-title">{{$hardware->title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{--  Hardware Hub  --}}

{{--Top Picks--}}
<section id="hero" class="pattern-blur">
    <div class="container ">
        <h2 class="section-title light text-center mt-5 pt-5">Top Picks</h2>
    </div>
</section>

<section id="blog" class="padding-large pt-5">
    <div class="container">
        <div class="product-content">
            <div class="row">
                @foreach($topPicks as $topPick)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                            <div class="product-detail">
                                <div class="clients-detail">
                                    <a href="{{route('top-picks.show',$topPick->slug)}}"> <img src="{{asset('storage/' . $topPick->main_image)}}" alt="{{$topPick->image_alt}}"> </a>
                                </div>
                                <div class="btn-card">
                                    <a href="{{route('top-picks.categories',$topPick->category->slug)}}"
                                       class="view-btn">{{$topPick->category_name}}</a>
                                </div>
                                <a href="{{route('top-picks.show',$topPick->slug)}}">
                                    <h3 class="block-title">{{$topPick->title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{--Top Picks--}}

{{--Affiliate links--}}
<section id="hero" class="pattern-blur">
    <div class="container ">
        <h2 class="section-title light text-center mt-5 pt-5">Affiliate links</h2>
    </div>
</section>

<section id="blog" class="padding-large pt-5">
    <div class="container">
        <div class="product-content">
            <div class="row">
                @foreach($affilates as $affilate)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                            <div class="product-detail">
                                <div class="clients-detail">
                                    <a href="{{route('affiliate-links.show',$affilate->slug)}}"> <img src="{{asset('storage/' . $affilate->main_image)}}" alt="{{$affilate->image_alt}}"> </a>
                                </div>
                                <div class="btn-card">
                                    <a href="{{route('affiliate-links.categories',$affilate->category->slug)}}"
                                       class="view-btn">{{$affilate->category_name}}</a>
                                </div>
                                <a href="{{route('affiliate-links.show',$affilate->slug)}}">
                                    <h3 class="block-title">{{$affilate->title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{--Affiliate links--}}


@endsection
