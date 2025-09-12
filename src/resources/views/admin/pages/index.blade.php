@extends('admin.layout.main')
@section('title')
    Pages
@endsection
@section('css')
@endsection
@section('section')
    <div class="col-xl-12">
        <div class="card dz-card" id="bootstrap-table2">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                <div style="width: 100%">
                    <h2 class="card-title">
                        Pages
                        <a href="{{ route('admin.pages.create') }}" class="btn btn-info shadow sharp me-1 float-end w-auto"> Add</a>
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
                                    <th>
                                        #
                                    </th>
                                    <th style="width: 30%"><strong>Title</strong></th>
                                    <th><strong>Url</strong></th>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($pages as $page)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td >
                                                <strong>{{ $page->title }}</strong>
                                            </td>
                                            <td><a href="{{ config('app.url').'/'.$page->url }}">{{ config('app.url').'/'.$page->url }}</a></td>
                                            <td>{{ $page->created_at }}</td>
                                            <td>
                                                <div class="form-check custom-checkbox checkbox-primary check-lg me-3">
                                                    <input type="checkbox" class="form-check-input" id="checkAll" @if($page->is_active) checked @endif>
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /tab-content -->

        </div>
    </div>
@endsection
@section('script')
@endsection
