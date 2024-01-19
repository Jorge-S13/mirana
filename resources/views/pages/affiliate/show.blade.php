@extends('layouts.app', ['$post' => $post])

@section('content')
    <section id="hero" class="pattern-blur">
{{--        <div class="pattern-overlay pattern-blur-right right-side-pattern">--}}
{{--            <img src="{{asset('images/pattern-blur-right.png')}}" alt="">--}}
{{--        </div>--}}
        <div class="container ">
            <h2 class="section-title light text-center mt-5 pt-5">{{$post->title}}</h2>
        </div>
    </section>

    <div class="post-wrap py-5 no-padding-bottom">
        <div class="container">
            <div class="row g-5 mt-4">
                <main class="post-grid col-md-9">
                    <div class="row">
                        <article class="post-item">
                            <p>{{$post->posted_at->format('d M, Y')}} <span><a href="{{route('affiliate-links.categories',$post->category->slug)}}" class="view-btn">{{$post->category->name}}</a></span></p>
                            <div class="hero-image">
                                <img src="{{asset('storage/' . $post->main_image)}}" alt="{{$post->image_alt}}" class="img-fluid">
                            </div>
                            <div class="post-content py-5">
                                <div class="post-description">
                                    {!!$post->content!!}
                                </div>
                            </div>
                        </article>

{{--                        <section id="post-comment">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row my-5">--}}
{{--                                    <div class="comments-wrap">--}}
{{--                                        <h3 class="block-title">3 comments </h3>--}}

{{--                                        <div class="comment-list">--}}
{{--                                            <article class="comment-item bg-blue-trans my-3 rounded-3 p-3 row">--}}
{{--                                                <div class="col-md-2 mb-3">--}}
{{--                                                    <img src="{{asset('images/clients-item-lg2.jpg')}}" alt="default"--}}
{{--                                                         class="commentor-image img-fluid rounded-circle">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-10">--}}
{{--                                                    <div class="author-post ">--}}
{{--                                                        <div--}}
{{--                                                            class="comment-meta text-uppercase d-flex gap-3 text-black">--}}
{{--                                                            <h3 class="author-name block-title text-light">Lufy carlson--}}
{{--                                                            </h3>--}}
{{--                                                            <span class="meta-date text-light">Jul 10</span>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="m-0">Tristique tempis condimentum diam done--}}
{{--                                                            ullancomroer sit element henddg sit he--}}
{{--                                                            consequert.Tristique tempis condimentum diam done--}}
{{--                                                            ullancomroer sit element henddg sit he--}}
{{--                                                            consequert.</p>--}}
{{--                                                        <a href="#" class="view-btn">Reply</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </article>--}}
{{--                                            <blockquote class="ms-0 ms-md-5 my-5 p-0">--}}
{{--                                                <article class="comment-item bg-blue-trans ms-2 ms-md-5 rounded-3 p-3 row">--}}
{{--                                                    <div class="col-md-2 mb-3">--}}
{{--                                                        <img src="{{asset('images/clients-item-lg3.jpg')}}" alt="default"--}}
{{--                                                             class="commentor-image img-fluid rounded-circle">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-10">--}}
{{--                                                        <div class="author-post ">--}}
{{--                                                            <div--}}
{{--                                                                class="comment-meta text-uppercase d-flex gap-3 text-black">--}}
{{--                                                                <h3 class="author-name block-title text-light">Lufy--}}
{{--                                                                    carlson--}}
{{--                                                                </h3>--}}
{{--                                                                <span class="meta-date text-light">Jul 10</span>--}}
{{--                                                            </div>--}}
{{--                                                            <p class="m-0">Tristique tempis condimentum diam done--}}
{{--                                                                ullancomroer sit element henddg sit he--}}
{{--                                                                consequert.Tristique tempis condimentum diam done--}}
{{--                                                                ullancomroer sit element henddg sit he--}}
{{--                                                                consequert.</p>--}}
{{--                                                            <a href="#" class="view-btn">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </blockquote>--}}

{{--                                            <article class="comment-item bg-blue-trans my-3 rounded-3 p-3 row">--}}
{{--                                                <div class="col-md-2 mb-3">--}}
{{--                                                    <img src="{{asset('images/clients-item-lg4.jpg')}}" alt="default"--}}
{{--                                                         class="commentor-image img-fluid rounded-circle">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-10">--}}
{{--                                                    <div class="author-post ">--}}
{{--                                                        <div--}}
{{--                                                            class="comment-meta text-uppercase d-flex gap-3 text-black">--}}
{{--                                                            <h3 class="author-name block-title text-light">Lufy carlson--}}
{{--                                                            </h3>--}}
{{--                                                            <span class="meta-date text-light">Jul 10</span>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="m-0">Tristique tempis condimentum diam done--}}
{{--                                                            ullancomroer sit element henddg sit he--}}
{{--                                                            consequert.Tristique tempis condimentum diam done--}}
{{--                                                            ullancomroer sit element henddg sit he--}}
{{--                                                            consequert.</p>--}}
{{--                                                        <a href="#" class="view-btn">Reply</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </article>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}

{{--                        <section id="reply" class="padding-small">--}}
{{--                            <h2 class="section-title light">Leave A Reply</h2>--}}
{{--                            <p>Have a comment?</p>--}}


{{--                            <form id="form1" class="form-group flex-wrap ">--}}
{{--                                <div class="form-input ">--}}


{{--                                    <input type="text" id="exampleFormControlInput1" name="email"--}}
{{--                                           placeholder="Your full name"--}}
{{--                                           class="form-control bg-blue-trans placeholder-color p-4 mb-3">--}}


{{--                                    <input type="text" id="exampleFormControlInput2" name="email"--}}
{{--                                           placeholder="Your email address"--}}
{{--                                           class="form-control bg-blue-trans placeholder-color p-4 mb-3">--}}

{{--                                    <input type="text" id="exampleFormControlInput3" name="email"--}}
{{--                                           placeholder="Your website"--}}
{{--                                           class="form-control bg-blue-trans placeholder-color p-4 mb-3">--}}

{{--                                    <textarea class="form-control bg-blue-trans placeholder-color p-4 mb-3 pb-5"--}}
{{--                                              id="exampleFormControlTextarea1" placeholder="Your Comment"--}}
{{--                                              row="4"></textarea>--}}

{{--                                    <a href="#" class="btn btn-linear btn-medium">Comment </a>--}}



{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </section>--}}

                    </div>
                </main>
                <aside class="col-md-3">
                    <div class="post-sidebar">
                        <div class="widget mb-5">
                            <h3 class="block-title">Categories</h3>
                            <ul class="list-unstyled bg-blue-trans p-3 rounded-3">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('affiliate-links.categories',$category->slug)}}" class="item-anchor">{{$category->name}}</a>
                                    </li>
                                    <hr class="m-0 mb-1">
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget mb-5">
                            <h3 class="block-title">Recent Post</h3>
                            <ul class="list-unstyled bg-blue-trans p-3 rounded-3">
                                @foreach($recentPosts as $recentPost)
                                    <li>
                                        <a href="{{route('affiliate-links.categories',$recentPost->category->slug)}}" class="view-btn">{{$recentPost->category->name}}</a>
                                        <a href="{{route('affiliate-links.show',$recentPost->slug)}}"> <h3 class="block-title fs-6">{{$recentPost->title}}</h3> </a>
                                    </li>
                                    <hr class="m-0 mb-1">
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h3 class="block-title">Tags</h3>
                            <ul class="list-unstyled d-flex flex-wrap gap-2 bg-blue-trans p-3 rounded-3">
                                <li>
                                    @foreach($post->tags()->get() as $tag)
                                        <a href="{{route('affiliate-links.tags',$tag->slug)}}" class="fs-6">{{ $tag->name . ',' }}</a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>


                    </div>
                </aside>
            </div>
        </div>
    </div>

    <section id="blog" class="padding-large">
        <div class="container">
            <div class="row ">

                <h2 class="section-title light mb-4">Related Posts</h2>

                <div class="product-content">
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                            <div class="col-md-3 col-sm-6">
                                <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                                    <div class="product-detail">
                                        <div class="clients-detail">
                                            <a href="{{route('affiliate-links.show',$relatedPost->slug)}}"> <img src="{{asset('storage/' . $relatedPost->main_image)}}" alt="clients"> </a>
                                        </div>
                                        <div class="btn-card">
                                            <a href="{{route('affiliate-links.categories',$relatedPost->category->slug)}}" class="view-btn">{{$relatedPost->category->name}}</a>
                                        </div>
                                        <a href="{{route('affiliate-links.show',$relatedPost->slug)}}">
                                            <h3 class="block-title">{{$relatedPost->title}}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
