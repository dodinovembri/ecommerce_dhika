@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
    
</div>

@include('frontend.templates.header')


<!--blog body area start-->
<div class="blog_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!--blog grid area start-->
                <div class="blog_wrapper blog_wrapper_details">
                    <article class="single_blog">
                        <figure>
                           <div class="post_header">
                               <h3 class="post_title">{{ $blog->blog_title }}</h3>
                                <div class="blog_meta">   
                                   <p>Posted by : <a href="#">admin</a> / On : <a href="#">{{ $blog->blog_date }}</a></p>                                     
                                </div>
                            </div>
                            <div class="blog_thumb">
                               <a href="#"><img src="{{ asset(Storage::url('img/blog')) }}/{{ $blog->blog_image }}" alt=""></a>
                           </div>
                           <figcaption class="blog_content">
                                <div class="post_content">
                                    <blockquote>
                                        <p>{{ $blog->blog_blockquote }}</p>
                                    </blockquote>
                                    <p>{{ $blog->blog_description }}.</p>
                                </div>
                                <div class="entry_content">
                                    <div class="post_meta">
                                        <span>Tags: {{ $blog->blog_tag }}</span>
                                    </div>
                                </div>
                           </figcaption>
                        </figure>
                    </article>
                </div>
                <!--blog grid area start-->
            </div>
        </div>
    </div>
</div>
<!--blog section area end-->

@include('frontend.templates.footer')

@endsection