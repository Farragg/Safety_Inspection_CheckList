@extends('layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@lang('site.checkLists')
                    <a href="{{ route('safety.create') }}" class="float-right btn-sm btn-success">@lang('site.addNew')</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('site.name')</th>
                            <th>@lang('site.date')</th>
                            <th>@lang('site.time')</th>
                            <th>@lang('site.totalYesAnswers')</th>
                            <th>@lang('site.totalNoAnswers')</th>
                            <th>@lang('site.actions')</th>
                        </tr>
                        </thead>
                        @if($checklist)
                            <?php $i=0; ?>
                            @foreach($checklist as $c)
                                <?php $i++;?>
                                <tbody>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ $c->inspectorName }}</td>
                                    <td>{{ $c->date }}</td>
                                    <td>{{ $c->formatted_time }}</td>
                                    <td>{{ $c->yes_checked_count }}</td>
                                    <td>{{ $c->no_checked_count }}</td>
                                    <td>
                                        <a href="{{ route('safety.show', $c->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{ url('safety/' . $c->id) . '/edit'}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <a onclick="return confirm('@lang('site.deleteInsurance')')" href="{{ url('safety/' . $c->id . '/delete') }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection


@section('scripts')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
