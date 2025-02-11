<?php $page = 'index-13'; ?>
@extends('web.layout.mainlayout_index')
@section('title', 'Welcome')

@section('content')
<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item">
                            <a href="mailto:{{ __('web.contact.email') }}">
                                <i class="icofont-support-faq mr-2"></i>{{ __('web.contact.email') }}
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <i class="icofont-location-pin mr-2"></i>{{ __('web.contact.address') }}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:{{ __('web.contact.phone') }}">
                            <span>{{ __('web.contact.call_now') }} : </span>
                            <span class="h4">{{ __('web.contact.phone') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('web_assets/images/logo.png')}}" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">{{ __('web.nav.home') }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">{{ __('web.nav.about') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.html">{{ __('web.nav.services') }}</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('web.nav.department') }} <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="department.html">{{ __('web.nav.departments') }}</a></li>
                            <li><a class="dropdown-item" href="department-single.html">{{ __('web.nav.department_single') }}</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ __('web.nav.doctors') }} <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="doctor.html">{{ __('web.nav.doctors') }}</a></li>
                            <li><a class="dropdown-item" href="doctor-single.html">{{ __('web.nav.doctor_single') }}</a></li>
                            <li><a class="dropdown-item" href="appoinment.html">{{ __('web.nav.appointment') }}</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('web.nav.blog') }} <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="blog-sidebar.html">{{ __('web.nav.blog_sidebar') }}</a></li>
                            <li><a class="dropdown-item" href="blog-single.html">{{ __('web.nav.blog_single') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">{{ __('web.nav.contact') }}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (App::getLocale() == 'ar')
                                <img style="width: 25px" src="{{ asset('assets/img/Ar-flag.svg') }}" alt="Arabic" class="flag-icon">
                            @else
                                <img style="width: 25px" src="{{ asset('assets/img/Eng-flag.svg') }}" alt="English" class="flag-icon">
                            @endif
                            <i class="icofont-thin-down"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li>
                                <a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'en']) }}">
                                    <img style="width: 20px" src="{{ asset('assets/img/Eng-flag.svg') }}" alt="English" class="flag-icon">
                                    {{ __('web.nav.english') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'ar']) }}">
                                    <img style="width: 20px" src="{{ asset('assets/img/Ar-flag.svg') }}" alt="Arabic" class="flag-icon">
                                    {{ __('web.nav.arabic') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Slider Start -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing">{{ __('web.hero.tagline') }}</span>
                    <h1 class="mb-3 mt-3">{{ __('web.hero.title') }}</h1>
                    <p class="mb-4 pr-5">{{ __('web.hero.description') }}</p>
                    <div class="btn-container">
                        <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">
                            {{ __('web.hero.make_appointment') }} <i class="icofont-simple-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>{{ __('web.features.service_hours') }}</span>
                        <h4 class="mb-3">{{ __('web.features.online_appointment') }}</h4>
                        <p class="mb-4">{{ __('web.features.service_description') }}</p>
                        <a href="appoinment.html" class="btn btn-main btn-round-full">{{ __('web.hero.make_appointment') }}</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>{{ __('web.features.timing_schedule') }}</span>
                        <h4 class="mb-3">{{ __('web.features.working_hours') }}</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">{{ __('web.features.working_days.sun_wed') }}</li>
                            <li class="d-flex justify-content-between">{{ __('web.features.working_days.thu_fri') }}</li>
                            <li class="d-flex justify-content-between">{{ __('web.features.working_days.sat_sun') }}</li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>{{ __('web.features.emergency_cases') }}</span>
                        <h4 class="mb-3">{{ __('web.features.emergency_number') }}</h4>
                        <p>{{ __('web.features.emergency_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="{{asset('web_assets/images/about/img-1.jpg')}}" alt="" class="img-fluid">
                    <img src="{{asset('web_assets/images/about/img-2.jpg')}}" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="{{asset('web_assets/images/about/img-3.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">{{ __('web.about.title') }}</h2>
                    <p class="mt-4 mb-5">{{ __('web.about.description') }}</p>
                    <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">{{ __('web.about.button') }}<i
                            class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3">{{ __('web.stats.numbers.happy') }}</span>k
                        <p>{{ __('web.stats.happy_people') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3">{{ __('web.stats.numbers.surgery') }}</span>+
                        <p>{{ __('web.stats.surgery_completed') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3">{{ __('web.stats.numbers.experts') }}</span>+
                        <p>{{ __('web.stats.expert_doctors') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3">{{ __('web.stats.numbers.branches') }}</span>
                        <p>{{ __('web.stats.worldwide_branch') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>{{ __('web.services.title') }}</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>{{ __('web.services.description') }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-laboratory text-lg"></i>
                        <h4 class="mt-3 mb-3">{{ __('web.services.items.lab.title') }}</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">{{ __('web.services.items.lab.description') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-heart-beat-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">{{ __('web.services.items.heart.title') }}</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">{{ __('web.services.items.heart.description') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-tooth text-lg"></i>
                        <h4 class="mt-3 mb-3">{{ __('web.services.items.dental.title') }}</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">{{ __('web.services.items.dental.description') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-crutch text-lg"></i>
                        <h4 class="mt-3 mb-3">{{ __('web.services.items.body.title') }}</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">{{ __('web.services.items.body.description') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-brain-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">{{ __('web.services.items.neurology.title') }}</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">{{ __('web.services.items.neurology.description') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-dna-alt-1 text-lg"></i>
                        <h4 class="mt-3 mb-3">{{ __('web.services.items.gynecology.title') }}</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">{{ __('web.services.items.gynecology.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section appoinment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="appoinment-content">
                    <img src="{{asset('web_assets/images/about/img-3.jpg')}}" alt="" class="img-fluid">
                    <div class="emergency">
                        <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>{{ __('web.appointment.emergency_number') }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">{{ __('web.appointment.book_title') }}</h2>
                    <p class="mb-4">{{ __('web.appointment.book_description') }}</p>
                    <form id="#" class="appoinment-form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>{{ __('web.appointment.form.department') }}</option>
                                        <option>{{ __('web.appointment.departments.software_design') }}</option>
                                        <option>{{ __('web.appointment.departments.development_cycle') }}</option>
                                        <option>{{ __('web.appointment.departments.software_development') }}</option>
                                        <option>{{ __('web.appointment.departments.maintenance') }}</option>
                                        <option>{{ __('web.appointment.departments.process_query') }}</option>
                                        <option>{{ __('web.appointment.departments.cost_duration') }}</option>
                                        <option>{{ __('web.appointment.departments.modal_delivery') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option>{{ __('web.appointment.form.doctor') }}</option>
                                        <option>{{ __('web.appointment.departments.software_design') }}</option>
                                        <option>{{ __('web.appointment.departments.development_cycle') }}</option>
                                        <option>{{ __('web.appointment.departments.software_development') }}</option>
                                        <option>{{ __('web.appointment.departments.maintenance') }}</option>
                                        <option>{{ __('web.appointment.departments.process_query') }}</option>
                                        <option>{{ __('web.appointment.departments.cost_duration') }}</option>
                                        <option>{{ __('web.appointment.departments.modal_delivery') }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" id="date" type="text" class="form-control"
                                        placeholder="{{ __('web.appointment.form.date') }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" type="text" class="form-control"
                                        placeholder="{{ __('web.appointment.form.time') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="{{ __('web.appointment.form.name') }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="Number" class="form-control"
                                        placeholder="{{ __('web.appointment.form.phone') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="6" 
                                placeholder="{{ __('web.appointment.form.message') }}"></textarea>
                        </div>

                        <a class="btn btn-main btn-round-full" href="appoinment.html">
                            {{ __('web.appointment.form.button') }} <i class="icofont-simple-right ml-2"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>{{ __('web.testimonials.title') }}</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>{{ __('web.testimonials.description') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
                <div class="testimonial-block style-2 gray-bg">
                    <i class="icofont-quote-right"></i>
                    <div class="testimonial-thumb">
                        <img src="{{asset('web_assets/images/team/test-thumb1.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="client-info">
                        <h4>{{ __('web.testimonials.items.service.title') }}</h4>
                        <span>{{ __('web.testimonials.items.service.name') }}</span>
                        <p>{{ __('web.testimonials.items.service.text') }}</p>
                    </div>
                </div>

                <div class="testimonial-block style-2 gray-bg">
                    <div class="testimonial-thumb">
                        <img src="{{asset('web_assets/images/team/test-thumb2.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="client-info">
                        <h4>{{ __('web.testimonials.items.doctors.title') }}</h4>
                        <span>{{ __('web.testimonials.items.doctors.name') }}</span>
                        <p>{{ __('web.testimonials.items.doctors.text') }}</p>
                    </div>
                    <i class="icofont-quote-right"></i>
                </div>

                <div class="testimonial-block style-2 gray-bg">
                    <div class="testimonial-thumb">
                        <img src="{{asset('web_assets/images/team/test-thumb3.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="client-info">
                        <h4>{{ __('web.testimonials.items.support.title') }}</h4>
                        <span>{{ __('web.testimonials.items.support.name') }}</span>
                        <p>{{ __('web.testimonials.items.support.text') }}</p>
                    </div>
                    <i class="icofont-quote-right"></i>
                </div>

                <div class="testimonial-block style-2 gray-bg">
                    <div class="testimonial-thumb">
                        <img src="{{asset('web_assets/images/team/test-thumb4.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="client-info">
                        <h4>{{ __('web.testimonials.items.environment.title') }}</h4>
                        <span>{{ __('web.testimonials.items.environment.name') }}</span>
                        <p>{{ __('web.testimonials.items.environment.text') }}</p>
                    </div>
                    <i class="icofont-quote-right"></i>
                </div>

                <div class="testimonial-block style-2 gray-bg">
                    <div class="testimonial-thumb">
                        <img src="{{asset('web_assets/images/team/test-thumb1.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="client-info">
                        <h4>{{ __('web.testimonials.items.modern.title') }}</h4>
                        <span>{{ __('web.testimonials.items.modern.name') }}</span>
                        <p>{{ __('web.testimonials.items.modern.text') }}</p>
                    </div>
                    <i class="icofont-quote-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section clients">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>{{ __('web.partners.title') }}</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>{{ __('web.partners.description') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clients-logo">
            @for ($i = 1; $i <= 10; $i++)
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{asset('web_assets/images/about/' . ($i <= 6 ? $i : ($i-6)) . '.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection