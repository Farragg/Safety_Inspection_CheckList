@extends('layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@lang('site.show')
                    <a href="{{ route('safety.index') }}" class="float-right btn-sm btn-success">@lang('site.viewAll')</a>
                </h6>
            </div>
            <div class="card-body">
                <h1 class="text-center mb-4">@lang('site.dailySafetyCheckList')</h1>
                <div class="card shadow-sm">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td colspan="4" class="text-center">
                                    <strong>1. General Work Environment</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('site.floorsClean')</th>
                                <td class="text-center form-control">{{ $safetyCheckList->floor == 1? __('site.yes') : __('site.no') }}</td>
                                <td class="text-center form-control">{{ $safetyCheckList->floor_comment ?? __('site.noComment') }} </td>
                            </tr>
                            <tr>
                                <th>@lang('site.adequateLighting')</th>
                                <td class="text-center form-control">{{ $safetyCheckList->lighting  == 1? __('site.yes') : __('site.no')}}</td>
                                <td class="text-center form-control">{{ $safetyCheckList->lighting_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th> @lang('site.emergency')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->emergency == 1? __('site.yes') : __('site.no')}}</td>
                                <td class="text-center form-control">{{ $safetyCheckList->emergency_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-center">
                                    <strong>2. Emergency Preparedness</strong>
                                </td>
                            </tr>
                            <tr>
                                <th> @lang('site.fireExtinguishers')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->fireExtinguishers == 1? __('site.yes') : __('site.no')}} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->fireExtinguishers_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.trainedEmployees')</th>
                                <td class="text-center form-control">{{ $safetyCheckList->trained == 1? __('site.yes') : __('site.no') }} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->trained_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.firstAidkits')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->aidKits == 1? __('site.yes') : __('site.no') }} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->aidKits_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.postedNumbers')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->contactNumbers == 1? __('site.yes') : __('site.no') }}</td>
                                <td class="text-center form-control">{{ $safetyCheckList->contactNumbers_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.smokeDetectors')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->detectors == 1? __('site.yes') : __('site.no') }} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->detectors_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.sprinklerSystem')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->sprinklerSystem == 1? __('site.yes') : __('site.no') }} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->sprinklerSystem_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.emergencyEvacuation')</th>
                                <td class="text-center form-control">{{ $safetyCheckList->evacuation == 1? __('site.yes') : __('site.no') }} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->evacuation_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.awarenessEmployees')</th>
                                <td class="text-center form-control">{{ $safetyCheckList->employeesAwareness == 1? __('site.yes') : __('site.no') }}</td>
                                <td class="text-center form-control">{{ $safetyCheckList->employeesAwareness_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-center">
                                    <strong>3. Personal Protective Equipment (PPE)</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('site.availablePPE')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->PPE == 1? __('site.yes') : __('site.no') }} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->PPE_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.employeesTrainedPPE')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->trainedPPE == 1? __('site.yes') : __('site.no') }} </td>
                                <td class="text-center form-control">{{ $safetyCheckList->trainedPPE_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-center">
                                    <strong>4. Slips, Trips and Falls</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('site.trippingHazards')</th>
                                <td class="text-center form-control"> {{ $safetyCheckList->trippingHazards == 1? __('site.yes') : __('site.no') }}</td>
                                <td class="text-center form-control">{{ $safetyCheckList->trippingHazards_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.floorsIdentification')</th>
                                <td class="text-center form-control">{{ $safetyCheckList->safePassage == 1? __('site.yes') : __('site.no') }}</td>
                                <td class="text-center form-control">{{ $safetyCheckList->safePassage_comment ?? __('site.noComment') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.date'): </th>
                                <td class="text-center form-control">{{ $safetyCheckList->date }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.time'): </th>
                                <td class="text-center form-control">{{ $safetyCheckList->formatted_time }}</td>
                            </tr>
                            <tr>
                                <th>@lang('site.inspectorName'): </th>
                                <td class="text-center form-control">{{ $safetyCheckList->inspectorName }}</td>
                            </tr>
                        </table>
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
