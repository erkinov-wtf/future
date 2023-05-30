    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
        <div class="card border-0 p-4 rounded shadow overflow-hidden sticky-bar">
            <div class="d-md-flex text-center text-md-start align-items-center">
                @if(storage_exists(auth()->user()->image))
                    <img src="{{ storage_url(auth()->user()->image) }}"
                         class="avatar avatar-md-md rounded-circle border shadow" alt="">
                @endif
                <div class="ms-md-3 mt-3 mt-sm-0">
                    <h5 class="d-block mb-1 mb-sm-0">{{ auth()->user()->name }}</h5>
                    <small class="text-muted">25 Years old</small>
                </div>
            </div>

            <span class="bg-soft-success p-2 rounded-pill text-center h6 mb-0 mt-4">
                                Healthy
                            </span>

            <div class="row">
                <div class="col-4 mt-4">
                    <div class="text-center">
                        <span class="h6 text-muted">Blood</span>
                        <h6 class="mb-0 fw-normal">B +</h6>
                    </div>
                </div><!--end col-->

                <div class="col-4 mt-4">
                    <div class="text-center">
                        <span class="h6 text-muted">Height</span>
                        <h6 class="mb-0 fw-normal">175cm</h6>
                    </div>
                </div><!--end col-->

                <div class="col-4 mt-4">
                    <div class="text-center">
                        <span class="h6 text-muted">Weight</span>
                        <h6 class="mb-0 fw-normal">64k.g</h6>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <h6 class="mt-4 mb-0">Doctors:</h6>
            <ul class="list-unstyled mb-0 mt-4">
                <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/doctors/01.jpg') }}" class="avatar avatar-md-sm rounded-circle shadow" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/doctors/02.jpg') }}" class="avatar avatar-md-sm rounded-circle shadow" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/doctors/03.jpg') }}" class="avatar avatar-md-sm rounded-circle shadow" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/doctors/04.jpg') }}" class="avatar avatar-md-sm rounded-circle shadow" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/doctors/05.jpg') }}" class="avatar avatar-md-sm rounded-circle shadow" alt=""></a></li>
            </ul>

            <h6 class="mt-4 mb-0">Payments:</h6>
            <ul class="list-unstyled mb-0 mt-4">
                <li class="d-flex align-items-center">
                    <img src="{{ asset('assets/images/payment/mastercard.png') }}" class="avatar avatar-md-sm" alt="">
                    <div class="flex-1 ms-3">
                        <p class="mb-0">Mastercard <span class="ms-2">•••• 4584</span></p>
                        <p class="text-muted mb-0">Expires 12/22</p>
                    </div>
                </li>

                <li class="d-flex align-items-center mt-3">
                    <img src="{{ asset('assets/images/payment/discover.png') }}" class="avatar avatar-md-sm" alt="">
                    <div class="flex-1 ms-3">
                        <p class="mb-0">Discover <span class="ms-2">•••• 5796</span></p>
                        <p class="text-muted mb-0">Expires 12/22</p>
                    </div>
                </li>

                <li class="d-flex align-items-center mt-3">
                    <img src="{{ asset('assets/images/payment/rupay.png') }}" class="avatar avatar-md-sm" alt="">
                    <div class="flex-1 ms-3">
                        <p class="mb-0">Rupay <span class="ms-2">•••• 4645</span></p>
                        <p class="text-muted mb-0">Expires 12/22</p>
                    </div>
                </li>

                <li class="d-flex align-items-center mt-3">
                    <img src="{{ asset('assets/images/payment/american.png') }}" class="avatar avatar-md-sm" alt="">
                    <div class="flex-1 ms-3">
                        <p class="mb-0">American <span class="ms-2">•••• 4875</span></p>
                        <p class="text-muted mb-0">Expires 12/22</p>
                    </div>
                </li>
            </ul>

            <div class="mt-4">
                <div class="d-grid">
                    <a href="{{ route('admin.users.show', auth()->user()) }}" class="btn btn-soft-primary">View Profile</a>
                </div>
            </div>
        </div>
    </div>
