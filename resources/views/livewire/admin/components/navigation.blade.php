<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/images/logo-dark.png') }}" height="22" class="logo-light-mode" alt="">
                <img src="{{ asset('assets/images/logo-light.png') }}" height="22" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                                <img src="{{ asset('assets/images/logo-light.png') }}" height="22" alt="">
                            </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ request()->route()->named('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard
                </a>
            </li>
            @foreach($navigation as $item)
                <li class="sidebar-dropdown">
                    <a class="fw-bold" href="javascript:void(0)"><i class="uil {{ $item->icon }} me-2 d-inline-block"></i>{{ $item->title }}</a>
                    <div class="sidebar-submenu">
                        @foreach($item['children'] as $child)
                            <ul>
                                <li><a href="{{ route( $child->link ) }}">{{ $child->title }}</a></li>
                            </ul>
                        @endforeach
                    </div>
                </li>
            @endforeach
                <li><a href="../landing/index-two.html" target="_blank"><i
                            class="uil uil-window me-2 d-inline-block"></i>Landing page</a></li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <ul class="sidebar-footer list-unstyled mb-0">
        <li class="list-inline-item mb-0 ms-1">
            <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                <i class="uil uil-comment"></i>
            </a>
        </li>
    </ul>
    <!-- Sidebar Footer -->
</nav>
