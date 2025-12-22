@extends('layout.main')
@section('title')
   {{ $data->title}}
@endsection
@section('section')
    
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">{{ $data->title}}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">@lang('contact.home')</a></li>
            <li class="current">{{ $data->title}}</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="privacy" class="privacy section">
        <div class="container" data-aos="fade-up">
            {!! $data->content !!}
        </div>
    </section>
@endsection
