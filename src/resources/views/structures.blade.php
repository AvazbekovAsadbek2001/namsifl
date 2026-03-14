@extends('layout.main')
@section('title')
    Namangan davlat chet tillari instituti
@endsection
@section('css')

@endsection
@section('page-title')
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">{{ $name }}</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">{{ $name }}</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('section')
    <!-- Academics Section -->
    <section id="academics" class="academics section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="faculty-section">
                <div class="section-header text-center mb-5" data-aos="fade-up" data-aos-delay="200">
                    <h3>{{ $name }}</h3>
                </div>

                <div class="row g-4">
                    @foreach ($employees as $item)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="faculty-card" style="cursor: pointer" onclick="window.location.href='{{ route('employee', ['id' => $item->id]) }}'">
                                <div class="faculty-img">
                                    <img src="{{ asset('storage/'.$item->photo) }}" class="img-fluid">
                                </div>
                                <div class="faculty-content">
                                    <h4>{{ $item->name }}</h4>
                                    <p class="faculty-position">
                                        {{ json_decode($item->position_description, true)[App::getLocale()] }}
                                    </p>
                                    <div class="faculty-social">
                                        @foreach (json_decode($item->social_medias, true) as $key => $media)
                                            @switch($key)
                                                @case('email')
                                                    <a href="mailto:{{ $media }}"><i class="bi bi-envelope"></i></a>
                                                    @break
                                                @case('phone')
                                                    <a href="tel:{{ $media }}"><i class="bi bi-telephone"></i></a>
                                                    @break
                                                @default
                                            @endswitch
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /Academics Section -->
@endsection
@section('script')@endsection
