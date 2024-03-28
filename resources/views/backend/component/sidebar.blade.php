<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ App\Models\About::first()->name }} University</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/about">
            <i class="fas fa-fw fa-vote-yea"></i>
            <span>About</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/service">
            <i class="fas fa-fw fa-concierge-bell"></i>
            <span>Service</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/reason">
            <i class="fas fa-fw fa-tree"></i>
            <span>Reason</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/major">
            <i class="fas fa-fw fa-tree"></i>
            <span>Major</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/presentation">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Presentation</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/contact">
            <i class="fas fa-fw fa-envelope-open"></i>
            <span>Contact
                @if (App\Models\Contact::where('status', 0)->count() > 0)
                    <span class="ml-2 badge badge-danger">New</span>
                @endif
            </span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/user">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span></a>
    </li>
     <li class="nav-item active">
        <a class="nav-link" href="/registration">
           <i class="fas fa-fw fa-address-card"></i>
            <span>
                Registration
                @if (App\Models\Registration::where('status','registered')->count()>0)
                <span class="ml-2 badge badge-danger">New</span>

                @endif
            </span></a>
    </li>
    <!-- Divider -->




    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
