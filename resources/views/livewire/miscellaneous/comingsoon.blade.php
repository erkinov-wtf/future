@section('title', __('Coming Soon'))

<body>
<!-- Start -->
<section class="position-relative" style="background: url('{{asset('assets/images/bg/03.jpg')}}') center;">
    <div class="bg-overlay bg-black" style="opacity: 0.7;"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="d-flex flex-column min-vh-100 justify-content-center px-md-5 py-5 px-4">
                    <div class="title-heading text-center my-auto">
                        <h4 class="coming-soon display-5 text-white title-dark fw-bold mb-4">Coming Soon</h4>
                        <p class="text-white-50 para-desc mx-auto mb-0">Our design projects are fresh and simple and will benefit your business greatly. Learn more about our work!</p>
                        <a href="{{ route('dashboard') }}" class="btn btn-soft-primary mt-3">Go To Home</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
</body>
