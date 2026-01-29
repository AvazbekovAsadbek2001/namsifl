@extends('layout.main')

@section('title', $book->title . ' - Kitob haqida')

@section('section')
    <div class="container my-5">
        <!-- Orqaga qaytish -->
        <a href="{{ route('books.index') }}" class="btn btn-outline-secondary mb-4">
            ← Ro'yxatga qaytish
        </a>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="row g-0">
                <!-- Rasm chapda -->
                <div class="col-md-4 bg-light d-flex align-items-center justify-content-center p-4">
                    @if($book->cover_image)
                        <img src="{{ $book->cover_image }}"
                             class="img-fluid rounded shadow"
                             alt="{{ $book->title }}"
                             style="max-height: 480px; object-fit: contain;">
                    @else
                        <div class="text-center text-muted py-5">
                            <i class="bi bi-book fs-1"></i><br>
                            <small>Muqova rasmi yo'q</small>
                        </div>
                    @endif
                </div>

                <!-- Ma'lumotlar o'ngda -->
                <div class="col-md-8">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="card-title fw-bold mb-3">{{ $book->title }}</h2>
                        <h5 class="text-muted mb-4">
                            Muallif: <strong class="text-dark">{{ $book->author }}</strong>
                        </h5>

                        <hr class="my-4">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mb-5">
                            <div>
                                <strong class="d-block text-secondary small mb-1">Nashr yili</strong>
                                {{ $book->published_year ?? '—' }}
                            </div>
                            <div>
                                <strong class="d-block text-secondary small mb-1">Til</strong>
                                <span class="badge bg-info fs-6">
                                    {{ $book->language_name ?? strtoupper($book->language) }}
                                </span>
                            </div>
                            <div>
                                <strong class="d-block text-secondary small mb-1">Sahifalar</strong>
                                {{ $book->pages ? $book->pages . ' bet' : '—' }}
                            </div>
                            <div>
                                <strong class="d-block text-secondary small mb-1">ISBN</strong>
                                {{ $book->isbn ?? '—' }}
                            </div>
                            <div>
                                <strong class="d-block text-secondary small mb-1">Nashriyot</strong>
                                {{ $book->publisher ?? '—' }}
                            </div>
                            @if($book->category)
                                <div>
                                    <strong class="d-block text-secondary small mb-1">Kategoriya</strong>
                                    <span class="badge bg-secondary fs-6">{{ $book->category }}</span>
                                </div>
                            @endif
                        </div>

                        @if($book->description)
                            <h5 class="fw-semibold mb-3">Tavsif</h5>
                            <div class="text-secondary lh-lg" style="white-space: pre-line;">
                                {{ $book->description }}
                            </div>
                        @else
                            <p class="text-muted fst-italic mt-4">
                                Tavsif kiritilmagan.
                            </p>
                        @endif

                        <!-- Yuklab olish tugmasi – $book->file ishlatilmoqda -->
                        <div class="mt-5 pt-4 border-top">
                            @if($book->file)
                                <a href="{{ $book->file }}"
                                   class="btn btn-primary btn-lg d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-download"></i>
                                    Kitobni yuklab olish (PDF)
                                </a>
                            @else
                                <div class="alert alert-warning mb-0 d-inline-block">
                                    <i class="bi bi-exclamation-triangle me-2"></i>
                                    Yuklab olish uchun fayl mavjud emas
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
