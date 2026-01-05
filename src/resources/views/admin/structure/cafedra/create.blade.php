@extends('admin.layout.main')
@section('title')
    Create Faculty
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
                    <h4 class="card-title">Create Cafedra <img src="{{ asset($lang->flag) }}" width="20px" style="margin-left: 10px"></h4>
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
                        <form action="{{ route('admin.structure.cafedra.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang->code }}">
                        
                            <div class="mb-3">
                                <label for="name" class="form-label">Faculty <span class="text-danger">*</span></label>
                                <select name="faculty_id" class="default-select form-control">
                                    @foreach ($faculties as $faculty)
                                        <option value="{{ $faculty->id }}">{{ json_decode($faculty->name, true)[App::getLocale()] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Icon <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="icon" id="name" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="functional_duties" class="form-label">About</label>
                                <textarea class="form-control" name="content" id="functional_duties" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const editorConfig = {
        extraPlugins: 'uploadimage',
        filebrowserUploadUrl: "{{ route('admin.file-upload') }}?type=file",
        imageUploadUrl: "{{ route('admin.file-upload') }}?type=image",
        fileTools_requestHeaders: { 'X-CSRF-TOKEN': csrfToken },
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
    };


    ['biography', 'work_experience', 'functional_duties'].forEach(id => {
        if (document.getElementById(id)) {
            CKEDITOR.replace(id, editorConfig);
        }
    });
</script>
@endsection
