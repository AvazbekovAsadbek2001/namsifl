@extends('admin.layout.main')
@section('title')
    Books
@endsection
@section('section')
    <div class="col-xl-12">
    <div class="card dz-card" id="bootstrap-table2">
        <div class="card-header flex-wrap d-flex justify-content-between border-0">
            <div style="width: 100%">
                <h2 class="card-title">
                    Books
                    <a href="{{ route('admin.book.create') }}" class="btn btn-info shadow sharp me-1 float-end w-auto">
                        <i class="fas fa-plus"></i> Add Book
                    </a>
                </h2>
            </div>
        </div>

        <!-- tab-content -->
        <div class="tab-content" id="myTabContent-1">
            <div class="tab-pane fade show active" id="bordered" role="tabpanel" aria-labelledby="home-tab-1">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 5%"><strong>Image</strong></th>
                                    <th style="width: 25%"><strong>Title</strong></th>
                                    <th><strong>Author</strong></th>
                                    <th><strong>Category</strong></th>
                                    <th><strong>Actions</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($books as $book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <!-- Image -->
                                        <td>
                                            @if($book->cover_image)
                                                <img src="{{ $book->cover_image  }}"
                                                     alt="{{ $book->title }}"
                                                     class="rounded"
                                                     style="width: 50px; height: 70px; object-fit: cover;">
                                            @else
                                                <img src="{{ asset('images/default-book-cover.jpg') }}"
                                                     alt="No image"
                                                     class="rounded"
                                                     style="width: 50px; height: 70px; object-fit: cover;">
                                            @endif
                                        </td>

                                        <!-- Title -->
                                        <td>
                                            <strong>{{ Str::limit($book->title, 50) }}</strong>
                                            @if($book->isbn)
                                                <br><small class="text-muted">ISBN: {{ $book->isbn }}</small>
                                            @endif
                                        </td>

                                        <!-- Author -->
                                        <td>{{ $book->author }}</td>

                                        <!-- Category -->
                                        <td>
                                            @if($book->category)
                                                <span class="badge badge-primary light">{{ $book->category }}</span>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <!-- Actions -->
                                        <td>
                                            <div class="d-flex">
                                                <!-- View -->
                                                {{-- <a href="{{ route('admin.books.show', $book->id) }}"
                                                   class="btn btn-primary shadow btn-xs sharp me-1"
                                                   title="View">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <!-- Edit -->
                                                <a href="{{ route('admin.books.edit', $book->id) }}"
                                                   class="btn btn-info shadow btn-xs sharp me-1"
                                                   title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <!-- Delete -->
                                                <form action="{{ route('admin.books.destroy', $book->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Are you sure you want to delete this book?');"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-danger shadow btn-xs sharp"
                                                            title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center py-5">
                                            <div class="text-muted">
                                                <i class="fas fa-book fa-3x mb-3"></i>
                                                <p class="mb-0">No books found</p>
                                                <a href="{{ route('admin.book.create') }}" class="btn btn-primary btn-sm mt-2">
                                                    Add First Book
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($books->hasPages())
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="dataTables_info">
                                Showing {{ $books->firstItem() }} to {{ $books->lastItem() }} of {{ $books->total() }} entries
                            </div>
                            <div class="dataTables_paginate">
                                {{ $books->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /tab-content -->
    </div>
</div>
@endsection
@section('script')
@endsection
