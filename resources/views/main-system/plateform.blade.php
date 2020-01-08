@extends('main-system.layouts.master')

@section('content')

<section class="platbanner"> 
        <div class="platbannerimg">
            <img src="{{ asset('images/main-system/bannerimage.jpg') }}">
            <h1><span>We are the tech partner hoteliers rely on to optimize distribution and deliver 
            millions of personalized experiences that maximize revenue with one hospitality platform. </span></h1>
        </div>
    </section>

    <section class="alternatesection container">
        <div class="flexsection">
            <div class="imgpart">
                <img src="{{ asset('images/main-system/hotel1.jpg') }}" />
            </div>
            <div class="contentpart">
                <h3 class="padleft">A singular view of inventory, pricing and guest data.</h3>
                <hr class="padleft">
                <p class="padleft"> The Bookevent platform is an ecosystem of integrated solutions that all talk to each other.
                     No matter where a booking is made, 
                    you always have one true view of inventory and guest data with real-time synchronization.</p>
            </div>
        </div>
        <div class="flexsection colrev">
            <div class="contentpart">
                <h3 class="padright">More time to focus on your business and your guests.</h3>
                <hr class="padright">
                <p class="padright"> We focus on the technology so you don’t have to.
                     We’re constantly investing in our core – adding enhancements to current solutions and developing 
                     solutions for the future. The hospitality industry is always evolving and we believe your 
                     technology should too.</p>
            </div>
            <div class="imgpart">
                <img src="{{ asset('images/main-system/hotel5.jpg') }}" />
            </div>
        </div>
        <div class="flexsection">
            <div class="imgpart">
                <img src="{{ asset('images/main-system/hotel4.jpg') }}" />
            </div>
            <div class="contentpart">
                <h3 class="padleft">Compliant with data regulations, plus increased security and stability.</h3>
                <hr class="padleft">
                <p class="padleft"> Recent GDPR regulations have caused big changes in the ways companies use 
                    and store data. We are committed to providing technology that is stable, 
                    secure, and compliant with all current data standards and regulations.</p>
            </div>
        </div>
        <div class="flexsection colrev">
            <div class="contentpart">
                <h3 class="padright">More time to focus on your business and your guests.</h3>
                <hr class="padright">
                <p class="padright"> We focus on the technology so you don’t have to.
                     We’re constantly investing in our core – adding enhancements to current solutions and developing 
                     solutions for the future. The hospitality industry is always evolving and we believe your 
                     technology should too.</p>
            </div>
            <div class="imgpart">
                <img src="{{ asset('images/main-system/hotel6.jpg') }}" />
            </div>
        </div>
    </section>


@endsection