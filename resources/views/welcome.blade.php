@extends('layouts.app')

@section('content')

    <section class="bg-primary text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12">
                <!-- Text Content -->
                <div class="lg:w-1/2" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-4xl lg:text-5xl  font-bold mb-6 font-display">
                        Ensuring Safety and Engineering Excellence in Kigali
                    </h2>
                    <p class="text-lg leading-relaxed mb-8">
                        Your trusted partner for comprehensive fire safety, structural integrity, and specialized engineering solutions.
                        We are a team of highly skilled professionals who are dedicated to providing you with the best services.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="#consultation"
                           class="bg-white text-primary font-semibold py-3 px-6 rounded-lg text-center shadow-md hover:bg-gray-100 transition duration-300"
                           aria-label="Get a free consultation">
                            Get a Quote
                        </a>
                        <a href="#services"
                           class="border border-white text-white font-semibold py-3 px-6 rounded-lg text-center hover:bg-white hover:text-primary transition duration-300">
                            Explore Our Services
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="flex gap-8 mt-6">
                        <div class="text-center">
                            <h3 class="text-3xl font-bold">
                                <span class="purecounter" data-purecounter-start="0" data-purecounter-end="15"
                                      data-purecounter-duration="0">15</span>+
                            </h3>
                            <p class="text-sm mt-1">Years Experience</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-3xl font-bold">
                                <span class="purecounter" data-purecounter-start="0" data-purecounter-end="500"
                                      data-purecounter-duration="0">500</span>+
                            </h3>
                            <p class="text-sm mt-1">Clients Worldwide</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-3xl font-bold">
                                <span class="purecounter" data-purecounter-start="0" data-purecounter-end="98"
                                      data-purecounter-duration="0">98</span>%
                            </h3>
                            <p class="text-sm mt-1">Success Rate</p>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="lg:w-1/2" data-aos="zoom-out" data-aos-delay="300">
                    <img
                        loading="lazy"
                        src="https://bootstrapmade.com/content/demo/Consulting/assets/img/about/about-21.webp"
                        alt="Consulting Services"
                        class="rounded-xl shadow-sm"
                    >
                </div>
            </div>
        </div>
    </section>

{{--    Section 1: Our Core Expertise--}}
    <section id="services" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-3xl font-bold mb-12">Our Core Expertise</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold">Fire Safety</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We have extensive experience in fire safety and firefighting, including fire detection, suppression, and response.
                    </p>
                    <a href="#" class="text-primary font-semibold hover:text-gray-700 transition duration-300">Learn More</a>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold">Structural Integrity</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We have extensive experience in structural integrity, including design, construction, and rehabilitation.
                    </p>
                    <a href="#" class="text-primary font-semibold hover:text-gray-700 transition duration-300">Learn More</a>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold">Engineering Services</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We offer a range of engineering services, including design, construction, and rehabilitation.
                    </p>
                    <a href="#" class="text-primary font-semibold hover:text-gray-700 transition duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </section>
{{--    Section 2: Why Choose Safety Necessary Group LTD?--}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-3xl font-bold mb-12">Why Choose Safety Necessary Group LTD?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-100 rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold">Expertise</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We have a team of highly skilled professionals who are dedicated to providing you with the best services.
                    </p>
                </div>
                <div class="bg-gray-100 rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold">Quality</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We provide high-quality services that meet your needs and expectations.
                    </p>
                </div>
                <div class="bg-gray-100 rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold">Safety</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We are committed to ensuring safety and security for our clients and their property.
                    </p>
                </div>
                <div class="bg-gray-100 rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3 class="ml-4 text-xl font-bold">Cost-Effective</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We offer cost-effective solutions that are affordable for all budgets.
                    </p>
                </div>
            </div>
        </div>
    </section>
{{--    Section 3: Testimonials--}}
    <section id="testimonials" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-3xl font-bold mb-12">Testimonials</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCZuslFbn42wwA9qw6ywBERhtpr_yOFy3Cw&s"
                             alt="Testimonial 1"
                             class="w-12 h-12 rounded-full mr-4"
                        >
                        <h3 class="text-xl font-bold">John Doe</h3>
                        <p class="text-sm text-gray-500 ml-4">CEO, Company Name</p>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Safety Necessary Group LTD has been a great help in our fire safety and structural integrity projects. They have been able to provide us with the best solutions and have been very responsive to our needs."
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCZuslFbn42wwA9qw6ywBERhtpr_yOFy3Cw&s"
                             alt="Testimonial 2"
                             class="w-12 h-12 rounded-full mr-4"
                        >
                        <h3 class="text-xl font-bold">Jane Doe</h3>
                        <p class="text-sm text-gray-500 ml-4">CEO, Company Name</p>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Safety Necessary Group LTD has been a great help in our fire safety and structural integrity projects. They have been able to provide us with the best solutions and have been very responsive to our needs."
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
