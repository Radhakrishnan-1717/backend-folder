@extends('layouts.index')

@section('title', 'contact-page')

@section('description', 'laravel contact page')

@section('keywords', 'laravel static contact page')

    <div class="container text-center">
        <h1>contact-page</h1>
    </div>

@section('content')
    
    <div class="container mt-5 text-center">
        <div class="services-container pt-2 row ">
            <div class="service col-md-4 col-sm-6 col-8 col-lg-4 ">
                <div class="">
                    <img class="rounded-5" src="https://via.placeholder.com/150x150" alt="">
                </div>
                <h2 class="mt-3">Address</h2>
            </div>
            <div class="service col-md-4 col-sm-6 col-8 col-lg-3">
                <div class="">
                    <img class="rounded-5" src="https://via.placeholder.com/150x150" alt="">
                </div>
                <h2 class="mt-3">E-mail</h2>

            </div>
            <div class="service col-md-4 col-sm-6 col-8 col-lg-4 ">
                <div class="">
                    <img class="rounded-5" src="https://via.placeholder.com/150x150" alt="">
                </div>
                <h2 class="mt-3">Phone-number</h2>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa reiciendis quidem placeat praesentium. Aliquam
            deleniti iusto nobis, est mollitia minima modi veritatis. Quisquam culpa, illo laboriosam harum expedita libero
            iusto quis itaque! Fugit voluptas reiciendis expedita culpa animi accusantium cum odit tempore beatae, quasi
            neque dolor hic itaque error laborum.
        </p>
    </div>

    @endsection