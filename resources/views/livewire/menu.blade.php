<ul class="navbar-nav align-items-center d-none d-md-flex">
    <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ auth()->user()->image() }}" class="img-fluid rounded-circle"
                        style="object-fit: cover;">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{ route('profile.index') }}" class="dropdown-item" wire:navigate>
                <i class="fas fa-user"></i>
                <span>My profile</span>
            </a>
            <a href="https://themewagon.com/themes/free-bootstrap-4-html5-admin-template-argon-dashboard/"
                class="dropdown-item" target="_blank">
                <i class="fas fa-book"></i>
                <span>Documentación</span>
            </a>
            <a href="#" class="dropdown-item">
                <i class="fas fa-clipboard-list"></i>
                <span>Bitácora</span>
            </a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </li>
</ul>
