@extends('layout.mainlayout_index1')
@section('title', 'Patient Dashboard')
@section('content')
    <!-- Header -->
    @include('components.patient_header')
    <!-- /Header -->

    <div class="row align-items-center mt-4">

    </div>
    </div>
    </section>
    <!-- /Home Banner -->
    <section class="about-us">
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    @include('layout.partials.nav_patient')

                    <div class="col-md-7 col-lg-8 col-xl-9">

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="{{ URL::asset('/assets/img/specialities/pt-dashboard-01.png') }}"
                                                alt="" width="55">
                                        </div>
                                        <h5>Heart Rate</h5>
                                        <h6>12 <sub>bpm</sub></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="{{ URL::asset('/assets/img/specialities/pt-dashboard-02.png') }}"
                                                alt="" width="55">
                                        </div>
                                        <h5>Body Temperature</h5>
                                        <h6>18 <sub>C</sub></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="{{ URL::asset('/assets/img/specialities/pt-dashboard-03.png') }}"
                                                alt="" width="55">
                                        </div>
                                        <h5>Glucose Level</h5>
                                        <h6>70 - 90</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="{{ URL::asset('/assets/img/specialities/pt-dashboard-04.png') }}"
                                                alt="" width="55">
                                        </div>
                                        <h5>Blood Pressure</h5>
                                        <h6>202/90 <sub>mg/dl</sub></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row patient-graph-col">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Graph Status</h4>
                                    </div>
                                    <div class="card-body pt-2 pb-2 mt-1 mb-1">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="#" class="graph-box">
                                                    <div>
                                                        <h4>BMI Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="{{ URL::asset('/assets/img/shapes/graph-01.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <h3 class="bmi_data_last"></h3>
                                                        <span class="graph-update-date">Last Update 6d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="#" class="graph-box pink-graph">
                                                    <div>
                                                        <h4>Heart Rate Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="{{ URL::asset('/assets/img/shapes/graph-02.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <h3 class="bmi_data_last"></h3>
                                                        <span class="graph-update-date">Last Update 2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="#" class="graph-box sky-blue-graph">
                                                    <div>
                                                        <h4>FBC Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="{{ URL::asset('/assets/img/shapes/graph-03.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <h3 class="bmi_data_last"></h3>
                                                        <span class="graph-update-date">Last Update 5d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="#" class="graph-box orange-graph">
                                                    <div>
                                                        <h4>Weight Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="{{ URL::asset('/assets/img/shapes/graph-04.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <h3 class="bmi_data_last"></h3>
                                                        <span class="graph-update-date">Last Update 3d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="card">
                            <div class="card-body pt-0">

                                <!-- Tab Menu -->
                                <nav class="user-tabs mb-4">
                                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ url('#pat_appointments') }}"
                                                data-bs-toggle="tab">Appointments</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="{{ url('#pat_prescriptions') }}"
                                                data-bs-toggle="tab">Prescriptions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('#pat_medical_records') }}"
                                                data-bs-toggle="tab"><span class="med-records">Medical Records</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('#pat_billing') }}"
                                                data-bs-toggle="tab">Billing</a>
                                        </li> -->
                                    </ul>
                                </nav>
                                <!-- /Tab Menu -->

                                <!-- Tab Content -->
                                <div class="tab-content pt-0">

                                    <!-- Appointment Tab -->
                                    <div id="pat_appointments" class="tab-pane fade show active">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0" id="datatable1">
                                                        <thead>
                                                            <tr>
                                                            <th>ID</th>
                                                                <th>Doctor</th>
                                                                <th>Insurance</th>
                                                                <th>Appt Date</th>
                                                                <th>Booking Date</th>
                                                                <th>Amount</th>
                                                                <!-- <th>Follow Up</th> -->
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @forelse($appointments as $appointment)
                                                            @php
                                                                $doctor = \App\Models\User::query()
                                                                    ->where('user_type', 'D')
                                                                    ->where('id', $appointment->doctor_id)
                                                                    ->first();
                                                            @endphp
                                                            <tr>
                                                                <td>{{$appointment->id}}</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ route('doctor_profile',  $doctor->id) }}"
                                                                            class="avatar avatar-sm me-2" target="_blank">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ asset( $doctor->profile_image) }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a
                                                                            href="{{ route('doctor_profile',  $doctor->id) }}" target="_blank">Dr.
                                                                            {{ @$doctor->name }}
                                                                            <span>{{ @$doctor->speciality->name }}</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>{{ $appointment->insurance?->name??'N/A' }}</td>
                                                                <td>{{ date('d M Y', strtotime($appointment->appointment_date)) }}
                                                                    <span
                                                                        class="d-block text-info">{{ date('H:i A', strtotime($appointment->appointment_time)) }}</span>
                                                                </td>
                                                                <td>{{ date('d M Y', strtotime($appointment->created_at)) }}
                                                                </td>
                                                                <td> 
                                                                {{ @$appointment->fee? 'SAR '.@$appointment->fee:'FREE'}}
                                                                    </td>
                                                                @if ($appointment->status == 'P')
                                                                    <td><span
                                                                            class="badge rounded-pill bg-warning-light">Pending</span>
                                                                    </td>
                                                                @elseif($appointment->status == 'C')
                                                                    <td><span
                                                                            class="badge rounded-pill bg-success-light">Confirm</span>
                                                                    </td>
                                                                @elseif($appointment->status == 'D')
                                                                    <td><span
                                                                            class="badge rounded-pill bg-danger-light">Cancelled</span>
                                                                    </td>
                                                                @endif
                                                                @if ($appointment->status == 'D')
                                                                    <td >
                                                                        <div class="text-end d-flex justify-content-between">
                                                                        {{-- <form method="GET" action="{{ route('update_appointment_status', $appointment)}}">
                                                                @method('patch')
                                                                @csrf
                                                                <input type="hidden" name="status" value="P">
                                                                <button type="submit" href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                    <i class="fas fa-check"></i> Book Again
                                                                </button>
                                                            </form> --}}

                                                                        <a class="btn btn-sm bg-success-light me-2"
                                                                            href="{{ route('update-appointment', $appointment->id) }}">
                                                                            {{-- <button type="submit"
                                                                                href="javascript:void(0);"
                                                                                class="btn btn-sm bg-success-light">
                                                                            </button> --}}
                                                                            <i class="fas fa-check"></i> Book Again
                                                                        </a>

                                                                        <form method="POST"
                                                                            action="{{ route('update_appointment_status', $appointment) }}">
                                                                            @method('patch')
                                                                            @csrf
                                                                            <input type="hidden" name="status"
                                                                                value="D">
                                                                            <button type="submit"
                                                                                href="javascript:void(0);"
                                                                                class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </button>
                                                                        </form>
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td >
                                                                        <div class="text-end d-flex justify-content-between">
                                                                        <form method="POST"
                                                                            action="{{ route('update_appointment_status', $appointment) }}">
                                                                            @method('patch')
                                                                            @csrf
                                                                            <input type="hidden" name="status"
                                                                                value="D">
                                                                            <button type="submit"
                                                                                href="javascript:void(0);"
                                                                                class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </button>
                                                                        </form>
                                                                        </div>
                                                                    </td>
                                                                @endif
                                                                {{--                                                        <td class="text-end"> --}}
                                                                {{--                                                            <div class="table-action"> --}}
                                                                {{--                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light"> --}}
                                                                {{--                                                                    <i class="fas fa-print"></i> Print --}}
                                                                {{--                                                                </a> --}}
                                                                {{--                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light"> --}}
                                                                {{--                                                                    <i class="far fa-eye"></i> View --}}
                                                                {{--                                                                </a> --}}
                                                                {{--                                                            </div> --}}
                                                                {{--                                                        </td> --}}
                                                            </tr>
                                                        @empty
                                                            <!-- <tr>
                                                            <td class="col-span-6">
                                                                <h3 class="bg-danger-light">No record found</h3>
                                                            </td>
                                                        </tr> -->
                                                        @endforelse
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Appointment Tab -->

                                    <!-- Prescription Tab -->
                                    <div class="tab-pane fade" id="pat_prescriptions">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Name</th>
                                                                <th>Created by</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>14 Nov 2019</td>
                                                                <td>Prescription 1</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Ruby
                                                                            Perrin
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>13 Nov 2019</td>
                                                                <td>Prescription 2</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Darren
                                                                            Elder
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12 Nov 2019</td>
                                                                <td>Prescription 3</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Deborah
                                                                            Angel
                                                                            <span>Cardiology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>11 Nov 2019</td>
                                                                <td>Prescription 4</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Sofia
                                                                            Brient
                                                                            <span>Urology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>10 Nov 2019</td>
                                                                <td>Prescription 5</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-05.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Marvin
                                                                            Campbell
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>9 Nov 2019</td>
                                                                <td>Prescription 6</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr.
                                                                            Katharine
                                                                            Berthold <span>Orthopaedics</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>8 Nov 2019</td>
                                                                <td>Prescription 7</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-07.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Linda
                                                                            Tobin
                                                                            <span>Neurology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>7 Nov 2019</td>
                                                                <td>Prescription 8</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-08.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Paul
                                                                            Richard
                                                                            <span>Dermatology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6 Nov 2019</td>
                                                                <td>Prescription 9</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-09.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. John
                                                                            Gibbs
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5 Nov 2019</td>
                                                                <td>Prescription 10</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-10.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Olga
                                                                            Barlow
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Prescription Tab -->

                                    <!-- Medical Records Tab -->
                                    <div id="pat_medical_records" class="tab-pane fade">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Attachment</th>
                                                                <th>Created</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0010</a></td>
                                                                <td>14 Nov 2019</td>
                                                                <td>Dental Filling</td>
                                                                <td><a href="#">dental-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Ruby
                                                                            Perrin
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0009</a></td>
                                                                <td>13 Nov 2019</td>
                                                                <td>Teeth Cleaning</td>
                                                                <td><a href="#">dental-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Darren
                                                                            Elder
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0008</a></td>
                                                                <td>12 Nov 2019</td>
                                                                <td>General Checkup</td>
                                                                <td><a href="#">cardio-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Deborah
                                                                            Angel
                                                                            <span>Cardiology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0007</a></td>
                                                                <td>11 Nov 2019</td>
                                                                <td>General Test</td>
                                                                <td><a href="#">general-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Sofia
                                                                            Brient
                                                                            <span>Urology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0006</a></td>
                                                                <td>10 Nov 2019</td>
                                                                <td>Eye Test</td>
                                                                <td><a href="#">eye-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-05.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Marvin
                                                                            Campbell
                                                                            <span>Ophthalmology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0005</a></td>
                                                                <td>9 Nov 2019</td>
                                                                <td>Leg Pain</td>
                                                                <td><a href="#">ortho-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr.
                                                                            Katharine
                                                                            Berthold <span>Orthopaedics</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0004</a></td>
                                                                <td>8 Nov 2019</td>
                                                                <td>Head pain</td>
                                                                <td><a href="#">neuro-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-07.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Linda
                                                                            Tobin
                                                                            <span>Neurology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0003</a></td>
                                                                <td>7 Nov 2019</td>
                                                                <td>Skin Alergy</td>
                                                                <td><a href="#">alergy-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-08.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Paul
                                                                            Richard
                                                                            <span>Dermatology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0002</a></td>
                                                                <td>6 Nov 2019</td>
                                                                <td>Dental Removing</td>
                                                                <td><a href="#">dental-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-09.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. John
                                                                            Gibbs
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0);">#MR-0001</a></td>
                                                                <td>5 Nov 2019</td>
                                                                <td>Dental Filling</td>
                                                                <td><a href="#">dental-test.pdf</a></td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-10.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Olga
                                                                            Barlow
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Medical Records Tab -->

                                    <!-- Billing Tab -->
                                    <div id="pat_billing" class="tab-pane fade">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Invoice No</th>
                                                                <th>Doctor</th>
                                                                <th>Amount</th>
                                                                <th>Paid On</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0010</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Ruby Perrin
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$450</td>
                                                                <td>14 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0009</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Darren
                                                                            Elder
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$300</td>
                                                                <td>13 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0008</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Deborah
                                                                            Angel
                                                                            <span>Cardiology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$150</td>
                                                                <td>12 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0007</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Sofia
                                                                            Brient
                                                                            <span>Urology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$50</td>
                                                                <td>11 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0006</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-05.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Marvin
                                                                            Campbell
                                                                            <span>Ophthalmology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$600</td>
                                                                <td>10 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0005</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr.
                                                                            Katharine
                                                                            Berthold <span>Orthopaedics</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$200</td>
                                                                <td>9 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0004</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-07.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Linda
                                                                            Tobin
                                                                            <span>Neurology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$100</td>
                                                                <td>8 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0003</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-08.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Paul
                                                                            Richard
                                                                            <span>Dermatology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$250</td>
                                                                <td>7 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0002</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-09.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. John
                                                                            Gibbs
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$175</td>
                                                                <td>6 Nov 2019</td>
                                                                <td class="text-end">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ url('invoice-view') }}">#INV-0001</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{ url('doctor-profile') }}"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="{{ URL::asset('/assets/img/doctors/doctor-thumb-10.jpg') }}"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="{{ url('doctor-profile') }}">Dr. Olga
                                                                            Barlow
                                                                            <span>#0010</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$550</td>
                                                                <td>5 Nov 2019</td>
                                                                <td class="text-endend">
                                                                    <div class="table-action">
                                                                        <a href="{{ url('invoice-view') }}"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Billing Tab -->

                                </div>
                                <!-- Tab Content -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->
    </section>

@endsection
