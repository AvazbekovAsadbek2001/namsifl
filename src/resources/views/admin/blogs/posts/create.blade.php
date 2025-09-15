@extends('admin.layout.main')
@section('title')
    Create post
@endsection
@section('css')
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">
    <style>
        .cke_notification_warning {
            display: none !important;
        }
        /* Minimal admin-style tweaks */
        .dropzone {
            border: 2px dashed #6c757d;
            border-radius: .25rem;
            background: #f8f9fa;
        }
        .dz-message {
            font-weight: 500;
            color: #6c757d;
        }
        
        
    </style>
@endsection
@section('section')
<form action="{{ route('admin.blog.posts.store') }}" method="post" enctype="multipart/form-data" class="row">    
    <div class="col-12 col-lg-8 col-xxl-8">
        <div class="card">
        @csrf
            <div class="card-header">
                <h4 class="card-title">Create Post</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">    
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control input-default" placeholder="Page title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-textarea form-control" rows="8" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" id="editor1" rows="10" cols="80" required>
                            
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Images</label>
                        <div id="multiDropzone" class="dropzone"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-4">
        <div class="row">
            <div class="col-12">
                <div class="card" style="max-height: 500px;">
                    <div class="card-header">
                        <h4 class="card-title">Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card" style="max-height: 500px;">
                <div class="card-header">
                    <h4 class="card-title">Tags</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        
                    </div>
                </div>
            </div>
            </div>
            <div class="col-12">
                <div class="card" style="max-height: 500px;">
                <div class="card-header">
                    <h4 class="card-title">Image</h4>
                </div>
                <div class="card-body">
                    <div style="width: 200px; margin: auto;">
                        <div id="singleDropzone" class="dropzone">

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
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

        // Dropzone’ni avtomatik form qidirishini o‘chirib qo‘yamiz
        Dropzone.autoDiscover = false;

        // Bitta rasm uchun
        new Dropzone("#singleDropzone", {
            url: "/upload-single",
            paramName: "file",
            maxFilesize: 5,
            maxFiles: 1,
            acceptedFiles: "image/*",
            addRemoveLinks: true,
            dictDefaultMessage: "Profil rasmini bu yerga tashlang yoki tanlang",
            init: function () {
                this.on("maxfilesexceeded", function (file) {
                    this.removeAllFiles(this.files[0]);
                    this.addFile(file);
                });
            }
        });

        // Ko‘p rasm uchun
        new Dropzone("#multiDropzone", {
            url: "/upload-multiple",
            paramName: "files",
            maxFilesize: 10,
            acceptedFiles: "image/*",
            addRemoveLinks: true,
            dictDefaultMessage: "Bir nechta rasmlarni bu yerga tashlang yoki tanlang"
        });
    </script>
@endsection
