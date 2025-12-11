@extends('layout.main')
@section('title')
   Employee
@endsection
@section('css')
  <style>
    #rektorAccordion .accordion-button:hover {
      background-color: #e6f2f8 !important;
      color: #04415f !important;
      font-weight: 600;
    }
    #rektorAccordion .accordion-button:not(.collapsed) {
      background-color: #d0ebff !important;
      color: #04415f !important;
      font-weight: 600;
    }
</style>
@endsection
@section('section')
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">{{ __('loyout.employee') }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">{{ __('contact.home') }}</a></li>
            <li class="current">{{ __('loyout.employee') }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->
    <!-- Leadership Section -->
    <section id="leadership" class="leadership section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="intro-wrapper">
          <div class="row align-items-center">
             <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="300">
              <div class="intro-content">
                <span class="subtitle">{{ json_decode($employee->position->title, true)[App::getLocale()] }}</span>
                <h2 class="title">{{ $employee->name }}</h2>
                @if ($employee->position_description != null)
                  <p class="description">
                    {{ json_decode($employee->position_description, true)[App::getLocale()] }}
                  </p>
                @endif
                <div class="highlights">
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Phone number :</h4>
                      <p>{{ json_decode($employee->social_medias, true)['phone'] }}</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Email address : </h4>
                      <p>{{ json_decode($employee->social_medias, true)['email'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
             </div>
              <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="intro-image">
                  <img src="{{ asset('storage/'.$employee->photo) }}" class="img-fluid rounded-lg" style="height: 550px">
                </div>
              </div>
          </div>
        <div>

        <!-- Accordion – #04415f rangiga moslashtirilgan -->
<div class="notice-wrapper mt-4">
  <div class="accordion border rounded shadow-sm" id="rektorAccordion" style="border-color: #04415f;">

    <!-- 1. Biografiya -->
    <div class="accordion-item border-0">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button fw-semibold collapsed shadow-none border-bottom"
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#collapseOne" 
                aria-expanded="true" 
                aria-controls="collapseOne"
                style="color: #04415f; background-color: #f1f8fb; border-bottom: 1px solid #04415f;">
          Biografiya
        </button>
      </h2>
      <div id="collapseOne" 
           class="accordion-collapse collapse show text-break" 
           aria-labelledby="headingOne" 
           data-bs-parent="#rektorAccordion">
        <div class="accordion-body pt-3 pb-4" 
             style="background-color: #f8fcfe; border-left: 5px solid #04415f; margin-left: 1rem; padding-left: 1.2rem; line-height: 1.7;">
             {!! $employee->contents()->where('type','biography')->first()->content !!}
        </div>
      </div>
    </div>

    <!-- 2. Faoliyat yo‘nalishlari -->
    <div class="accordion-item border-0">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button fw-semibold collapsed shadow-none border-bottom"
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#collapseTwo" 
                aria-expanded="false" 
                aria-controls="collapseTwo"
                style="color: #04415f; background-color: #f1f8fb; border-bottom: 1px solid #04415f;">
          Ish tajribasi
        </button>
      </h2>
      <div id="collapseTwo" 
           class="accordion-collapse collapse text-break" 
           aria-labelledby="headingTwo" 
           data-bs-parent="#rektorAccordion">
        <div class="accordion-body pt-3 pb-4" 
             style="background-color: #f8fcfe; border-left: 5px solid #04415f; margin-left: 1rem; padding-left: 1.2rem; line-height: 1.7;">
            {!! $employee->contents()->where('type','work_experience')->first()->content !!}
        </div>
      </div>
    </div>

    <!-- 3. Qo‘shimcha ma’lumotlar -->
    <div class="accordion-item border-0">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button fw-semibold collapsed shadow-none"
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#collapseThree" 
                aria-expanded="false" 
                aria-controls="collapseThree"
                style="color: #04415f; background-color: #f1f8fb;">
          Asosiy funksional vazifalari
        </button>
      </h2>
      <div id="collapseThree" 
           class="accordion-collapse collapse text-break" 
           aria-labelledby="headingThree" 
           data-bs-parent="#rektorAccordion">
        <div class="accordion-body pt-3 pb-4" 
             style="background-color: #f8fcfe; border-left: 5px solid #04415f; margin-left: 1rem; padding-left: 1.2rem; line-height: 1.7;">
            {!! $employee->contents()->where('type','functional_duties')->first()->content !!}
        </div>
      </div>
    </div>

  </div>
</div>
      </div>

    </section>
    <!-- /Leadership Section -->
@endsection