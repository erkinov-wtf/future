@section('title', __("Appointments"))

<div>
    <!-- Start -->
    <section class="bg-dashboard">
        <div class="container-fluid">
            <div class="row">
                <livewire:user.components.info-panel/>
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h5 class="mb-0">{{ __('Appointments') }}</h5>
                        <div class="position-absolute" style="right: 0; top: 0; margin-right: 15px">
                            <livewire:admin.users.user-menu/>
                        </div>
                    </div>
                    <div class="card border-0 shadow rounded overflow-hidden">
                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded-0 shadow overflow-hidden bg-light mb-0"
                            id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded-0 active" id="clinic-booking" data-bs-toggle="pill"
                                   href="#pills-clinic" role="tab" aria-controls="pills-clinic" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h5 class="fw-medium mb-0">Online Appointment</h5>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul>

                        <div class="tab-content p-4" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-clinic" role="tabpanel"
                                 aria-labelledby="online-booking">
                                <div class="row">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Departments<span
                                                    class="text-danger">*</span></label>
                                            <select wire:model="department" class="form-select form-control">
                                                <option disabled value="default">Select department</option>
                                                @foreach($departments as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('department') <span
                                                class="error">{{ $message }}</span> @enderror
                                            <h5>{{ $department }}</h5>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Doctor<span
                                                    class="text-danger">*</span></label>
                                            <select wire:model="doctor_name" class="form-select form-control">
                                                <option disabled value="default">Select doctor</option>
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('doctor_name') <span
                                                class="error">{{ $message }}</span> @enderror
                                            <h5>{{ $doctor_name }}</h5>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label"> Date : <span
                                                    class="text-danger">*</span></label>
                                            <input wire:model="date" type="date" class="form-control"
                                                   placeholder="Select date :">
                                        </div>
                                        @error('date') <span
                                            class="error">{{ $message }}</span> @enderror
                                        <h5>{{ $date }}</h5>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="input-time">Time : <span
                                                    class="text-danger">*</span></label>
                                            <input wire:model="time" type="time" class="form-control timepicker">
                                        </div>
                                        @error('time') <span
                                            class="error">{{ $message }}</span> @enderror
                                        <h5>{{ $time }}</h5>

                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span
                                                    class="text-danger">*</span></label>
                                            <textarea wire:model="comment" rows="4" class="form-control"
                                                      placeholder="Your Message :"></textarea>
                                        </div>
                                        @error('comment') <span
                                            class="error">{{ $message }}</span> @enderror
                                        <h5>{{ $comment }}</h5>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-grid">
                                            <button wire:click="checkDefaults" class="btn btn-primary">Book An
                                                Appointment
                                            </button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
</div>
