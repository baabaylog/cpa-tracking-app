<div class="sidebar-wrapper sidebar-theme">
            
    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            {{-- <li class="menu">
                <a href="#dashboard" data-active="{{ Route::currentRouteName() == 'admin.dashboard' ? 'true' : 'false'  }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="index.html"> Sales </a>
                    </li>
                    <li>
                        <a href="index2.html"> Analytics </a>
                    </li>
                </ul>
            </li> --}}

            <li class="menu">
                <a href="{{ route('admin.dashboard') }}" data-active="{{ Route::currentRouteName() == 'admin.dashboard' ? 'true' : 'false'  }}"  aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="{{ route('admin.postback.view') }}" data-active="{{ Route::currentRouteName() == 'admin.postback.view' ? 'true' : 'false'  }}"  aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"/></svg>
                        <span>Postback URL</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="{{ route('admin.offer.view') }}" data-active="{{ Route::currentRouteName() == 'admin.offer.view' ? 'true' : 'false'  }}"  aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M427.8 380.7l-196.5 97.8a18.6 18.6 0 0 1 -14.7 0L20.2 380.7c-4-2-4-5.3 0-7.3L67.2 350a18.7 18.7 0 0 1 14.7 0l134.8 67a18.5 18.5 0 0 0 14.7 0l134.8-67a18.6 18.6 0 0 1 14.7 0l47.1 23.4c4.1 2 4.1 5.2 0 7.2zm0-136.5l-47.1-23.4a18.6 18.6 0 0 0 -14.7 0l-134.8 67.1a18.7 18.7 0 0 1 -14.7 0L81.9 220.7a18.7 18.7 0 0 0 -14.7 0l-47.1 23.4c-4 2-4 5.3 0 7.3l196.5 97.8a18.6 18.6 0 0 0 14.7 0l196.5-97.8c4.1-2 4.1-5.3 0-7.3zM20.2 130.4l196.5 90.3a20.1 20.1 0 0 0 14.7 0l196.5-90.3c4-1.9 4-4.9 0-6.7L231.3 33.4a19.9 19.9 0 0 0 -14.7 0l-196.5 90.3c-4.1 1.9-4.1 4.9 0 6.7z"/></svg>
                        <span>Offer</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="{{ route('admin.users.view') }}" data-active="{{ Route::currentRouteName() == 'admin.users.view' ? 'true' : 'false'  }}"  aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                        <span>Users</span>
                    </div>
                </a>
            </li>

        </ul>
        
    </nav>

</div>