@extends('layout.main')
@section('title')

@endsection
@section('section')
    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">Kitoblar ro‘yxati</h2>

        @if($books->isEmpty())
            <div class="alert alert-info text-center">
                Hozircha kitoblar yo‘q
            </div>
        @else
            <div class="table-responsive shadow-sm rounded">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" class="col-1">#</th>
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
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ route('books.show', $book->id) }}" class="text-decoration-none text-primary fw-medium">
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
                                <td>
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
