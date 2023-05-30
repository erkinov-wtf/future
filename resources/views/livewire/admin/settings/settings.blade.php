@section('title', __('System Settings'))
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            @include('layouts.navigation')
        </nav>
        <main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div>
                <h1>{{ __('System Settings') }}</h1>

                <livewire:admin.settings.application-settings/>
                <livewire:admin.settings.application-logo/>
                <livewire:admin.settings.login-logo/>
                <livewire:admin.settings.security-settings/>
            </div>
        </main>
    </div>
</div>
