@extends('admin.layout.main')
@section('title')
    Departments
@endsection
@section('css')
@endsection
@section('section')
    <div class="col-xl-12">
        <div class="card dz-card" id="bootstrap-table2">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                <div style="width: 100%">
                    <h2 class="card-title">
                        Departments
                        <a href="{{ route('admin.structure.departments.create', ['lang' => 'uz']) }}" class="btn btn-info shadow sharp me-1 float-end w-auto"> Add</a>
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
                                    <th>#</th>
                                    <th style="width: 30%"><strong>Name</strong></th>
                                    <th><strong>Image</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($departments as $item)
                                       <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>{{ json_decode($item->name, true)[App::getLocale()] }}</td>
                                             <td>
                                                @if ($item->icon)
                                                    <img src="{{ asset('storage/'.$item->icon) }}" alt="" width="100">
                                                @endif
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
