<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">BAHRI HR</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <ul class="sidebar-menu">
                <li class='{{ Request::is('dashboard') ? 'active' : '' }}'>
                           <a class="nav-link" href="{{ url('home') }}">General Dashboard</a>
                       </li>
           </ul>
           <ul class="sidebar-menu">
               <li class="nav-item dropdown">
                   <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>User Manajement</span></a>
                   <ul class="dropdown-menu">
                       <li class=''>
                           <a href="{{ route('users.index') }}" class="nav-link ">Users</a>
                       </li>

                   </ul>
                   <ul class="dropdown-menu">
                       <li class=''>
                           <a class="nav-link" href="  ">asistent</a>
                       </li>
                   </ul>
               </li>
           </ul>


            <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Company</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Attendances</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Permission</span>
                </a>
            </li>

    </aside>
</div>
