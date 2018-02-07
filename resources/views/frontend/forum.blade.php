@extends('frontend.app')
<div role="main" class="main">

        <section class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Large Image</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts">

                        @foreach ($anabasliklar as $anabaslik)
                            
                        

                        <article class="post post-large">
                            <div class="post-image">
                                <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                    <div>
                                        <div class="img-thumbnail">
                                            <img class="img-responsive" src="img/blog/blog-image-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="img-thumbnail">
                                            <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-date">
                                <span class="day">10</span>
                                <span class="month">Jan</span>
                            </div>

                            <div class="post-content">

                                <h2><a href="forum/{{ $anabaslik->slug }}">{{ $anabaslik->baslik }}</a></h2>
                                <p>{{ $baslik->kisa_aciklama }}</p>

                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                    <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                </div>

                            </div>
                        </article>

                        @endforeach

                        <ul class="pagination pagination-lg pull-right">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>

                    </div>
                </div>

                @include('frontend.forum-sidebar')
                
            </div>

        </div>

    </div>
@section('icerik')

@endsection

@section('js')
@endsection

@section('css')
@endsection