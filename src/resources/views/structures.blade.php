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
    <section id="academics" class="academics section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row mb-5">
          <div class="col-lg" data-aos="fade-left" data-aos-delay="300">
            <div class="row key-metrics g-4">
                @foreach ($structures as $item)
                    <div class="col-6">
                        <div class="metric-card">
                        <h2>{{ json_decode($item->name, true)[App::getLocale()] }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>

@endsection
@section('script')

@endsection
