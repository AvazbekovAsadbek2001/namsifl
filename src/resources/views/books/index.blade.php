@extends('layout.main')
@section('title')
    Axborot resurs markazi
@endsection
@section('section')
     <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0 first-letter-uppercase">Axborot resurs markazi</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">@lang('contact.home')</a></li>
            <li class="current first-letter-uppercase">Axborot resurs markazi</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">O'quv uslubiy majmualar</h2>

        @if($books->isEmpty())
            <div class="alert alert-info text-center">
                Hozircha kitoblar yo‘q
            </div>
        @else
            <div class="table-responsive shadow-sm rounded">
    <table class="table table-hover table-bordered align-middle">
        <thead class="table-secondary text-center">
            <tr>
                <th scope="col" class="col-1 text-center">#</th>
                <th scope="col" class="col-2 text-center">Muqova</th>
                <th scope="col" class="col-4">Kitob nomi</th>
                <th scope="col" class="col-3">Muallif</th>
                <th scope="col" class="col-1">Yil</th>
                <th scope="col" class="col-1">Til</th>
                <th scope="col" class="col-2">Kategoriya</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td class="text-center fw-bold">{{ $loop->iteration }}</td>

                    <!-- Rasm ustuni -->
                    <td class="text-center p-2">
                        @if($book->cover_image)
                            <img src="{{ $book->cover_image }}"
                                 alt="{{ $book->title }}"
                                 class="img-thumbnail rounded"
                                 style="width: 80px; height: 110px; object-fit: cover; border: 1px solid #dee2e6;">
                        @else
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                 style="width: 80px; height: 110px; font-size: 2rem; color: #adb5bd;">
                                <i class="bi bi-book"></i>
                            </div>
                        @endif
                    </td>

                    <!-- Kitob nomi (link bilan) -->
                    <td>
                        <a href="{{ route('books.show', $book->id) }}"
                           class="text-decoration-none fw-medium text-primary">
                            {{ $book->title }}
                        </a>
                    </td>

                    <td>{{ $book->author }}</td>

                    <td class="text-center">{{ $book->published_year ?? '—' }}</td>

                    <td class="text-center">
                        <span class="badge bg-info">
                            {{ $book->language_name ?? strtoupper($book->language) }}
                        </span>
                    </td>

                    <td class="text-center">
                        @if($book->category)
                            <span class="badge bg-secondary">{{ $book->category }}</span>
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $books->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
@endsection
