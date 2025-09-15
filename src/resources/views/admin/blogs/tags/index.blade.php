@extends('admin.layout.main')
@section('title')
    Tags
@endsection
@section('css')
@endsection
@section('section')
<div class="row">
    <div class="col-xl-7">
        <div class="card dz-card" id="bootstrap-table2">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                <div style="width: 100%">
                    <h2 class="card-title">
                        Tags
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
                                        <th style="width: 30%"><strong>Name</strong></th>
                                        <th><strong></strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td >
                                                <strong>{{ $tag->name }}</strong>
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
        </div>
    </div>
    <div class="col-xl-5 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Tag</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.blog.tag.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="name" class="form-control input-default" placeholder="Tag title" required>
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
@endsection
