@extends('admin.layout.main')
@section('title')
    Message
@endsection
@section('css')
@endsection
@section('section')
    <div class="col-xl-12">
        <div class="card dz-card" id="bootstrap-table2">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                <div style="width: 100%">
                    <h2 class="card-title">
                        Message
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
                                    @if ($id == 1)
                                        <th><strong>Subject</strong></th>
                                        <th><strong>Email</strong></th>
                                    @endif
                                    <th><strong>Create time</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Message</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $item)
                                        <tr>
                                            <td>
                                                <strong>{{ $item->id }}</strong>
                                            </td>
                                            @if ($id == 1)
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->email }}</td>
                                            @endif
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                @if($item->status == 1)
                                                    <span class="badge badge-success">Read</span>
                                                @else
                                                    <span class="badge badge-danger">Unread</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->message }}
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
