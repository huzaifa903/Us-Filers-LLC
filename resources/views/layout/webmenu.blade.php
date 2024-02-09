<!-- Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item {{ Request::path() == 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
            {{-- @can('policy-view') --}}
            <li class="menu-item  {{ Request::path() == 'policies' ? 'active' : '' }}">
                <a href="{{ url('/policies') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-account-arrow-up-outline"></i>
                    <div data-i18n="Upload Policy">Upload Policy</div>
                </a>
            </li>

            @if (auth()->user()->can('upload_project'))
                <li
                    class="menu-item {{ Request::path() === 'project' || Request::path() == 'tax' || Request::path() == 'chart-of-account' || Request::path() == 'account-type' || Request::path() == 'lab-of-tracking' || Request::path() == 'expense-categories' || Request::path() == 'expense' || Request::path() == 'refferal-hospital' ? 'active' : '' }}">
                    <a href="{{ url('/master') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons mdi mdi-cogs"></i>
                        <div data-i18n="Master Pages">Master Pages</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::path() == 'states' ? 'active' : '' }}">
                            <a href="{{ url('/states') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-chart-timeline"></i>
                                <div data-i18n="States">States</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::path() == 'countries' ? 'active' : '' }}">
                            <a href="{{ url('/countries') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-chart-timeline"></i>
                                <div data-i18n="Countries">Countries</div>
                            </a>
                        </li>
                    </ul>
                </li>
            @else
                <div></div>
            @endif

            @if (auth()->user()->can('user-view') ||
                    auth()->user()->can('role-view'))
                <li class="menu-item {{ Request::path() == 'user' || Request::path() == 'role' ? 'active' : '' }}">
                    <a href="{{ url('') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons mdi mdi-security"></i>
                        <div data-i18n="Administration">Administration</div>
                    </a>
                    <ul class="menu-sub">
                        @can('users_index')
                            <li class="menu-item  {{ Request::path() == 'user' ? 'active' : '' }}">
                                <a href="{{ url('/user') }}" class="menu-link">
                                    <i class="menu-icon tf-icons mdi mdi-account-key-outline"></i>
                                    <div data-i18n="User">Users</div>
                                </a>
                            </li>
                        @endcan
                        @can('roles_index')
                            <li class="menu-item {{ Request::path() == 'role' ? 'active' : '' }}">
                                <a href="{{ url('/role') }}" class="menu-link">
                                    <i class="menu-icon tf-icons mdi mdi-account-star-outline"></i>
                                    <div data-i18n="Roles">Roles</div>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @else
                <div></div>
            @endif
        </ul>
    </div>
</aside>
<!-- / Menu -->
