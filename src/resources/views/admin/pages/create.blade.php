@extends('admin.layout.main')
@section('title')
    Create page
@endsection
@section('css')
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
                                <label class="form-label">Description</label>
                                <div class="card-body custom-ekeditor">
                                    <div id="ckeditor"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/vendor/ckeditor/ckeditor.js') }}"></script>
@endsection
