@extends('admin.layout.main')
@section('title')
    Create page
@endsection
@section('css')
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
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
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control input-default" placeholder="Page title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Url</label>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">{{ config('app.url').'/' }}</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-textarea form-control" rows="8" ></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="editor1" id="editor1" rows="10" cols="80">
                                    This is my textarea with image upload capability.
                                </textarea>
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
        CKEDITOR.replace('editor1', {
            extraPlugins: 'uploadimage',
            filebrowserUploadUrl: '/upload', // Backend URL for image upload (to be implemented)
            imageUploadUrl: '/upload' // Backend URL for image upload (to be implemented)
        });
    </script>
@endsection
