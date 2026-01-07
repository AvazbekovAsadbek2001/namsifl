@extends('layout.main')
@section('title')
   {{ json_decode($faculty->name, true)[App::getLocale()] }}
@endsection
@section('section')
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0"> {{ json_decode($faculty->name, true)[App::getLocale()] }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">@lang('contact.home')</a></li>
            <li><a href="{{ route('faculties') }}"> @lang('structure.faculties') </a></li>
            <li class="current"> {{ json_decode($faculty->name, true)[App::getLocale()] }}</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="blog-details" class="blog-details leadership section">
      <div class="container" data-aos="fade-up">
          <article class="article">
            <div class="article-header">
                <h1 class="title" data-aos="fade-up" data-aos-delay="100">
                  {{ json_decode($faculty->name, true)[App::getLocale()] }}
                </h1>
            </div>
            <div class="article-wrapper">
              <aside class="table-of-contents" data-aos="fade-left">
                <h3>Kafedralar ro'yxati</h3>
                <nav>
                  <ul>
                    @foreach($faculty->cafedras as $cafedra)
                      <li><a href="{{ route('cafedra_detail', ['id' => $cafedra->id]) }}">{{ json_decode($cafedra->title, true)[App::getLocale()] }}</a></li>
                    @endforeach
                  </ul>
                </nav>
              </aside>

              <div class="article-content">
                {!! $faculty->content(App::getLocale()) !!}
              </div>
            </div>

            <div class="article-footer" data-aos="fade-up"></div>
          </article>
        @if (!empty($faculty->dean()))
             <div class="intro-wrapper">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="intro-image">
                <img src="{{ asset('storage/'.$faculty->dean()->photo) }}" alt="School Leadership" class="img-fluid rounded-lg" style="height: 550px">
              </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="300">
              <div class="intro-content">
                  <span class="subtitle">Fakultet dekani</span>
                  <h2 class="title">{{ $faculty->dean()->name }}</h2>
                   <div class="highlights">
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Phone number :</h4>
                      <p>{{ json_decode($faculty->dean()->social_medias, true)['phone'] }}</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Email address : </h4>
                      <p>{{ json_decode($faculty->dean()->social_medias, true)['email'] }}</p>
                    </div>
                  </div>
                  <a href="{{ route('employee', ['id' => $faculty->dean()->id]) }}" class="btn-event-details">Batafsil <i class="bi bi-arrow-right"></i></a>
                </div>
                </div>
            </div>
          </div>
        </div>
        @endif
        <div class="leadership-section" data-aos="fade-up">
          <div class="section-header text-center">
            <h4 class="title">Fakultet xodimlari</h2>
          </div>

          <div class="row g-4">
            @foreach ($faculty->employees() as $employee)
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
          </div>
        </div>
      </div>
    </section>
@endsection
