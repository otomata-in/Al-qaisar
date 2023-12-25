@extends('layouts.app')

@section('content')
<br>
<br>
<div id="colorlib-about">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-6 animate-box">
                <div class="about-desc">
                    <h3><b>About AL-QAISAR</b></h3>
                    <p>AL-QAISAR is an Engineering, Trading & Construction company well established and operating in qatar providing detailed engineering, construction, networking, electrical designing, automation operation and maintenance services in Qatar.</p>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="fancy-collapse-panel">
             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Who we are
                                   </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                   <p>We are a company committed to providing high-quality products and services to our customers. Our team is composed of talented and dedicated professionals who strive to deliver innovative solutions and exceed customer expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                   <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What we do?
                                   </a>
                                </h4>
                            </div>
                             <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                   <p>Our company operates in a dynamic and competitive industry, and we stay at the forefront by constantly adapting to emerging trends and technologies. We prioritize continuous learning and development to ensure that our team remains up-to-date with the latest advancements and can deliver cutting-edge solutions.</p>
                                 </div>
                            </div>
                        </div>
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                         <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Why Choose us
                         </a>
                         </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                         <div class="panel-body">
                         <p>Because our company is defined by its people, values, and commitment to delivering exceptional products and services. We are dedicated to building long-term relationships with our customers and being a trusted partner in their success.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
            </div>
        </div>
    </div>
</div>


@endsection
