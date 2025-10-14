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
<form action="{{ route('admin.blog.posts.store') }}" method="post" enctype="multipart/form-data" class="row" id="postForm">
    @csrf
    <div class="col-12 col-lg-9 col-xxl-8">
        <div class="card">
        @csrf
            <div class="card-header">
                <h4 class="card-title">Create Post <img src="{{ asset($lang->flag) }}" width="20px" style="margin-left: 10px"> </h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <input type="hidden" name="lang" value="{{ $lang->code }}">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control input-default" placeholder="Post title" required>
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
                    @if (!isset($post))
                        <div class="mb-3">
                            <label class="form-label">Images</label>
                            <div id="multiDropzone" class="dropzone"></div>
                        </div>
                    @else
                        <input type="hidden" name="post" value="{{ $post->id }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if (!isset($post))
        <div class="col-12 col-lg-3 col-xxl-4">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="max-height: 500px;">
                        <div class="card-header">
                            <h4 class="card-title">Categories</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <table>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td width="30px">
                                                <input type="checkbox" name="categories[]" id="category-{{ $category->id }}" value="{{ $category->id }}">
                                            </td>
                                            <td>{{json_decode($category->name)->en }}</td>
                                        </tr>
                                    @endforeach
                                </table>
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
                            <table>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td width="30px">
                                            <input type="checkbox" name="tags[]" id="tag-{{ $tag->id }}" value="{{ $tag->id }}">
                                        </td>
                                        <td>{{ json_decode($tag->name)->en }}</td>
                                    </tr>
                                @endforeach
                            </table>
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
                                <div id="singleDropzone" class="dropzone"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
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

        Dropzone.autoDiscover = false;

        const singleDropzone = new Dropzone("#singleDropzone", {
            url: "{{ route('admin.file-upload') }}?type=image",
            autoProcessQueue: false,
            paramName: "featured_image",
            maxFilesize: 50,
            maxFiles: 1,
            acceptedFiles: "image/*",
            addRemoveLinks: true,
            dictDefaultMessage: "Drag and drop or select a profile picture here",
            dictFileTooBig: "File size is too large (maximum 50 MB)",
            dictInvalidFileType: "Only image files are accepted",
            dictRemoveFile: "Delete",
            previewTemplate: `
                <div class="dz-preview dz-file-preview" style="display:inline-block; margin:10px;">
                    <div class="dz-image" style="border-radius:12px; overflow:hidden;">
                        <img data-dz-thumbnail style="width:120px; height:120px; object-fit:cover; border-radius:12px;" />
                    </div>
                </div>
            `,
            init: function () {
                this.on("maxfilesexceeded", function (file) {
                    this.removeAllFiles(this.files[0]);
                    this.addFile(file);
                });
            }
        });

        const multiDropzone = new Dropzone("#multiDropzone", {
            url: "{{ route('admin.file-upload') }}?type=image",
            autoProcessQueue: false,
            paramName: "images",
            maxFilesize: 300,
            acceptedFiles: "image/*",
            addRemoveLinks: true,

            previewsContainer: "#multiDropzone",
            previewTemplate: `
                <div class="dz-preview dz-file-preview" style="display:inline-block; margin:10px;">
                    <div class="dz-image" style="border-radius:12px; overflow:hidden;">
                        <img data-dz-thumbnail style="width:120px; height:120px; object-fit:cover; border-radius:12px;" />
                    </div>
                </div>
            `,

            dictDefaultMessage: `
                <i class="bi bi-cloud-arrow-up" style="font-size:2rem;color:#3b82f6;"></i>
                <p style="margin-top:8px; color:#64748b;">Drag & drop or click to upload multiple images</p>
            `,
            dictFileTooBig: "File is too large (max 300 MB)",
            dictInvalidFileType: "Only image files are allowed",
            dictRemoveFile: "Delete",
        });

        document.querySelector("#postForm").addEventListener("submit", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const form = this;
            const formData = new FormData(form);

            formData.set('content', CKEDITOR.instances.editor1.getData());

            multiDropzone.files.forEach(function (file) {
                formData.append("images[]", file);
            });

            if (singleDropzone.files.length > 0) {
                formData.append("featured_image", singleDropzone.files[0]);
            }
            fetch(form.action, {
                method: form.method,
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                }
            }).then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = "{{ route('admin.blog.posts.index') }}";
                    } else {
                        alert("Xato yuz berdi: " + data.message);
                    }
                }).catch(error => {
                console.error('Xato:', error);
                alert("Server xatosi yuz berdi.");
            });
        });
    </script>
@endsection
