{{-- @dd($cafedra) --}}
@extends('layout.main')
@section('title')
   {{ json_decode($department->name, true)[App::getLocale()] }}
@endsection
@section('section')
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0"> {{ json_decode($department->name, true)[App::getLocale()] }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">@lang('contact.home')</a></li>
            <li><a href="{{ route('faculties') }}"> @lang('structure.faculties') </a></li>
            <li class="current"> {{ json_decode($department->name, true)[App::getLocale()] }}</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="blog-details" class="blog-details leadership section">
      <div class="container" data-aos="fade-up">
          <article class="article">
            <div class="article-header">
                <h1 class="title" data-aos="fade-up" data-aos-delay="100">
                  {{ json_decode($department->name, true)[App::getLocale()] }}
                </h1>
            </div>

            <div class="article-content">
                    {!! $department->content(App::getLocale()) !!}
                </div>

            <div class="article-footer" data-aos="fade-up">

            </div>
          </article>
        <div class="leadership-section" data-aos="fade-up">
          {{-- <div class="section-header text-center">
            <h4 class="title">Kafedra hodimlari</h2>
          </div>

          <div class="section-header text-center">
            <h4 class="title">Kafedra o'qituvchilari</h2>
          </div> --}}

          {{-- <div class="row g-4">
            @foreach ($cafedra->employees() as $employee)
              <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-card">
                  <div class="card-inner">
                    <div class="card-front">
                      <div class="member-image">
                        <img src="{{ asset('storage/'.$employee->photo) }}" class="img-fluid">
                      </div>
                      <div class="member-info">
                        <h4>{{ $employee->name }}</h4>
                        <p>{{ json_decode($employee->position->title, true)[App::getLocale()] }}</p>
                      </div>
                    </div>
                    <div class="card-back">
                      <h4>{{ $employee->name }}</h4>
                      <p class="position">{{ json_decode($employee->position->title, true)[App::getLocale()] }}</p>
                      @if ($employee->position_description != null)
                        <p class="bio">
                          {{ json_decode($employee->position_description, true)[App::getLocale()] }}
                        </p>
                      @endif
                      <div>
                        <a href="{{ route('employee', ['id' => $employee->id]) }}">Batafsil</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div> --}}
        </div>
      </div>
    </section>
@endsection
