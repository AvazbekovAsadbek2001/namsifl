@extends('layout.main')
@section('title')
   {{ $data->title}}
@endsection
@section('section')
    <section id="privacy" class="privacy section">

        <div class="container" data-aos="fade-up">
            {!! $data->content !!}
        </div>
    </section>
@endsection
