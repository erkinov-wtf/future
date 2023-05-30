<x-app-layout>
@section('title', '404')
    <!-- Hero Start -->
    <section class="bg-home d-flex bg-light align-items-center" style="background: url('../assets/images/bg/bg-lines-one.png') center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <img src="{{ asset('assets/images/svg/error.svg') }}" class="img-fluid" alt="">
                    <h3 class="mb-4">Page Not Found</h3>
                    <p class="text-muted para-desc mx-auto">Explore and learn more about everything from machine learning and global payments to  scaling your team.</p>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary mt-2">Go To Home</a>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

</x-app-layout>

