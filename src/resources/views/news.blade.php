@extends('layout.main')
@section('title')
    {{ json_decode($name, true)[App::getLocale()] }}
@endsection
@section('section')
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0 first-letter-uppercase">{{ json_decode($name, true)[App::getLocale()] }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">@lang('contact.home')</a></li>
            <li class="current first-letter-uppercase">{{ json_decode($name, true)[App::getLocale()] }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->
    
    @if (json_decode($name, true)['uz'] == "Korrupsiyaga qarshi kurash")
      <section id="leadership" class="leadership section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="intro-wrapper">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="300">
                <div class="intro-content">
                  <span class="subtitle">{{ __('news.leadership.department') }}</span>
                  <h2 class="title">{{ __('news.leadership.head_name') }}</h2>
                  <div class="highlights">
                    <div class="highlight-item">
                      <div class="icon-box">
                        <i class="bi bi-telephone-fill"></i>
                      </div>
                      <div class="content">
                        <h4>{{ __('news.leadership.phone') }} :</h4>
                        <p>+99 (897) 270-00-60</p>
                      </div>
                    </div>
                    <div class="highlight-item">
                      <div class="icon-box">
                        <i class="bi bi-envelope-fill"></i>
                      </div>
                      <div class="content">
                        <h4>{{ __('news.leadership.email') }} : </h4>
                        <p> alisher.namsifl@gmail.com</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                  <div class="intro-image">
                    <img src="{{ asset('assets/img/rectorate/korrupsiya.jpg') }}" class="img-fluid rounded-lg">
                  </div>
                </div>
            </div>
          <div>
        </div>
      </section>
    @endif

    @if (json_decode($name, true)['uz'] == "Kelajakka qadam")
      <!-- Events Section -->
      <section id="events" class="events section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Video qo‘llanmalar</h2>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="event-item ">
                <div class="event-image" style="height: auto">
                  <iframe 
                    title="YouTube video player" 
                    src="https://www.youtube.com/embed/YMmKSRfGGfY?si=Q19sd9Onw5zEyvwM"
                    frameborder="0" 
                    allowfullscreen="allowfullscreen"
                    width="100%"
                    height="250">
                  </iframe>

                </div>
                <div class="event-details">
                  <h3>Kelajakka qadam</h3>
                  <p>Kelajakka qadam orqali yoshlarga yaratilayotgan imkoniyatlar, biznes g‘oyalarning moliyalashtirilishi va bitiruvchilarning hayotidagi batafsil lavhalar endi videoda.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="event-item">
                <div class="event-image" style="height: auto">
                   <iframe 
                    title="YouTube video player" 
                    src="https://www.youtube.com/embed/5oNRk-Olxck"
                    frameborder="0" 
                    allowfullscreen="allowfullscreen"
                    width="100%"
                    height="250">
                  </iframe>
                </div>
                <div class="event-details">
                  <h3>Kelajakka qadam | Talaba Expo - 2025</h3>
                  <p>“Kelajakka Qadam” dasturi doirasida bitiruvchi yoshlar oʻz biznes loyihalarini taqdim etdi. Bu ilhomli daqiqalar Oʻzbekiston 24 telekanalida yoritildi!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="event-item">
                <div class="event-image" style="height: auto">
                   <iframe 
                    title="YouTube video player" 
                    src="https://www.youtube.com/embed/YMmKSRfGGfY?si=Q19sd9Onw5zEyvwM"
                    frameborder="0" 
                    allowfullscreen="allowfullscreen"
                    width="100%"
                    height="250">
                  </iframe>
                </div>
                <div class="event-details">
                  <h3>Kelajakka qadam</h3>
                  <p>Kelajakka qadam orqali yoshlarga yaratilayotgan imkoniyatlar, biznes g‘oyalarning moliyalashtirilishi va bitiruvchilarning hayotidagi batafsil lavhalar endi videoda.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
    <!-- /Events Section -->

    <!-- About Section -->
      <section id="about" class="about section p-1">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="core-values" data-aos="fade-up" data-aos-delay="500">
                 <div class="container section-title" data-aos="fade-up">
                  <h2>Kredit xizmatlari</h2>
                  <p> Biznes g‘oya bor, lekin mablag‘ yo‘qmi ? “KELAJAKKA QADAM” bu muammoni yechadi!</p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                    <div class="value-card">
                      <h4 class="fw-bold">Kelajakka birinchi qadam</h4>
                      <p>Ijtimoiy soliq to'lab,o'zini-o'zi band qilgan bitiruvchilar uchun</p>
                    </div>
                  </div>

                  <div class="col">
                    <div class="value-card">
                      <h4 class="fw-bold">Kelajak uchun start</h4>
                      <p>Yakka tartibdagi tadbirkorlar yoki yuridik shaxs tashkil etgan bitiruvchilar uchun</p>
                    </div>
                  </div>

                  <div class="col">
                    <div class="value-card">
                      <h4 class="fw-bold">Yorqin kelajak sari</h4>
                      <p>Yakka tartibdagi tadbirkorlar yoki yuridik shaxs tashkil etgan bitiruvchilar uchun</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- /About Section -->
    @endif
    <!-- News Posts Section -->
    <section id="news-posts" class="news-posts section">

      <div class="container">
        @if (session('success'))
          <div class="alert alert-primary" role="alert">
            Habaringiz jo'natildi
          </div>
        @endif
        @if (json_decode($name, true)['en'] != "News" && json_decode($name, true)['en'] != "Announcement")
        <div class="container section-title" data-aos="fade-up">
          <h2>{{ __('news.news_title') }}</h2>
        </div>
        @endif
        <div class="row gy-4">   
            @foreach ($posts as $post)
                <div class="col-xl-4 col-md-6 cursor-pointer" data-aos="fade-up" data-aos-delay="100" onclick="location.href='{{ route('showPost', ['id' => $post->id]) }}'">
                    <article>
                      <div class="post-img">
                          <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid">
                      </div>
                      
                      <h2 class="title">
                          <a href="javascript::void(0)">
                              {{ $post->translation(App::getLocale())->title }}
                          </a>
                      </h2>
                      
                      <p class="post-category">{{ $post->translation(App::getLocale())->description }}</p>

                      <div class="d-flex align-items-center">
                          <img src="{{ asset('assets/img/admin.png') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                          <div class="post-meta">
                            <p class="post-author">{{ $post->user->name }}</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</time>
                            </p>
                          </div>
                      </div>
                  </article>
                </div>        
            @endforeach

        </div>
        <!-- End recent posts list -->

      </div>

    </section>
    <!-- /News Posts Section -->
    <section id="pagination-2" class="pagination-2 section">
      <div class="container">
        <nav class="d-flex justify-content-center" aria-label="Page navigation">
          <ul>
            {{-- Previous button --}}
            @if ($posts->onFirstPage())
              <li class="disabled">
                <a href="#" aria-label="Previous page">
                  <i class="bi bi-arrow-left"></i>
                  <span class="d-none d-sm-inline">{{ __('news.pagination.previous') }}</span>
                </a>
              </li>
            @else
              <li>
                <a href="{{ $posts->previousPageUrl() }}" aria-label="Previous page">
                  <i class="bi bi-arrow-left"></i>
                  <span class="d-none d-sm-inline">{{ __('news.pagination.previous') }}</span>
                </a>
              </li>
            @endif

            {{-- Page numbers --}}
            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
              @if ($page == $posts->currentPage())
                <li><a href="#" class="active">{{ $page }}</a></li>
              @elseif ($page > 2 && $page < $posts->lastPage() - 1)
                {{-- optional: ellipsis logic --}}
                @if ($page == 3)
                  <li class="ellipsis">...</li>
                @endif
              @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
              @endif
            @endforeach

            {{-- Next button --}}
            @if ($posts->hasMorePages())
              <li>
                <a href="{{ $posts->nextPageUrl() }}" aria-label="Next page">
                  <span class="d-none d-sm-inline">{{ __('news.pagination.next') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </li>
            @else
              <li class="disabled">
                <a href="#" aria-label="Next page">
                  <span class="d-none d-sm-inline">{{ __('news.pagination.next') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </li>
            @endif
          </ul>
        </nav>
      </div>
    </section>

    @if (json_decode($name, true)['uz'] == "Stop narko")
      <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-content">
              <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
                <h3>Habar berish</h3>
                <p>Agar atrofingizda giyohvandlik bilan bog‘liq xavf sezsangiz, bu yerda anonim tarzda xabar qoldirishingiz mumkin. Maqsad — giyohvandlikdan holi, sog‘lom muhit yaratish.</p>

                <form action="{{ route('sendMessage') }}" method="post" class="php-email-form">
                  @csrf
                  <input type="hidden" name="type" value="2">
                  <div class="form-group mt-3">
                      <textarea name="message" class="form-control" rows="5" required></textarea>
                  </div>
                  <div class="form-submit mt-2">
                      <button type="submit">@lang('contact.send_message')</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </section>
    @endif

@endsection