@extends('admin.layout.main')
@section('title')
    Posts
@endsection
@section('css')
@endsection
@section('section')
    <div class="col-xl-12">
        <div class="card dz-card" id="bootstrap-table2">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                <div style="width: 100%">
                    <h2 class="card-title">
                        Posts
                        <a href="{{ route('admin.blog.posts.create') }}" class="btn btn-info shadow sharp me-1 float-end w-auto"> Add</a>
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
                                    <th> # </th>
                                    <th style="width: 30%"><strong>Title</strong></th>
                                    <th><strong>Image</strong></th>
                                    <th><strong>Categories</strong></th>
                                    <th><strong>Editor</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Langs</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $post['title'] }} </td>
                                            <td>
                                                <img src="{{ asset('storage/'.$post['image']) }}" width="100px">
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach($post['categories'] as $category)
                                                        <li>
                                                            {{ $category['title'] }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach($post['tags'] as $tag)
                                                        <li>
                                                            {{ $tag['title'] }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                {{ $post['editor'] }}
                                            </td>
                                            <td>
                                                {{ $post['status'] }}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
