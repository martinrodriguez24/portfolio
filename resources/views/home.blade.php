@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('title')
martinrr.dev
@endsection

@section('content')
<section class="landing">
    <div class="content">
        <h1>MARTIN RISTOFF<br>WEB DEVELOPER</h1>
        <p>lorem ipsum dolor sit atmen lorem ipsum dolor sit atmen lorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmen lorem ipsum dolor sit atmen lorem ipsum dolor sit atmenlorem ipsum dolor sit atmen</p>
        <div class="call-to-action flex-row">
            <a href=""><button class="button button-dark">CONTACT</button></a>
            <a href=""><button class="button button-light">SERVICES</button></a>
        </div>
    </div>
</section>

<section class="services-i-offer">
    <div class="text">
        <h2>services i offer</h2>
        <a href=""><button class="button button-light">let's talk</button></a>
    </div>
    <div class="services">
        <div class="service">
            <h3>Web development</h3>
            <p>Lorem ipsum dolor sit amet consectetur. Odio cras enim blandit ultricies mollis.Lorem ipsum dolor sit amet consectetur. Odio cras enim blandit ultricies mollis.</p>
        </div>

        <div class="service">
            <h3>Website deployment</h3>
            <p>Lorem ipsum dolor sit amet consectetur. Odio cras enim blandit ultricies mollis.Lorem ipsum dolor sit amet consectetur. Odio cras enim blandit ultricies mollis.</p>
        </div>

        <div class="service">
            <h3>Low-cost maintain</h3>
            <p>Lorem ipsum dolor sit amet consectetur. Odio cras enim blandit ultricies mollis.Lorem ipsum dolor sit amet consectetur. Odio cras enim blandit ultricies mollis.</p>
        </div>
    </div>
</section>

<section class="my-work">
    <h2>my work</h2>

    <div class="work">
        <img src="{{ asset('media/spider.jpeg') }}" alt="image">
        <div class="content">
            <div>
                <h3>work title</h3>
                <p>lorem ipsum dolor sit atmen lorem ipsum dolor sit atmen lorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmen</p>
                <a href=""><button class="button button-light">See more</button></a>
            </div>
        </div>
    </div>

    <div class="work">
        <img src="{{ asset('media/spider.jpeg') }}" alt="image">
        <div class="content">
            <div>
                <h3>work title</h3>
                <p>lorem ipsum dolor sit atmen lorem ipsum dolor sit atmen lorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmen</p>
                <a href=""><button class="button button-light">See more</button></a>
            </div>
        </div>
    </div>

    <div class="work">
        <img src="{{ asset('media/spider.jpeg') }}" alt="image">
        <div class="content">
            <div>
                <h3>work title</h3>
                <p>lorem ipsum dolor sit atmen lorem ipsum dolor sit atmen lorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmenlorem ipsum dolor sit atmen</p>
                <a href=""><button class="button button-light">See more</button></a>
            </div>
        </div>
    </div>


</section>
@endsection