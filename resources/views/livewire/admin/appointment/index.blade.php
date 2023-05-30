@section('title', __('Appointments'))

<div class="page-wrapper doctris-theme toggled">
    <!-- sidebar-wrapper -->
    <livewire:admin.components.navigation>
        <!-- sidebar-wrapper  -->
        <!-- sidebar-wrapper  -->
        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between border-bottom">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon">
                            <img src="../assets/images/logo-icon.png" height="30" class="small" alt="">
                            <span class="big">
                                    <img src="../assets/images/logo-dark.png" height="22" class="logo-light-mode"
                                         alt="">
                                    <img src="../assets/images/logo-light.png" height="22" class="logo-dark-mode"
                                         alt="">
                                </span>
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-2" href="#">
                            <i class="uil uil-bars"></i>
                        </a>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mb-0">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="../assets/images/language/american.png"
                                        class="avatar avatar-ex-small rounded-circle p-2" alt=""></button>
                                <div class="dropdown-menu dd-menu drop-ups dropdown-menu-end shadow border-0 mt-3 p-2"
                                     data-simplebar style="height: 175px;">
                                    <a href="javascript:void(0)" class="d-flex align-items-center">
                                        <img src="../assets/images/language/chinese.png"
                                             class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Chinese</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="../assets/images/language/european.png"
                                             class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">European</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="../assets/images/language/indian.png"
                                             class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Indian</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="../assets/images/language/japanese.png"
                                             class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Japanese</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="../assets/images/language/russian.png"
                                             class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Russian</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                               aria-controls="offcanvasRight">
                                <div class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings"
                                                                                        class="fea icon-sm"></i></div>
                            </a>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button"
                                        class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        data-feather="mail" class="fea icon-sm"></i></button>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4 <span
                                        class="visually-hidden">unread mail</span></span>

                                <div
                                    class="dropdown-menu dd-menu dropdown-menu-end shadow rounded border-0 mt-3 px-2 py-2"
                                    data-simplebar style="height: 320px; width: 300px;">
                                    <a href="#" class="d-flex align-items-center justify-content-between py-2">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/02.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new
                                                email from <b>Janalia</b> <small
                                                    class="text-muted fw-normal d-inline-block">1 hour
                                                    ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#"
                                       class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/Codepen.svg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new
                                                email from <b>codepen</b> <small
                                                    class="text-muted fw-normal d-inline-block">4 hour
                                                    ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#"
                                       class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/03.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new
                                                email from <b>Cristina</b> <small
                                                    class="text-muted fw-normal d-inline-block">5 hour
                                                    ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#"
                                       class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/dribbble.svg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new
                                                email from <b>Dribbble</b> <small
                                                    class="text-muted fw-normal d-inline-block">24 hour
                                                    ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#"
                                       class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/06.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new
                                                email from <b>Donald Aghori</b> <small
                                                    class="text-muted fw-normal d-inline-block">1 day
                                                    ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#"
                                       class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/07.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new
                                                email from <b>Calvin</b> <small
                                                    class="text-muted fw-normal d-inline-block">2 day
                                                    ago</small></small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <livewire:admin.users.user-menu/>
                    </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="layout-specing">
                    <div class="row">
                        <div class="col-xl-9 col-lg-6 col-md-4">
                            <h5 class="mb-0">Appointment</h5>
                            <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('Appointments') }}</li>
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
                                        <th class="border-bottom p-3 text-dark" style="min-width: 180px;">Name</th>
                                        <th class="border-bottom p-3 text-dark">Age</th>
                                        <th class="border-bottom p-3 text-dark">Gender</th>
                                        <th class="border-bottom p-3 text-dark">Department</th>
                                        <th class="border-bottom p-3 text-dark" style="min-width: 150px;">Email</th>
                                        <th class="border-bottom p-3 text-dark" style="min-width: 150px;">Date</th>
                                        <th class="border-bottom p-3 text-dark">Time</th>
                                        <th class="border-bottom p-3 text-dark" style="min-width: 220px;">Doctor</th>
                                        <th class="border-bottom p-3 text-dark">Fees</th>
                                        <th class="border-bottom p-3 text-dark">Status</th>
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
                                                             class="avatar avatar-md-sm rounded-circle shadow" alt="">
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
                                                <button href="" wire:click.prevent="viewAppointment({{ $item->id }})"
                                                        class="btn btn-icon btn-pills btn-soft-primary"
                                                        data-bs-toggle="modal" data-bs-target="#viewappointment"><i
                                                        class="uil uil-eye"></i></button>
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
</div>
<!-- page-wrapper -->
