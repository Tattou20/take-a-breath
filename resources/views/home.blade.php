@extends('template')

@section('content')
<div class="container my-4">
<div class="blue_violet_background"></div>
    <main >
        <div class="blob" id="div-home">
        </div>
        <section id="hero">
            <h2>
                Welcome to
            </h2>
            <h1>TakeAbreath</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search..."><br><br>

            </div>

          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
          <!-- <h1 id="h1-heroe-main" style="color: #ffffff;"> Popular Services </h1> -->

<div id="div-popular-services" style="margin: 20px;">

    <ul id="div-popular-services-list" >

        <li><a href="all-services">
        <img src="{{ asset('img/plumbing.jpg') }}" alt="Plumbing" style=" height: 180px; width: 200px;">
        Plumbing</a> </li>
        <li><a href="all-services">
        <img src="{{ asset('img/electrician.jpg') }}" alt="Electrician" style="height: 180px; width: 200px;">
        Electrician</a> </li>
        <li><a href="all-services">
        <img src="{{ asset('img/cleaning.jpg') }}" alt="Cleaning" style="height: 180px; width: 200px;">
        Cleaning</a> </li>
        <li><a href="all-services">
        <img src="{{ asset('img/carpenter.jpg') }}" alt="Carpenter" style="height: 180px; width: 200px;">
        Carpenter</a>
       </li>
        <li><a href="all-services">
        <img src="{{ asset('img/babysitting.jpg') }}" alt="Babysitting" style="height: 180px; width: 200px;">
        Babysitting</a>
      </li>
      <li><a href="all-services">
      <img src="{{ asset('img/painter.jpg') }}" alt="Painter" style="height: 180px; width: 200px;">
      Painter</a>
    </li>
    </ul>
</div>
<br/>
        
            
            
        </section>


        
        <section id="hero-main">

        
        <h1 id="h1-heroe-main">How it works? </h1>
        <div class="div-about" id="div-about">

        </div>
        <h1 id="h1-heroe-main">Explore services</h1>
        <div>
       
        </div>
        <h1 id="h1-heroe-main">Want to start working?</h1>
        <div>
       
        </div>
    </section>

    </main>


 
  
</div>
@endsection
