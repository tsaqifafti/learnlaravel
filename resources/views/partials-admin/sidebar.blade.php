<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
                {{-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> --}}
                <div class="sidebar-brand-text mx-3">KAF Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.adduser')}}">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Create User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <script>
    const navItems = document.querySelectorAll('.nav-item');
    const currentUrl = window.location.href;

    navItems.forEach(item => {
        const link = item.querySelector('a').getAttribute('href');
        if (currentUrl.includes(link)) {
            item.classList.add('active');
        }

        item.addEventListener('click', () => {
            // Hapus class "active" dari semua elemen navbar
            navItems.forEach(navItem => {
                navItem.classList.remove('active');
            });

            // Tambahkan class "active" ke elemen yang diklik
            item.classList.add('active');
        });
    });
</script>