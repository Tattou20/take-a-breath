@extends('template')

@section('content')

<br/>
<br/>
<br/>
<br/>
<br/>
<div class="blue_violet_background"></div>
<h1 id="h1-heroe-main" style="color: #ffffff;">Popular services </h1>
<div id="div-popular-services" style="margin: 20px;">
<div class="blob" id="div-home">
        </div>
    <ul>
        <li><a href="plumbing">
        <img src="{{ asset('img/plumbing.jpg') }}" alt="Plumbing" style=" height: 180px; width: 200px;">
        Plumbing</a> </li>
        <li><a href="Electrician">
        <img src="{{ asset('img/electrician.jpg') }}" alt="Electrician" style="height: 180px; width: 200px;">
        Electrician</a> </li>
        <li><a href="cleaning">
        <img src="{{ asset('img/cleaning.jpg') }}" alt="Cleaning" style="height: 180px; width: 200px;">
        Cleaning</a> </li>
        <li><a href="Carpenter">
        <img src="{{ asset('img/carpenter.jpg') }}" alt="Carpenter" style="height: 180px; width: 200px;">
        Carpenter</a>
       </li>
        <li><a href="Babysitting">
        <img src="{{ asset('img/babysitting.jpg') }}" alt="Babysitting" style="height: 180px; width: 200px;">
        Babysitting</a>
      </li>
      <li><a href="Painter">
      <img src="{{ asset('img/painter.jpg') }}" alt="Painter" style="height: 180px; width: 200px;">
      Painter</a>
    </li>
    </ul>
</div>
<br/>

@endsection
