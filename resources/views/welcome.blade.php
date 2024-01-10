@extends('layouts.app')

@section('content')


<section id="hero" class="pattern-blur">
    <div class="pattern-overlay pattern-blur-right right-side-pattern">
        <img src="{{asset('images/pattern-blur-right.png')}}" alt="">
    </div>
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
                                    <a href="{{route('post.show',$post->slug)}}"> <img src="{{asset('storage/' . $post->main_image)}}" alt="clients"> </a>
                                </div>
                                <div class="btn-card">
                                    <a href="#" class="view-btn">{{$post->category->name}}</a>
                                </div>
                                <a href="{{route('post.show',$post->slug)}}">
                                    <h3 class="block-title">{{$post->title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5 ">
            <ul class="pagination">
                <li class="page-item mx-2">
                    <a class="page-link" href="#" aria-label="Previous">
                        <iconify-icon icon="ic:baseline-keyboard-arrow-left"
                                      class="pagination-arrow"></iconify-icon>
                    </a>
                </li>
                <li class="page-item mx-2 active" aria-current="page"><a class="page-link" href="#">1</a>
                </li>
                <li class="page-item mx-2"><a class="page-link" href="#">2</a></li>
                <li class="page-item mx-2"><a class="page-link" href="#">3</a></li>
                <li class="page-item mx-2">
                    <a class="page-link active" href="#" aria-label="Next">
                        <iconify-icon icon="ic:baseline-keyboard-arrow-right"
                                      class="pagination-arrow"></iconify-icon> </a>
                </li>
            </ul>
        </nav>
    </div>
</section>


@endsection
