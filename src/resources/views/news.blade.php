@extends('layout.main')
@section('title')
    News
@endsection
@section('section')

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0 first-letter-uppercase">{{ json_decode($name, true)[App::getLocale()] }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current first-letter-uppercase">{{ json_decode($name, true)[App::getLocale()] }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->
    
    <!-- News Posts Section -->
    <section id="news-posts" class="news-posts section">

      <div class="container">

        <div class="row gy-4">   
            @foreach ($posts as $post)
                 <div class="col-xl-4 col-md-6 cursor-pointer" data-aos="fade-up" data-aos-delay="100" onclick="location.href='{{ route('showPost', ['id' => $post->id]) }}'">
                    <article>

                    <div class="post-img">
                        <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid">
                    </div>
                    <p class="post-category">{{ $post->translation(App::getLocale())->title }}</p>

                    <h2 class="title">
                        <a href="blog-details.html">
                            {{ $post->translation(App::getLocale())->description }}
                        </a>
                    </h2>

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
              <span class="d-none d-sm-inline">Previous</span>
            </a>
          </li>
        @else
          <li>
            <a href="{{ $posts->previousPageUrl() }}" aria-label="Previous page">
              <i class="bi bi-arrow-left"></i>
              <span class="d-none d-sm-inline">Previous</span>
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
              <span class="d-none d-sm-inline">Next</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>
        @else
          <li class="disabled">
            <a href="#" aria-label="Next page">
              <span class="d-none d-sm-inline">Next</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>
        @endif
      </ul>
    </nav>
  </div>
</section>

@endsection