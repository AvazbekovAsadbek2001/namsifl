@extends('layout.main')
@section('title')
   title faculty
@endsection
@section('section')
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0"> Title faculty</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">@lang('contact.home')</a></li>
            <li><a href="{{ route('faculties') }}"> Faculties </a></li>
            <li class="current"> title faculty</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="privacy" class="privacy section">
        <div class="container" data-aos="fade-up">
           
        </div>
    </section>
@endsection
