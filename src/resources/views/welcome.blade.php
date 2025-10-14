@extends('layout.main')
@section('title')
    Namangan davlat chet tillari instituti
@endsection
@section('css')

@endsection
@section('section')
    <section id="hero" class="hero section">
      <div class="hero-wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
              <h1> @lang('welcome.otm_name')</h1>

              <div class="action-buttons">
                    <a href="#" class="btn-primary"> @lang('welcome.call_center')</a>
                <a href="#" class="btn-secondary"> @lang('welcome.virtual_travel') </a>
              </div>
            </div>
            <div class="col-lg-6 hero-media" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ asset('assets/img/main.jpg') }}" alt="Education" class="img-fluid main-image">
              <div class="image-overlay">
                <div class="badge-accredited">
                  <i class="bi bi-patch-check-fill"></i>
                  <span> @lang('welcome.main_building') </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-book-fill"></i>
                </div>
                <div class="feature-content">
                  <h3> @lang('welcome.hemis_otm') </h3>
                  <p> @lang('welcome.hemis_otm_desc') </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-laptop-fill"></i>
                </div>
                <div class="feature-content">
                  <h3> @lang('welcome.hemis_student') </h3>
                  <p> @lang('welcome.hemis_student_desc') </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="feature-content">
                  <h3> @lang('welcome.unilibrary') </h3>
                  <p> @lang('welcome.unilibrary_desc')</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="upcoming-event" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
          <div class="event-content">
            <div class="event-info">
              <h3> @lang('welcome.upcoming-event-title') </h3>
            </div>
            <div class="event-action" style="margin-right: 20px">
              <a href="http://www.youtube.com/@NamSIFL" class="btn-event"><i class="bi bi-youtube"></i></a>
            </div>
            <div class="event-action" style="margin-right: 20px">
               <a href="https://t.me/ibratnamdchti" class="btn-event"><i class="bi bi-telegram"></i></a>
            </div>
            <div class="event-action" style="margin-right: 20px">
               <a href="https://www.facebook.com/NSIFL?mibextid=ZbWKwL" class="btn-event"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-up" data-aos-delay="200">
              <h2> @lang('welcome.about-title') </h2>
              <p> @lang('welcome.about-desc')</p>
                <a href="#" class="service-link">@lang('welcome.more') <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{ asset('assets/img/about.jpg') }}" alt="Campus" class="img-fluid rounded">
            </div>
          </div>
        </div>

        {{-- <div class="row mt-5">
          <div class="col-lg-12">
            <div class="core-values" data-aos="fade-up" data-aos-delay="500">
              <div class="container section-title" data-aos="fade-up">
                <h2> @lang('welcome.interactive_services') </h2>
              </div>
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-book"></i>
                    </div>
                    <h4>Academic Excellence</h4>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-people"></i>
                    </div>
                    <h4>Community Engagement</h4>
                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-globe"></i>
                    </div>
                    <h4>Global Perspective</h4>
                    <p>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

      </div>
    </section>
    <!-- /About Section -->


    <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang('welcome.announcements')</h2>
      </div>
        <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          @foreach($announcement as $item)
                <div onclick="location.href='{{ route('showPost', ['id' => $item->id]) }}'" class="col-xl-6 cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                    <article class="post-item d-flex">
                        <div class="post-img">
                            <img src="{{ asset('storage/'.$item->image) }}" alt="" class="img-fluid" loading="lazy">
                        </div>

                        <div class="post-content flex-grow-1">
                            @foreach($item->tags as $tag)
                                <a href="#" class="category">{{ json_decode($tag->name,true)[App::getLocale()] }}</a>
                            @endforeach

                            <div style="min-height: 130px">
                                <h2 class="post-title">
                                    <a href="#">{{ $item->translation(App::getLocale())->title }}</a>
                                </h2>

                                <p class="post-description">
                                    {{ $item->translation(App::getLocale())->description }}
                                </p>
                            </div>
                            <div class="post-meta">
                                <div class="post-author">
                                    <img src="{{ asset('assets/img/admin.png') }}" class="img-fluid">
                                    <span class="author-name">{{ $item->user->name }}</span>
                                </div>
                                <span class="post-date">{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </article>
                </div>
          @endforeach

        </div>

      </div>
    </section>
    <!-- /Recent News Section -->

    <!-- Events Section -->
    <section id="events" class="events section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang('welcome.news')</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
            @foreach($news as $item)
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200" >
                    <div class="event-item">
                        <div class="event-image">
                            <img src="{{ asset('storage/'.$item->image) }}" alt="Workshop" class="img-fluid">
                            <div class="event-date-overlay">
                                <span class="date">{{  \Carbon\Carbon::parse($item->created_at)->format('M d') }}</span>
                            </div>
                        </div>
                        <div class="event-details">
                            <div class="event-category">
                                <div>
                                  @foreach($item->tags as $tag)
                                      <span class="badge academic">{{ json_decode($tag->name,true)[App::getLocale()] }}</span>
                                  @endforeach
                                </div>
                                <span class="event-time">{{ \Carbon\Carbon::parse($item->created_at)->format('g:i A') }}</span>
                            </div>
                            <h3>{{ $item->translation(App::getLocale())->title }}</h3>
                            <p>{{ $item->translation(App::getLocale())->description }}
                            <div class="event-footer">
                                <a href="{{ route('showPost', ['id' => $item->id]) }}" class="register-btn">Batafsil</a>
                                <div class="event-share">
                                    <i class="bi bi-share"></i>
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- /Events Section -->

    <!-- Campus Facilities Section -->
    <section id="campus-facilities" class="campus-facilities section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Facilities Categories Grid -->
            <div class="highlights-carousel">
                <div class="section-header">
                    <h2>@lang('welcome.symbols')</h2>
                </div>
            </div>
            <div class="facilities-grid" data-aos="fade-up" data-aos-delay="200">

                <div class="category-card academic" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-content mt-3">
                        <div class="facility-image">
                            <img src="{{ asset('assets/img/Symbols/bayroq.jpg') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="card-header p-1">
                        <h3>@lang('welcome.flag')</h3>
                    </div>
                </div>

                <div class="category-card academic" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-content mt-3">
                        <div class="facility-image">
                            <img src="{{ asset('assets/img/Symbols/madhiya.jpg') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="card-header p-1">
                        <h3>@lang('welcome.anthem')</h3>
                    </div>
                </div>

                <div class="category-card academic" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-content mt-3">
                        <div class="facility-image">
                            <img src="{{ asset('assets/img/Symbols/gerb.jpg') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="card-header p-1 mb-3">
                        <h3>@lang('welcome.emblem')</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Campus Facilities Section -->
@endsection
@section('script')
    <script>
        const cards = document.querySelectorAll('.feature-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('active');
            });

            card.addEventListener('mouseleave', () => {
                card.classList.remove('active');
            });
        });
    </script
@endsection
