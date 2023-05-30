@auth
    <li class="list-inline-item mb-0 ms-1">
        <div class="dropdown dropdown-primary">
            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(storage_exists(auth()->user()->image))
                <img src="{{ storage_url(auth()->user()->image) }}" class="avatar avatar-ex-small rounded-circle" alt="">
                @else
                    {{ auth()->user()->name }}
                @endif
            </button>
            <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3"
                 style="min-width: 200px;">

                @can('view_users_profiles')
                <a class="dropdown-item d-flex align-items-center text-dark"
                   href="{{ route('admin.users.show', auth()->user()) }}">

                    @if(storage_exists(auth()->user()->image))
                        <img src="{{ storage_url(auth()->user()->image) }}"
                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                    @endif
                    <div class="flex-1 ms-2">
                        <span class="d-block mb-1"> {{ auth()->user()->name }}</span>
                        <small class="text-muted">Orthopedic</small>
                    </div>
                </a>
                @endcan
                <a class="dropdown-item text-dark" href="{{ route('dashboard') }}"><span
                        class="mb-0 d-inline-block me-1"><i
                            class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>

                    @can('edit_own_account')
                <a class="dropdown-item text-dark" href="{{ route('admin.users.edit', auth()->user()) }}"><span
                        class="mb-0 d-inline-block me-1"><i
                            class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                    @endcan

                    <div class="dropdown-divider border-top"></div>
                    <a class="dropdown-item text-dark" href="lock-screen.html"><span
                            class="mb-0 d-inline-block me-1"><i
                                class="uil uil-sign-out-alt align-middle h6"></i></span> Lock-Screen</a>

                <div class="dropdown-divider border-top"></div>
                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="mb-0 d-inline-block me-1"><i
                            class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                    </form>
            </div>
        </div>
    </li>
@endauth
