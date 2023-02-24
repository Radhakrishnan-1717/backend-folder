@extends('layouts.index')

@section('title', 'service-page')

@section('description', 'laravel service page')

@section('keywords', 'laravel static service page')

    <div class="container text-center">
        <h1>service-page</h1>
    </div>


    @section('content')
        
    <div class="container-fluid ft">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore optio repellendus, aspernatur iusto
                    nisi distinctio dicta asperiores temporibus illum nesciunt non beatae quidem assumenda molestias
                    libero ex ab dolorem sint impedit repudiandae eius fugit odio rerum ad! Consequuntur suscipit ipsum
                    corrupti! Placeat ipsa officia quod vel corrupti aliquid. Doloribus sapiente praesentium a
                    blanditiis aliquid? Deleniti labore, explicabo cum error corporis nisi enim excepturi pariatur
                    accusamus neque laudantium. Provident facilis molestiae nihil quod doloremque voluptates totam quo
                    rerum aut sint esse voluptatem ducimus excepturi, nulla distinctio quos libero minima minus expedita
                    voluptas saepe incidunt dolores. Modi odio itaque et autem totam.</p>
            </div>
            <div class="col-md-4 p-2 text-center">
                <img class="rounded-4" src="https://via.placeholder.com/250x200" alt="">
            </div>
        </div>
    </div>


    <div class="lightbox-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Gallery-box</h2>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                <div class="mt-2 col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                <div class="mt-2 col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                <div class="mt-2 col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                <div class="mt-2 col-sm-6 col-md-4 col-lg-3 item rounded-5"><a href="https://via.placeholder.com/250x200" data-lightbox="photos"><img class="img-fluid" src="https://via.placeholder.com/250x200"></a></div>
                </div>
        </div>
    </div>


    @endsection