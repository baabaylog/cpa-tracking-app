<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-item theme-brand flex-row  text-center">
            {{-- <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li> --}}
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> {{config('app.name')}} </a>
            </li>
        </ul>

        {{-- <ul class="navbar-item flex-row ml-md-0 ml-auto">
            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    </div>
                </form>
            </li>
        </ul> --}}

        <ul class="navbar-item flex-row ml-md-auto">

            @if(Auth::user())
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" style="padding: 0; position: relative; display:flex;align-items: center;" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span style="font-size: 17px;margin-right: 10px;color: #fff;text-transform: capitalize;" > {{ Auth::user()->name }} </span>
                        <img src="{{asset('assets/img/90x90.jpg')}}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            {{-- Dasboard --}}
                            <div class="dropdown-item">
                                <a class="" href=" @hasanyrole('admin|manager') {{ route('admin.dashboard') }} @else  {{ route('user.dashboard') }}  @endhasanyrole " >
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm64 64V416H224V160H64zm384 0H288V416H448V160z"/></svg> Dashboard</a>
                            </div>
                            {{-- Profile --}}
                            <div class="dropdown-item">
                                <a class="" href=" {{ route('profile.view') }}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                            </div>
                            {{-- Log out --}}
                            <div class="dropdown-item">
                                <form id="logout-form" action="{{ route('logout')}}" method="post">@csrf</form>
                                <a class="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Log Out</a>
                            </div>
                        </div>
                    </div>
                </li>
            @endif

        </ul>
    </header>
</div>