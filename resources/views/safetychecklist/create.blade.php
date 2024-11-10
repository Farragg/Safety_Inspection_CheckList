@extends('layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@lang('site.addCheckList')
                    <a href="{{ url('safety') }}" class="float-right btn-sm btn-success">@lang('site.viewAll')</a>
                </h6>
            </div>
            <div class="card-body">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif

                @if(Session::has('success'))
                    <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="container">
                    <h1 class="text-center mb-4">@lang('site.dailySafetyCheckList')</h1>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form method="POST" action="{{ route('safety.store') }}">
                                @csrf
                                @method('POST')
                                <table class="table table-bordered" >
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <strong>1. General Work Environment</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.floorsClean')</th>
                                        <td class="text-center"> <input name="floor" type="radio" class="form-control" value="1">@lang('site.yes')</td>
                                        <td class="text-center"> <input name="floor" type="radio" class="form-control" value="0">@lang('site.no')</td>
                                        <td> <textarea name="floor_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th> @lang('site.adequateLighting')</th>
                                        <td class="text-center"> <input name="lighting" type="radio" class="form-control" value="1">@lang('site.yes')</td>
                                        <td class="text-center"> <input name="lighting" type="radio" class="form-control" value="0">@lang('site.no')</td>
                                        <td> <textarea name="lighting_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.emergency')</th>
                                        <td class="text-center"> <input name="emergency" type="radio" class="form-control" value="1">@lang('site.yes')</td>
                                        <td class="text-center"> <input name="emergency" type="radio" class="form-control" value="0">@lang('site.no')</td>
                                        <td> <textarea name="emergency_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <strong>2. Emergency Preparedness</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.fireExtinguishers')</th>
                                        <td class="text-center"> <input name="fireExtinguishers" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="fireExtinguishers" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="fireExtinguishers_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.trainedEmployees')</th>
                                        <td class="text-center"> <input name="trained" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="trained" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="trained_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.firstAidkits')</th>
                                        <td class="text-center"> <input name="aidKits" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="aidKits" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="aidKits_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.postedNumbers')</th>
                                        <td class="text-center"> <input name="contactNumbers" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="contactNumbers" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="contactNumbers_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.smokeDetectors')</th>
                                        <td class="text-center"> <input name="detectors" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="detectors" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="detectors_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.sprinklerSystem')</th>
                                        <td class="text-center"> <input name="sprinklerSystem" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="sprinklerSystem" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="sprinklerSystem_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.emergencyEvacuation')</th>
                                        <td class="text-center"> <input name="evacuation" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="evacuation" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="evacuation_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.awarenessEmployees')</th>
                                        <td class="text-center"> <input name="employeesAwareness" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="employeesAwareness" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="employeesAwareness_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <strong>3. Personal Protective Equipment (PPE)</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.availablePPE')</th>
                                        <td class="text-center"> <input name="PPE" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="PPE" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="PPE_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.employeesTrainedPPE')</th>
                                        <td class="text-center"> <input name="trainedPPE" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="trainedPPE" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="trainedPPE_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <strong>4. Slips, Trips and Falls</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.trippingHazards')</th>
                                        <td class="text-center"> <input name="trippingHazards" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="trippingHazards" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="trippingHazards_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.floorsIdentification')</th>
                                        <td class="text-center"> <input name="safePassage" type="radio" class="form-control" value="1">@lang('site.yes') </td>
                                        <td class="text-center"> <input name="safePassage" type="radio" class="form-control" value="0">@lang('site.no') </td>
                                        <td><textarea name="safePassage_comment" placeholder="@lang('site.addComment')" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.date'): </th>
                                        <td> <input class="form-control fc-datepicker" name="date" placeholder="YYYY-MM-DD" type="date" required></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.time'): </th>
                                        <td><input class="form-control fc-datepicker" name="time" placeholder="h:i A" type="time" required></td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.inspectorName'): </th>
                                        <td><input class="form-control" name="inspectorName" type="text" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" class="btn btn-primary"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
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
