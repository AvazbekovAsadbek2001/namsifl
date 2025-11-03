@extends('admin.layout.main')
@section('title')
    Employees
@endsection
@section('css')
@endsection
@section('section')
    <div class="col-xl-12">
        <div class="card dz-card" id="bootstrap-table2">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                <div style="width: 100%">
                    <h2 class="card-title">
                        Employees
                        <a href="{{ route('admin.employee.create', ['lang' => 'uz']) }}" class="btn btn-info shadow sharp me-1 float-end w-auto"> Add</a>
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
                                    <th><strong>Phote</strong></th>
                                    <th><strong>Position</strong></th>
                                    <th><strong>Schedule</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>
                                                <img src="{{ asset('storage/'.$employee->photo) }}" alt="" width="100">
                                            </td>
                                            <td>{{ json_decode($employee->position->title, true)['uz'] }}</td>
                                            <td>{{ $employee->schedule_days. " ". $employee->schedule_time }}</td>
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
