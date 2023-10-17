<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>

            <!--Users Profile-->
            {{-- @if(\Illuminate\Support\Facades\Auth::user()->profile_img)
                <img class="img-profile rounded-circle"
                     src="{{asset('storage/'.Auth::user()->profile_img)}}">
            @else --}}
                <img class="img-profile rounded-circle" src="{{asset('admin/img/undraw_profile_3.svg')}}" alt="...">
            {{-- @endif --}}
        </a>

        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
             aria-labelledby="userDropdown">
            {{-- @if(\Illuminate\Support\Facades\Auth::user()->role == 'HealthcareAdmin')
                <a class="dropdown-item" href="{{ route('admin-healthcare.reset-index') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-light-200"></i>
                    {{__('manage profile')}}
                </a>
            @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'Patient')
                <a class="dropdown-item" href="{{route('patient-bio.index')}}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-light-200"></i>
                    {{__('manage profile')}}
                </a>
            @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'SuperAdmin')
                <a class="dropdown-item" href="{{ route('super-admins.index') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-light-200"></i>
                    {{__('manage profile')}}
                </a>
            @endif
            <div class="dropdown-divider"></div> --}}
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-light-200"></i>
                {{__('logout')}}
            </a>
        </div>
    </li>
</ul>
