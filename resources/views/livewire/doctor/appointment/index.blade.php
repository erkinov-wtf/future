@section('title', __('Appointments'))


<section class="bg-dashboard">
    <div class="container-fluid">
        <div class="row">
            <livewire:doctor.components.navigation/>
            <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
                <div class="mb-5">
                    <h5 class="mb-0">{{ env('APP_NAME') }}</h5>
                    <div class="position-absolute" style="right: 0; top: 0; margin-right: 15px">
                        <livewire:admin.users.user-menu/>
                    </div>
                </div>

                <main class="page-content bg-light">

                    <div class="container-fluid">
                        <div class="layout-specing">
                            <div class="row">
                                <div class="col-xl-9 col-lg-6 col-md-4">
                                    <h5 class="mb-0">{{ __('Appointments') }}</h5>
                                    <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                        <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
                                            </li>
                                            <li class="breadcrumb-item active"
                                                aria-current="page">{{ __('Appointments') }}</li>
                                        </ul>
                                    </nav>
                                </div><!--end col-->

                                <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                                    <div class="justify-content-md-end">
                                        <form>
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="mb-0 position-relative">
                                                        <select class="form-select form-control">
                                                            <option value="EY">Today</option>
                                                            <option value="GY">Tomorrow</option>
                                                            <option value="PS">Yesterday</option>
                                                        </select>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-sm-12 col-md-7 mt-4 mt-sm-0">
                                                    <div class="d-grid">
                                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                           data-bs-target="#appointmentform">Appointment</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form><!--end form-->
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-12 mt-4">
                                    <div class="table-responsive bg-white shadow rounded">
                                        <table class="table mb-0 table-center">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom p-3 text-dark" style="min-width: 50px;">#</th>
                                                <th class="border-bottom p-3 text-dark" style="min-width: 180px;">Name
                                                </th>
                                                <th class="border-bottom p-3 text-dark">Age</th>
                                                <th class="border-bottom p-3 text-dark">Gender</th>
                                                <th class="border-bottom p-3 text-dark">Department</th>
                                                <th class="border-bottom p-3 text-dark" style="min-width: 150px;">
                                                    Email
                                                </th>
                                                <th class="border-bottom p-3 text-dark" style="min-width: 150px;">Date
                                                </th>
                                                <th class="border-bottom p-3 text-dark">Time</th>
                                                <th class="border-bottom p-3 text-dark" style="min-width: 220px;">
                                                    Doctor
                                                </th>
                                                <th class="border-bottom p-3 text-dark">Fees</th>
                                                <th class="border-bottom p-3 text-dark" style="min-width: 150px;"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($appointments as $item)
                                                <tr>
                                                    <th class="p-3">{{ $item->id }}</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ storage_url(auth()->user()->image) }}"
                                                                     class="avatar avatar-md-sm rounded-circle shadow"
                                                                     alt="">
                                                                <span class="ms-2">{{ $item->patient_name }}</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="p-3 text-dark">{{ $item->age }}</td>
                                                    <td class="p-3 text-dark">{{ $item->gender }}</td>
                                                    <td class="p-3 text-dark">{{ $item->department }}</td>
                                                    <td class="p-3 text-dark">{{ $item->patient_name }} email</td>
                                                    <td class="p-3 text-dark">{{ $item->date }}</td>
                                                    <td class="p-3 text-dark">{{ $item->time }}</td>
                                                    <td class="p-3 text-dark">
                                                        <a href="#" class="text-dark">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ storage_url(auth()->user()->image) }}"
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <span class="ms-2">{{ $item->doctor_name }}</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="p-3">$50/Patient</td>
                                                    <td class="text-end p-3">
                                                        <button
                                                            wire:click.prevent="viewAppointment({{ $item->id }})"
                                                            class="btn btn-icon btn-pills btn-soft-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#viewappointment"><i
                                                                class="uil uil-eye"></i></button>

                                                        <button wire:click.prevent="acceptAppointment({{ $item->id }})"
                                                                class="btn btn-icon btn-pills btn-soft-success"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="{{--#acceptappointment--}}"><i
                                                                class="uil uil-check-circle"></i></button>

                                                        <button wire:click.prevent="declineAppointment({{ $item->id }})"
                                                                class="btn btn-icon btn-pills btn-soft-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="{{--#cancelappointment--}}"><i
                                                                class="uil uil-times-circle"></i></button>

                                                        @switch($item->status)
                                                            @case('pending')
                                                                <button type="button"
                                                                        class="btn btn-outline-primary">{{ __('Pending') }}</button>
                                                                @break
                                                            @case('accepted')
                                                                <button type="button"
                                                                        class="btn btn-outline-success">{{ __('Accepted') }}</button>
                                                                @break
                                                            @case('declined')
                                                                <button type="button"
                                                                        class="btn btn-outline-danger">{{ __('Declined') }}</button>
                                                                @break
                                                        @endswitch
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end row-->

                            <div class="row text-center">
                                <!-- PAGINATION START -->
                                <div class="col-12 mt-4">
                                    {{ $appointments->links() }}
                                </div><!--end col-->
                                <!-- PAGINATION END -->
                            </div><!--end row-->
                        </div>
                    </div><!--end container-->

                    @include('livewire.admin.appointment.modals.view')
                    @include('livewire.admin.appointment.modals.accept')
                    @include('livewire.admin.appointment.modals.decline')
                    <!-- End -->
                </main><!--End page-content" -->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
