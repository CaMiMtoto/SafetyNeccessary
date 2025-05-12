@extends('layouts.app')

@section('content')

    <section class=" text-white">
        <div class="bg-primary px-4 lg:px-16 py-4">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12">
                <!-- Text Content -->
                <div class="lg:w-1/2" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-4xl lg:text-5xl  font-bold mb-6 font-display">
                        Your Comprehensive Partner for Fire Safety, Security, and Electrical Solutions in Kigali.
                    </h2>
                    <p class="text-lg leading-relaxed mb-8">
                        From advanced fire suppression systems to cutting-edge security and reliable electrical
                        installations, we ensure your safety and operational efficiency.
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
                        src="{{ asset('assets/home/hero_image.jpeg') }}"
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
            <h2 class="text-center text-3xl font-bold mb-12">
                Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{--                background image with some opacity--}}
                <div
                    class="text-white leading-relaxed rounded-2xl shadow-sm p-8 min-h-[500px] flex flex-col items-baseline justify-end relative bg-cover bg-left bg-no-repeat"
                    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.9)), url('{{ asset('assets/home/fire_safety_tips.jpg') }}')">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z"/>
                            </svg>

                        </div>
                        <h3 class="ml-4 text-xl font-bold">Fire Safety</h3>
                    </div>
                    <div class="ps-8">
                        <p class="mb-4">
                            We have extensive experience in fire safety and firefighting, including fire detection,
                            suppression, and response.
                        </p>
                        <ul class="list-disc list-inside text-sm leading-loose">
                            <li>Fire Fighting & Fire Suppression Systems (mention specific types if you offer them).
                            </li>
                            <li>Fire Alarm Systems.</li>
                            <li>Fire Safety Training.</li>
                            <li>Building Management Systems (related to fire safety).</li>
                        </ul>
                    </div>
                </div>
                <div
                    class="text-white leading-relaxed rounded-2xl shadow-sm p-8 min-h-[500px] flex flex-col items-baseline justify-end relative bg-cover bg-right bg-no-repeat"
                    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 1)), url('{{ asset('assets/home/security.webp') }}')">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>
                            </svg>

                        </div>
                        <h3 class="ml-4 text-xl font-bold">
                            Security
                        </h3>
                    </div>
                    <div class="ps-8">
                        <p class="mb-4">
                            Security is a critical part of any building. We offer a wide range of security services,
                        </p>
                        <ul class="list-disc list-inside text-sm leading-loose">
                            <li>CCTV & IP Surveillance Systems.</li>
                            <li>
                                Access Control Systems (Biometric, Card-based, etc.).
                            </li>
                            <li>
                                Intruder Alarm Systems.
                            </li>
                            <li>
                                Security Equipments & Electronic Safe.
                            </li>
                            <li>
                                GPS/GSM Spying Devices System.
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="text-white leading-relaxed rounded-2xl shadow-sm p-8 min-h-[500px] flex flex-col items-baseline justify-end relative bg-cover bg-right bg-no-repeat"
                    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 1)), url('{{ asset('assets/home/electrical_installation.png') }}')">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>
                            </svg>


                        </div>
                        <h3 class="ml-4 text-xl font-bold">
                            Electrical
                        </h3>
                    </div>
                    <div class="ps-8">
                        <p class="mb-4">
                            As an electrical installation company, we offer a wide range of electrical services,
                        </p>
                        <ul class="list-disc list-inside text-sm leading-loose">
                            <li>Electrical Installation Management System.</li>
                            <li>
                                Lighting Protection System.
                            </li>
                            <li>
                                Data Management & Software Configuration (if related to electrical or security systems).
                            </li>
                            <li>
                                PBX & VOIP Communication System (if you handle the electrical aspects).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-12">
                <a href=""
                   class="inline-flex  text-center bg-primary text-white font-semibold py-3 px-6 rounded-lg  hover:bg-gray-100 transition duration-300 hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 border border-primary">
                    View All Services
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                    </svg>

                </a>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>

                        </div>
                        <h3 class="ml-4 text-xl font-bold">Expertise</h3>
                    </div>
                    <p class="text-gray-700 mb-4">
                        We have a team of highly skilled professionals who are dedicated to providing you with the best
                        services.
                    </p>
                </div>
                <div class="bg-gray-100 rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                            </svg>

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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>

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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                            </svg>

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
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCZuslFbn42wwA9qw6ywBERhtpr_yOFy3Cw&s"
                            alt="Testimonial 1"
                            class="w-12 h-12 rounded-full mr-4"
                        >
                        <h3 class="text-xl font-bold">John Doe</h3>
                        <p class="text-sm text-gray-500 ml-4">CEO, Company Name</p>
                    </div>
                    <p class="text-white mb-4">
                        "Safety Necessary Group LTD has been a great help in our fire safety and structural integrity
                        projects. They have been able to provide us with the best solutions and have been very
                        responsive to our needs."
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/home/hero_image.jpeg')  }}"
                             alt="Testimonial 2"
                             class="w-12 h-12 rounded-full mr-4"
                        >
                        <h3 class="text-xl font-bold">Jane Doe</h3>
                        <p class="text-sm text-gray-500 ml-4">CEO, Company Name</p>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Safety Necessary Group LTD has been a great help in our fire safety and structural integrity
                        projects. They have been able to provide us with the best solutions and have been very
                        responsive to our needs."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="py-12 bg-gray-100">
        <div class="">
            <div class="bg-white overflow-hidden ">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="contact-us">
                        <div class="container mx-auto">
                            <div class="flex flex-col md:flex-row items-center">
                                <div class="w-full md:w-1/3 pr-8 mb-8 md:mb-0">
                                    <div class="bg-gray-50 rounded-lg p-6 wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                        <div class="flex items-center mb-4">
                                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                                </svg>

                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm text-gray-500 uppercase">call support center 24/7</p>
                                                <h3 class="text-lg font-semibold text-gray-800">+250 788 632 620</h3>
                                            </div>
                                        </div>
                                        <div class="flex items-center mb-4">
                                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                                                </svg>


                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm text-gray-500 uppercase">write to us</p>
                                                <h3 class="text-lg font-semibold text-gray-800">safetyfirst@gmail.com</h3>
                                            </div>
                                        </div>
                                        <div class="flex items-center mb-4">
                                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                </svg>

                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm text-gray-500 uppercase">location</p>
                                                <h3 class="text-lg font-semibold text-gray-800">KG 33 AVE, Gakiriro Road, First floor Umukinddo House</h3>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <figure>
                                                <img src="https://html.awaikenthemes.com/builtup/images/contact-info-img.png" alt="" class="rounded-md shadow">
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full md:w-2/3">
                                    <div class="bg-white rounded-lg shadow-md p-6 wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                        <div class="mb-6">
                                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Contact us</h3>
                                            <h2 class="text-5xl  text-primary">Get in touch with us</h2>
                                        </div>
                                        <form id="contactForm" action="#" method="POST" data-toggle="validator" novalidate="true">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                <div class="form-group has-error has-danger">
                                                    <input type="text" name="name" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-200" id="name" placeholder="Enter Your name" required="">
                                                    <div class="help-block with-errors text-red-500 text-sm mt-1"><ul class="list-unstyled"><li>Please fill out this field.</li></ul></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-200" id="email" placeholder="Enter Your email" required="">
                                                    <div class="help-block with-errors text-red-500 text-sm mt-1"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="phone" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-200" id="phone" placeholder="Phone number" required="">
                                                    <div class="help-block with-errors text-red-500 text-sm mt-1"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="website" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-200" id="website" placeholder="Subject" required="">
                                                    <div class="help-block with-errors text-red-500 text-sm mt-1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-5">
                                                <textarea name="msg" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-200" id="msg" rows="3" placeholder="Message" required=""></textarea>
                                                <div class="help-block with-errors text-red-500 text-sm mt-1"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="bg-primary hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-md focus:outline-none focus:shadow-outline disabled:opacity-50">Send Message</button>
                                                <div id="msgSubmit" class="h3 hidden text-green-500 mt-2"></div>
                                            </div>
                                        </form>
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
