@extends('main-system.layouts.master')
@section('title') @endsection
@section('head')
<link rel="stylesheet" href="{{ asset('css/main-system/frontmain.css') }}">
@endsection
@section('content')
<section class="banner">
    <div class="bannerimg22">
        <img src="{{ asset('images/main-system/bg2.png') }}" />
        <div class="description">
            <h3><span>THE POWER OF ONE</span></h3>
            <h2><span>PLATFORM</span></h2> 
            <p><span>Uncompromising distribution. Intelligent retailing. One platform.</span></p>
        </div>
    </div>
</section>

<section class="firstsection">
    <img class="circleimg" src="{{ asset('images/main-system/circle2.png') }}">
    <div class="container">
        <h6>Welcome to Sabre Hospitality Solutions.</h6>
        <hr class="underlinehr">
    <p> Our team is rooted in hospitality and technology fuels everything we do.
    We are powered by innovation with a relentless dedication to maximizing revenue for every hotelier.
     With the power of one platform, we are evolving the way people experience hospitality.</p>
  </div>
</section>

<section class="secondpart">
    <div class="container">
      <div class="flexbox reverseflex">
        <div class="descriptionbox">
            <h4 class="padright">The platform was born to evolve.</h4>
            <p class="padright">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padright"> <a href="#" class="learnmore">
                 Learn more about the platform
             </a></div>
        </div>
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>

    </div>

    <div class="flexbox">
       
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>
        <div class="descriptionbox">
            <h4 class="padleft">The platform was born to evolve.</h4>
            <p class="padleft">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padleft"><a href="#" class="learnmore">
                 Learn more about the platform
             </a></div>
        </div>

    </div>

    <div class="flexbox reverseflex">
        <div class="descriptionbox">
            <h4 class="padright">The platform was born to evolve.</h4>
            <p class="padright">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padright"><a href="#" class="learnmore">
                 Learn more about the platform
             </a></div> 
        </div>
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>
    
    </div>
</div>
</section>

<section class="tabsection">
    <div class="container">
        <h4>  Increase revenue while enhancing the guest 
            experience with solutions that span the entire journey. </h4>
            <div class="w3-bar">
                <button class="w3-bar-item w3-button tablink w3-blu" onclick="openCity(event,'Research')"><i class='fas fa-search icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Shop')"><i class='fas fa-shopping-cart icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Pretrip')"><i class='fas fa-briefcase icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Instay')"><i class='fas fa-building icontext'></i></button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Poststay')"><i class='fas fa-phone icontext'></i></button>
              </div>
              
              <div id="Research" class="w3-container city mainpart">
                <h3>Research</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
               <div class="first">
            <p> Travel planning habits are constantly evolving.
                 Be found when travelers are researching for properties like yours.</p>
                </div>
                <div class="second">
             <ul>
                <li>Booking Engine</li>
                <li>Digital Experience</li>
                <li>GDS Media</li>
                <li>Guest Experience</li>
                <li>Voice Agent  </li>  
            </ul>
            </div>
        </div>
              </div>
            
              <div id="Shop" class="w3-container city mainpart" style="display:none">
                <h3>Shop & Book</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                    <div class="first">
                <p>Convert guests by truly understanding them and leverage
                 available guest data to improve booking revenue potential</p>
                </div>
                <div class="second">
             <ul>
                <li>Booking Engine</li>
                <li>Central Reservations</li>
                <li>Digital Experience</li>
                <li>Hotel RFP</li>
            </ul>
              </div>
              </div>
              </div>
            
              <div id="Pretrip" class="w3-container city mainpart" style="display:none">
                <h3>Pre-trip</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                <div class="first">
                <p>Enhance the customer experience before arrival to ensure maximum profitability, 
                deeper engagement, and stronger brand association.</p>
                </div>
                <div class="second">
                    <ul>
                <li>Ancillary Booking Engine</li>
                <li>Booking Engine</li>
                <li>Guest Experience</li>
                <li>Voice Agent</li>
            </ul>
              </div>
              </div>
              </div>

              <div id="Instay" class="w3-container city mainpart" style="display:none">
                <h3>In-stay</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                    <div class="first">
                <p>Give your guests more personalized service with 
                products that go beyond operational efficiency.</p>
                </div>
                <div class="second">
                <ul>
                <li>Guest Experience</li>
                <li>Property Hub</li>
                 </ul>
              </div>
                </div>
              </div>

              <div id="Poststay" class="w3-container city mainpart" style="display:none">
                <h3>Post-stay</h3>
                <hr class="underlinehr2">
                <div class="flexpart">
                    <div class="first">
                <p>Engage with guests after their stay with personalized offers and messages, 
                based on their preferences, demographics, and purchase history.</p>
                </div>
                <div class="second">
                <ul>
                <li>Central Reservations</li>
                <li>Guest Experience</li>
                <li>Performance Insights</li>
                <li>Retailing Insights</li>
               </ul>
              </div>
            </div>
            </div>

           
            
    </div>
</section>
<section class="secondpart">
    <div class="container">
      <div class="flexbox">
       
        <div class="imgbox">
            <img src="{{ asset('images/main-system/image22.jpg') }}" />
        </div>
        <div class="descriptionbox">
            <h4 class="padleft">We don’t have customers. We have a community.</h4>
            <p class="padleft">The platform was built with evolution in mind, 
            allowing hoteliers to see the big picture when it comes to their business. 
            That means no more siloed or duplicated data and
             the ability to optimize revenue efficiently across all channels.</p>
             <div class="padleft"><a href="#" class="learnmore">
                 See the wins
             </a></div>
        </div>

    </div>
  </div>
</section>

@endsection


  

  