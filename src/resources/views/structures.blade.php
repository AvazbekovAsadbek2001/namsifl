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
    <section id="news-posts" class="news-posts section pb-0">
        <div class="container section-title aos-init aos-animate pb-0" data-aos="fade-up">
            <h2>{{ $name }}</h2>
        </div>
    </section>

    <section id="campus-facilities" class="campus-facilities section">

     <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <!-- Facilities Categories Grid -->
        <div class="facilities-grid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

            @foreach ($structures as $item)
                @if ($name == "Fakultetlar")
                    @if (isset(json_decode($item->name, true)[App::getLocale()]))
                        <a href="{{ route('faculty_detail', [$item->id]) }}" class="category-card academic aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card-content mt-5">
                                <div class="facility-image">
                                    <center>
                                        <img src="{{ asset('storage/'.$item->icon) }}" width="auto" height="100px" alt="facility">
                                    </center>
                                </div>
                            </div>
                            <div class="card-header m-2">
                                <h3>{{ json_decode($item->name, true)[App::getLocale()] }}</h3>
                            </div>
                        </>
                    @endif
                @elseif ($name == "Markazlar va bo'limlar")
                    @if (isset(json_decode($item->name, true)[App::getLocale()]))
                        <a href="{{ route('department_detail', [$item->id]) }}" class="category-card academic aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

                        <div class="card-header m-2">
                            <h3>{{ json_decode($item->name, true)[App::getLocale()] }}</h3>
                        </div>
                    </>
                    @endif
                @endif
            @endforeach
        </div>
    </div>

    </section>
@endsection
@section('script')

@endsection
