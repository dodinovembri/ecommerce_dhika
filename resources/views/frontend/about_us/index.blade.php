@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
    
</div>

@include('frontend.templates.header')

<!--about section area -->
<section class="about_section"> 
   <div class="container">
        <div class="row">
            <div class="col-12">
               <figure>
                    <div class="about_thumb">
                        <img src="{{ asset(Storage::url('img/about_us')) }}/{{ $about_us->about_us_image }}" alt="">
                    </div>
                    <figcaption class="about_content">
                        <h1>{{ $about_us->about_us_title }}</h1>
                        <p>{{ $about_us->about_us_description }}.</p>
                        <div class="about_signature">
                            <img src="assets/img/about/about-us-signature.png" alt="">
                        </div>
                    </figcaption>
                </figure>
            </div>    
        </div>  
    </div> 
</section>
<!--about section end-->

@include('frontend.templates.footer')

@endsection