@extends('layouts.app')

@section('content')
<br>
<br>
<div id="colorlib-services">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
				<h2><b>Services</b></h2>
				<!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p> -->
			</div>
		</div>
	

  <div class="row">
  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
        <i class="flaticon-engineer"></i>
      </span>
      <div class="desc">
        <h3>ELECTRICAL LOW VOLTAGE WORK</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Electrical Low Voltage Work. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
        <i class="flaticon-engineering"></i>
      </span>
      <div class="desc">
        <h3>ELECTRICAL DESIGNING</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Electrical Designing. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
        <i class="flaticon-skyline"></i>
      </span>
      <div class="desc">
        <h3>CIVIL CONSTRUCTION</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Industrial Wiring. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
        <i class="flaticon-crane"></i>
      </span>
      <div class="desc">
        <h3>BUILDING AUTOMATION</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Building Automation. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
        <i class="flaticon-sketch"></i>
      </span>
      <div class="desc">
        <h3>CCTV NETWORKING</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for CCTV Networking. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
        <i class="flaticon-conveyor"></i>
      </span>
      <div class="desc">
        <h3>FIRE ALARM</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Fire Alarm. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
       <i class="flaticon-engineer"></i>
      </span>
      <div class="desc">
        <h3>FIRE FIGHTING</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Fire Fighting. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
       <i class="flaticon-conveyor"></i>
      </span>
      <div class="desc">
        <h3>PLUMBING</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Plumbing. Make content here.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 text-center animate-box">
    <div class="services">
      <span class="icon">
       
       <i class="flaticon-engineer"></i>
      </span>
      <div class="desc">
        <h3>INDUSTRIAL WIRING</h3>
      </div>
      <!-- Add the new layer with text content -->
      <div class="hover-layer">
        <p>This is the text content displayed on hover for Civil Construction. Make content here.</p>
      </div>
    </div>
  </div>
</div>
	</div>
</div>



<div id="colorlib-subscribe">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
				<h2>Indention</h2>
				Our indention is to provide quality and timebounded services with valuable cost.
			</div>
		</div>

	</div>
</div>
<style>
  /* Hide the new layer by default */
  .services .hover-layer {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9); /* White background with some transparency */
    color: #333; /* Text color */
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s;
    z-index: 1;
    /* Use flexbox to center the content vertically and horizontally */
    display: flex;
    align-items: center;
    justify-content: center;
    /* Add some rounded corners */
    border-radius: 5px;
  }

  /* Show the new layer on hover */
  .services:hover .hover-layer {
    opacity: 1;
    background-color: rgba(255, 255, 255, 1); /* Fully opaque white background on hover */
  }

  /* Add some padding and adjust font size for better visual appearance */
  .services .hover-layer p {
    padding-top: 20px; /* Add additional padding to the top */
    padding-bottom: 20px; /* Add additional padding to the bottom */
    padding: 10px;
    font-size: 16.5px;
    line-height: 1.6; /* Increase line height for better readability */
    max-width: 300px; /* Limit the width of the text content */
    text-align: justify; /* Justify the text */
     color: #21201f;
  }

  .services {
    position: relative; /* Make sure it's positioned relative for the hover layer to work */
    transition: transform 0.2s ease-in-out;
  }

  .services:hover {
    transform: scale(1.05); /* Scale up the element slightly on hover */
  }
</style>





@endsection