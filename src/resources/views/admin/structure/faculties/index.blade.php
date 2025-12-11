@extends('admin.layout.main')
@section('title')
    Faculties
@endsection
@section('css')
@endsection
@section('section')
    <div class="col-xl-12">
        <div class="card dz-card" id="bootstrap-table2">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                <div style="width: 100%">
                    <h2 class="card-title">
                        Faculties
                        <a href="{{ route('admin.structure.faculties.create', ['lang' => 'uz']) }}" class="btn btn-info shadow sharp me-1 float-end w-auto"> Add</a>
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
                                    {{-- @foreach($employees as $employee)
                                       
                                    @endforeach --}}
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
