
@extends('admin.layout.main')
@section('title')
    Menu
@endsection
@section('css')
    <link href="{{ asset('admin/vendor/nestable2/css/jquery.nestable.min.css') }}" rel="stylesheet">
@endsection
@section('section')
    <div class="row">
        <div class="col-4" style="height: min-content;">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Menu</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12s">
                            <div class="card-content">
                                @foreach(getLangs() as $lang)
                                    <div class="mb-2">
                                        <label class="form-label">Title ( {{ $lang->code }} )</label>
                                        <input type="text" name="name[{{ $lang->code }}]" class="form-control" required>
                                    </div>
                                @endforeach
                                <div class="mb-3">
                                    <label class="form-label">Url</label>
                                    <input type="url" name="url" class="form-control" required>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menu</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12s">
                            <div class="card-content">
                                <div class="nestable">
                                    <div class="dd" id="nestable" style="max-width: 100%;">
                                         @include('admin.menu.menu-item', ['menus' => $menus])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/nestable2/js/jquery.nestable.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins-init/nestable-init.js') }}"></script>
@endsection
