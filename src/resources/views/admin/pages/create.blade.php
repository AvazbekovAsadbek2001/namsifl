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
        <div class="col-xl-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Page</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.pages.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control input-default" placeholder="Page title" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Url</label>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">{{ config('app.url').'/' }}</span>
                                    <input type="text" name="url" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-textarea form-control" rows="8" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" id="editor1" rows="10" cols="80" required>
                                    This is my textarea with image upload capability.
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
