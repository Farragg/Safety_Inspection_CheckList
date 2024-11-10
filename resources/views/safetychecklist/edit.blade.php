@extends('layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{__('site.editName', ['name' => $safety->inspectorName]) }}
                    <a href="{{ route('safety.index') }}" class="float-right btn-sm btn-success">@lang('site.viewAll')</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                    <form method="POST" action="{{ route('safety.update', $safety->id) }}" >
                                        @csrf
                                        @method('PATCH')
                                        <table class="table table-bordered" >
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <strong>1. General Work Environment</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> @lang('site.floorsClean')</th>
                                                <td class="text-center"> <input name="floor" type="radio" class="form-control" value="1" {{ old("floor", $safety->floor) == '1' ? 'checked' : '' }}>@lang('site.yes')</td>
                                                <td class="text-center"> <input name="floor" type="radio" class="form-control" value="0" {{ old("floor" , $safety->floor) == '0' ? 'checked' : '' }}>@lang('site.no')</td>
                                                <td> <textarea name="floor_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("floor_comment" , $safety->floor_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th> @lang('site.adequateLighting')</th>
                                                <td class="text-center"> <input name="lighting" type="radio" class="form-control" value="1" {{ old("lighting", $safety->lighting) == '1' ? 'checked' : '' }}>@lang('site.yes')</td>
                                                <td class="text-center"> <input name="lighting" type="radio" class="form-control" value="0" {{ old("lighting", $safety->lighting) == '0' ? 'checked' : '' }}>@lang('site.no')</td>
                                                <td> <textarea name="lighting_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("lighting_comment" , $safety->lighting_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th> @lang('site.emergency')</th>
                                                <td class="text-center"> <input name="emergency" type="radio" class="form-control" value="1" {{ old("emergency", $safety->emergency) == '1' ? 'checked' : '' }}>@lang('site.yes')</td>
                                                <td class="text-center"> <input name="emergency" type="radio" class="form-control" value="0" {{ old("emergency", $safety->emergency) == '0' ? 'checked' : '' }}>@lang('site.no')</td>
                                                <td> <textarea name="emergency_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("emergency_comment" , $safety->emergency_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <strong>2. Emergency Preparedness</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> @lang('site.fireExtinguishers')</th>
                                                <td class="text-center"> <input name="fireExtinguishers" type="radio" class="form-control" value="1" {{ old("fireExtinguishers", $safety->fireExtinguishers) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="fireExtinguishers" type="radio" class="form-control" value="0" {{ old("fireExtinguishers", $safety->fireExtinguishers) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="fireExtinguishers_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("fireExtinguishers_comment" , $safety->fireExtinguishers_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th> @lang('site.trainedEmployees')</th>
                                                <td class="text-center"> <input name="trained" type="radio" class="form-control" value="1" {{ old("trained", $safety->trained) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="trained" type="radio" class="form-control" value="0" {{ old("trained", $safety->trained) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="trained_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("trained_comment" , $safety->trained_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.firstAidkits')</th>
                                                <td class="text-center"> <input name="aidKits" type="radio" class="form-control" value="1" {{ old("aidKits", $safety->aidKits) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="aidKits" type="radio" class="form-control" value="0" {{ old("aidKits", $safety->emergency) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="aidKits_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("aidKits_comment" , $safety->aidKits_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.postedNumbers')</th>
                                                <td class="text-center"> <input name="contactNumbers" type="radio" class="form-control" value="1" {{ old("contactNumbers", $safety->contactNumbers) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="contactNumbers" type="radio" class="form-control" value="0" {{ old("contactNumbers", $safety->contactNumbers) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="contactNumbers_comment" placeholder="@lang('site.addComment')" class="form-control"> {{ old("contactNumbers_comment" , $safety->contactNumbers_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.smokeDetectors')</th>
                                                <td class="text-center"> <input name="detectors" type="radio" class="form-control" value="1" {{ old("detectors", $safety->detectors) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="detectors" type="radio" class="form-control" value="0" {{ old("detectors", $safety->detectors) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="detectors_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("detectors_comment" , $safety->detectors_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.sprinklerSystem')</th>
                                                <td class="text-center"> <input name="sprinklerSystem" type="radio" class="form-control" value="1" {{ old("sprinklerSystem", $safety->sprinklerSystem) == '1' ? 'checked' : '' }} {{ old("emergency", $safety->emergency) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="sprinklerSystem" type="radio" class="form-control" value="0" {{ old("sprinklerSystem", $safety->sprinklerSystem) == '0' ? 'checked' : '' }} {{ old("emergency", $safety->emergency) == '1' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="sprinklerSystem_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("sprinklerSystem_comment" , $safety->sprinklerSystem_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.emergencyEvacuation')</th>
                                                <td class="text-center"> <input name="evacuation" type="radio" class="form-control" value="1" {{ old("evacuation", $safety->evacuation) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="evacuation" type="radio" class="form-control" value="0" {{ old("evacuation", $safety->evacuation) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="evacuation_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("evacuation_comment" , $safety->evacuation_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.awarenessEmployees')</th>
                                                <td class="text-center"> <input name="employeesAwareness" type="radio" class="form-control" value="1" {{ old("employeesAwareness", $safety->employeesAwareness) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="employeesAwareness" type="radio" class="form-control" value="0" {{ old("employeesAwareness", $safety->employeesAwareness) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="employeesAwareness_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("employeesAwareness_comment" , $safety->employeesAwareness_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <strong>3. Personal Protective Equipment (PPE)</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.availablePPE')</th>
                                                <td class="text-center"> <input name="PPE" type="radio" class="form-control" value="1" {{ old("PPE", $safety->PPE) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="PPE" type="radio" class="form-control" value="0" {{ old("PPE", $safety->PPE) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="PPE_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("PPE_comment" , $safety->PPE_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.employeesTrainedPPE')</th>
                                                <td class="text-center"> <input name="trainedPPE" type="radio" class="form-control" value="1" {{ old("trainedPPE", $safety->trainedPPE) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="trainedPPE" type="radio" class="form-control" value="0" {{ old("trainedPPE", $safety->trainedPPE) == '0' ? 'checked' : '' }}>@lang('site.no')</td>
                                                <td><textarea name="trainedPPE_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("trainedPPE_comment" , $safety->trainedPPE_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <strong>4. Slips, Trips and Falls</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.trippingHazards')</th>
                                                <td class="text-center"> <input name="trippingHazards" type="radio" class="form-control" value="1" {{ old("trippingHazards", $safety->trippingHazards) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="trippingHazards" type="radio" class="form-control" value="0" {{ old("trippingHazards", $safety->trippingHazards) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="trippingHazards_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("trippingHazards_comment" , $safety->trippingHazards_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.floorsIdentification')</th>
                                                <td class="text-center"> <input name="safePassage" type="radio" class="form-control" value="1" {{ old("safePassage", $safety->safePassage) == '1' ? 'checked' : '' }}>@lang('site.yes') </td>
                                                <td class="text-center"> <input name="safePassage" type="radio" class="form-control" value="0" {{ old("safePassage", $safety->safePassage) == '0' ? 'checked' : '' }}>@lang('site.no') </td>
                                                <td><textarea name="safePassage_comment" placeholder="@lang('site.addComment')" class="form-control" >{{ old("safePassage_comment" , $safety->safePassage_comment) }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.date'): </th>
                                                <td> <input class="form-control fc-datepicker" name="date" placeholder="YYYY-MM-DD" type="date" value="{{ old("date", $safety->date) }}"></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.time'): </th>
                                                <td><input class="form-control fc-datepicker" name="time" placeholder="h:i A" type="time" value="{{ old("time", $safety->time) }}" required></td>
                                            </tr>
                                            <tr>
                                                <th>@lang('site.inspectorName'): </th>
                                                <td><input class="form-control" name="inspectorName" type="text" value="{{ old("inspectorName", $safety->inspectorName) }}"></td>
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
