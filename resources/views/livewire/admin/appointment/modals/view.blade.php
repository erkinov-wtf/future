<div wire:ignore.self class="modal fade" id="viewappointment" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom p-3">
                <h5 class="modal-title" id="exampleModalLabel">Appointment Detail</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                        class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <div class="modal-body p-3 pt-4">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/images/client/01.jpg') }}" class="avatar avatar-small rounded-pill"
                         alt="">
                    <h5 class="mb-0 ms-3">{{ $patient_name }}</h5>
                </div>
                <ul class="list-unstyled mb-0 d-md-flex justify-content-between mt-4">
                    <li>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex">
                                <h6>Age:</h6>
                                <h6 class="text-dark fw-bold ms-2">{{ $age }}</h6>
                            </li>

                            <li class="d-flex">
                                <h6>Gender:</h6>
                                <h6 class="text-dark fw-bold ms-2">{{ $gender }}</h6>
                            </li>

                            <li class="d-flex">
                                <h6 class="mb-0">Department:</h6>
                                <h6 class="text-dark fw-bold ms-2">{{ $department }}</h6>
                            </li>
                            <div class="line" style="border: 1.5px solid black;"></div>
                            <li class="d-flex">
                                <h6 class="mb-0">Comment:</h6>
                                <h6 class="text-dark fw-bold ms-2">{{ $comment }}</h6>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex">
                                <h6>Date:</h6>
                                <h6 class="text-dark fw-bold ms-2">{{ $date }}</h6>
                            </li>

                            <li class="d-flex">
                                <h6>Time:</h6>
                                <h6 class="text-dark fw-bold ms-2">{{ $time }}</h6>
                            </li>

                            <li class="d-flex">
                                <h6 class="mb-0">Doctor:</h6>
                                <h6 class="text-dark fw-bold ms-2">{{ $doctor_name }}</h6>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
