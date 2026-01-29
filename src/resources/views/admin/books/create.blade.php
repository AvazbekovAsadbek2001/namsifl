@extends('admin.layout.main')
@section('title')
    Create page
@endsection
@section('css')
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    <style>
        .cke_notification_warning {
            display: none !important;
        }
    </style>
@endsection
@section('section')
    <div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Book</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-8">
                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        name="title"
                                        class="form-control input-default"
                                        value="{{ old('title') }}"
                                        placeholder="Book title"
                                        required>
                                </div>

                                <!-- Author -->
                                <div class="mb-3">
                                    <label class="form-label">Author <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        name="author"
                                        class="form-control input-default"
                                        value="{{ old('author') }}"
                                        placeholder="Author name"
                                        required>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea
                                        class="form-textarea form-control"
                                        rows="5"
                                        name="description"
                                        placeholder="Book description">{{ old('description') }}</textarea>
                                </div>

                                <!-- Row: ISBN & Published Year -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">ISBN</label>
                                            <input
                                                type="text"
                                                name="isbn"
                                                class="form-control"
                                                value="{{ old('isbn') }}"
                                                placeholder="978-0-00-000000-0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Published Year</label>
                                            <input
                                                type="number"
                                                name="published_year"
                                                class="form-control"
                                                value="{{ old('published_year') }}"
                                                min="1000"
                                                max="{{ date('Y') }}"
                                                placeholder="{{ date('Y') }}">
                                        </div>
                                    </div>
                                </div>

                                <!-- Row: Publisher & Pages -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Publisher</label>
                                            <input
                                                type="text"
                                                name="publisher"
                                                class="form-control"
                                                value="{{ old('publisher') }}"
                                                placeholder="Publisher name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Pages</label>
                                            <input
                                                type="number"
                                                name="pages"
                                                class="form-control"
                                                value="{{ old('pages') }}"
                                                min="1"
                                                placeholder="Number of pages">
                                        </div>
                                    </div>
                                </div>

                                <!-- Row: Language & Category -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Language <span class="text-danger">*</span></label>
                                            <select name="language" class="form-control default-select" required>
                                                <option value="uz" {{ old('language') == 'uz' ? 'selected' : '' }}>O'zbek</option>
                                                <option value="ru" {{ old('language') == 'ru' ? 'selected' : '' }}>Русский</option>
                                                <option value="en" {{ old('language') == 'en' ? 'selected' : '' }}>English</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <input
                                                type="text"
                                                name="category"
                                                class="form-control"
                                                value="{{ old('category') }}"
                                                placeholder="e.g., Badiiy adabiyot, Ilmiy">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-4">
                                <!-- Cover Image -->
                                <div class="mb-3">
                                    <label class="form-label">Cover Image</label>
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div id="imagePreview" style="min-height: 200px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 5px; margin-bottom: 10px;">
                                                <span class="text-muted">
                                                    <i class="fas fa-image fa-3x mb-2"></i>
                                                    <br>No image selected
                                                </span>
                                            </div>
                                            <input
                                                type="file"
                                                name="cover_image"
                                                id="coverImageInput"
                                                class="form-control"
                                                accept="image/*"
                                                onchange="previewImage(this)">
                                            <small class="text-muted">JPG, PNG, GIF (max 2MB)</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">File <span class="text-danger">*</span></label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <!-- Info Box -->
                                <div class="alert alert-info">
                                    <h6 class="alert-heading">
                                        <i class="fas fa-info-circle"></i> Note
                                    </h6>
                                    <small>
                                        Fields marked with <span class="text-danger">*</span> are required.
                                        <br><br>
                                        Price and Stock are optional. Leave empty if not needed.
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-3 mt-4">
                            <button type="submit" class="btn btn-primary me-2">
                                <i class="fas fa-save"></i> Save Book
                            </button>
                            <a href="{{ route('admin.book.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function previewImage(input) {
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" style="max-width: 100%; max-height: 300px; object-fit: contain; border-radius: 5px;">';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.innerHTML = '<span class="text-muted"><i class="fas fa-image fa-3x mb-2"></i><br>No image selected</span>';
            }
        }

        CKEDITOR.replace('editor1', {
            extraPlugins: 'uploadimage',
            filebrowserUploadUrl: "{{ route('admin.file-upload') }}?type=file",
            imageUploadUrl: "{{ route('admin.file-upload') }}?type=image",
            fileTools_requestHeaders: {
                'X-CSRF-TOKEN': csrfToken
            },
            toolbarGroups: [
                { name: 'document', groups: ['mode', 'document', 'doctools'] },
                { name: 'clipboard', groups: ['clipboard', 'undo'] },
                { name: 'editing', groups: ['find', 'selection', 'spellchecker'] },
                { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi'] },
                { name: 'links' },
                { name: 'insert' },
                { name: 'styles' },
                { name: 'colors' },
                { name: 'tools' },
                { name: 'others' },
                { name: 'about' }
            ],
            removeButtons: 'Subscript,Superscript,Save,NewPage,Preview,Print,Templates,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Flash,Smiley,PageBreak,Iframe,Anchor,Language,BidiLtr,BidiRtl',
        });
    </script>
@endsection
