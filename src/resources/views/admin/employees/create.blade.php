@extends('admin.layout.main')
@section('title')
    Create Employee
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
                    <h4 class="card-title">Create Employee <img src="{{ asset($lang->flag) }}" width="20px" style="margin-left: 10px"></h4>
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
                        <form action="{{ route('admin.employee.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang->code }}">
                        
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="birthday_data" class="form-label">Birthday data <span class="text-danger">*</span></label>
                                <input type="date" name="birth_date" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Phote <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="photo" id="photo" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="string" class="form-control" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Schedule days</label>
                                <select name="schedule_days" class="form-control">
                                    <option value="Dushanba - Juma">Dushanba - Juma</option>
                                    <option value="Dushanba - Shanba">Dushanba - Shanba</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Schedule time</label>
                                <input type="text" name="schedule_time" class="form-control" value="09:00 - 17:00">
                            </div>

                            <div class="mb-3">
                                <label for="nation" class="form-label">Nation <span class="text-danger">*</span></label>
                                <select name="nation_id" class="form-control" required>
                                    @foreach ($nations as $nation)
                                        <option value="{{ $nation->id }}">{{ json_decode($nation->name, true)['uz'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                <select name="position_id" class="form-control" required>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}">{{ json_decode($position->title, true)['uz'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="position" class="form-label">Position description</label>
                                <textarea class="form-control" name="position_description" rows="3"></textarea>
                            </div>
                            
                            <h5>Academic data</h5>

                            <hr>

                            <div class="mb-3">
                                <label class="form-label">Faculty</label>
                                <select name="faculty_id" class="form-control">
                                    <option value=""> Not selected</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <select name="department_id" class="form-control">
                                    <option value=""> Not selected</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cafedra</label>
                                <select name="cafedra_id" class="form-control">
                                    <option value="">Not selected</option>
                                </select>
                            </div>

                            <h5>Additional information</h5>

                            <div class="mb-3">
                                <label for="biography" class="form-label">Biography</label>
                                <textarea class="form-control" name="biography" id="biography" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="work_experience" class="form-label">Work_experience</label>
                                <textarea class="form-control" name="work_experience" id="work_experience" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="functional_duties" class="form-label">Functional duties</label>
                                <textarea class="form-control" name="functional_duties" id="functional_duties" rows="3"></textarea>
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
