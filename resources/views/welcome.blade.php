@extends('layouts.app')
@section('content')
    <div class="py-5 bg-primary text-white">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="display-4">Strategic Solutions for Business Growth</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="d-flex gap-3 mt-5">
                            <a href="#consultation" class="btn btn-light btn-lg text-primary">Get a Free Consultation</a>
                            <a href="#services" class="btn btn-outline-light btn-lg">Our Services</a>
                        </div>
                        <div class="hero-stats d-flex gap-2 my-5" >
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0"
                                          class="purecounter">15</span>+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="500"
                                          data-purecounter-duration="0" class="purecounter">500</span>+</h3>
                                <p>Clients Worldwide</p>
                            </div>
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="0"
                                          class="purecounter">98</span>%</h3>
                                <p>Success Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image aos-init aos-animate" data-aos="zoom-out" data-aos-delay="300">
                        <img src="https://bootstrapmade.com/content/demo/Consulting/assets/img/about/about-21.webp"
                             alt="Consulting Services" class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
