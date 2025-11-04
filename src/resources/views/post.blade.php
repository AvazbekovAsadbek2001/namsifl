@extends('layout.main')
@section('title')
   {{ $post->title }}
@endsection
@section('css') @endsection
@section('section')
    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
        <div class="container" data-aos="fade-up">
            <article class="article">
    <div class="article-header">
        <div class="meta-categories" data-aos="fade-up">
            @foreach($post->tags as $tag)
                <a href="javascript:void(0)" class="category">{{ json_decode($tag->name, true)[App::getLocale()] }}</a>
            @endforeach
        </div>

        <h1 class="title" data-aos="fade-up" data-aos-delay="100">{{ $post->translation(App::getLocale())->title }}</h1>

        <div class="article-meta" data-aos="fade-up" data-aos-delay="200">
            <div class="author">
                <img src="{{ asset('assets/img/admin.png') }}" alt="Author" class="author-img">
                <div class="author-info">
                    <h4>{{ $post->user->name }}</h4>
                    <span>Super admin</span>
                </div>
            </div>
            <div class="post-info">
                <span><i class="bi bi-calendar4-week"></i> {{ $post->created_at->format('F j, Y') }}</span>
            </div>
        </div>
    </div>

    <!-- Moved Slider to Featured Image Position -->
    <div class="article-featured-image" data-aos="zoom-in">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": { "delay": 4000 },
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                            "768": { "slidesPerView": 1 },
                            "1200": { "slidesPerView": 1 }
                        }
                    }
                </script>

                <div class="swiper-wrapper">
                    @foreach(json_decode($post->images, true) as $image)
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="200">
                                <a href="{{ asset('storage/'.$image) }}" class="glightbox">
                                    <img src="{{ asset('storage/'.$image) }}" alt="Post Image" class="img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="article-wrapper" style="display: block">
        <div class="article-content">
            {!! $post->translation(App::getLocale())->content !!}
        </div>
    </div>
</article>
        </div>
    </section>
    <!-- /Blog Details Section -->

@endsection
@section('script')

@endsection
