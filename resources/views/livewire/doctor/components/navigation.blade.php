<div class="col-xl-3 col-lg-4 col-md-5 col-12">
    <div class="rounded shadow overflow-hidden sticky-bar">
        <div class="card border-0">
            <img src="{{ asset('assets/images/doctors/profile-bg.jpg') }}" class="img-fluid" alt="">
        </div>

        <div class="text-center avatar-profile margin-nagative mt-n5 position-relative pb-4 border-bottom">
            <div style="margin-left: 187px">
                @if(storage_exists(auth()->user()->image))
                    <img src="{{ storage_url(auth()->user()->image) }}"
                         class="rounded-circle shadow-md avatar avatar-md-md" alt="">
                @endif
            </div>
            <h5 class="mt-3 mb-1">{{ auth()->user()->name }}</h5>
            <p class="text-muted mb-0">Orthopedic</p>
        </div>
        <ul class="list-unstyled sidebar-nav mb-0">
            @foreach($navigation as $item)
                <li class="navbar-item"><a href="{{ route( $item->link ) }}" class="navbar-link"><i
                            class="{{ $item->icon }} align-middle navbar-icon"></i> {{ $item->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    $("#item_id li a").click(function () {
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
</script>
