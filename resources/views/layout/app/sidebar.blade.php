<div>
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('admin.home') }}" class="text-nowrap logo-img">
                <img src="{{ asset('admin_dashbroad/assets/images/logos/logo.jpg') }}" width="200px" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar mt-3">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false">
                        <span>
                            <i class="bi bi-speedometer"></i>
                        </span>
                        <span class="hide-menu">Thống kê</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                    <span class="hide-menu text-white">Quản lý tài khoản</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/user/*') ? 'active' : '' }}"
                        href="{{ route('admin.user.list') }}" aria-expanded="false">
                        <span>
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <span class="hide-menu">Thông tin tài khoản</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="bi bi-people-fill"></i>
                        </span>
                        <span class="hide-menu">Thông tin nhóm quyền</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/supliers/*') ? 'active' : '' }}"
                        href="{{ route('admin.suplier.list') }}">
                        <span>
                            <i class="bi bi-archive-fill"></i>
                        </span>
                        <span class="hide-menu">Nhà cung cấp</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-white">Quản lý tài sản</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/equipment-type/*') ? 'active' : '' }}"
                        href="{{ route('admin.equipment_type.list') }}">
                        <span>
                            <i class="bi bi-bookmark-fill"></i>
                        </span>
                        <span class="hide-menu">Loại thiết bị</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/equipment/*') ? 'active' : '' }}"
                        href="{{ route('admin.equipment.list') }}">
                        <span>
                            <i class="bi bi-inboxes-fill"></i>
                        </span>
                        <span class="hide-menu">Thiết bị</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/allocation/*') ? 'active' : '' }}"
                        href="{{ route('admin.allocation.list') }}">
                        <span>
                            <i class="bi bi-basket3-fill"></i>
                        </span>
                        <span class="hide-menu">Cấp phát</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-white">Kiểm tra và sửa chữa</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <span>
                            <i class="bi bi-check-circle-fill"></i>
                        </span>
                        <span class="hide-menu">Kiểm tra</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <span>
                            <i class="bi bi-gear-wide-connected"></i>
                        </span>
                        <span class="hide-menu">Sửa chữa</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <span>
                            <i class="bi bi-bag-fill"></i>
                        </span>
                        <span class="hide-menu">Thanh lý</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
