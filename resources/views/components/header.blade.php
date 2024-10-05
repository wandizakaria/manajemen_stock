<div class="header">
    <div class="header-content clearfix">
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="text-right" style="margin-right: 10px; line-height: 1.3;">
                        <span style="font-size: 16px; font-weight: bold;">{{ Auth::user()->name }}</span><br>
                        <span class="text-muted"
                            style="font-size: 14px; font-weight: normal;">{{ Auth::user()->level }}</span>
                    </div>
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{ asset('assets/images/user/1.png') }}" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="{{ route('profile.edit') }}"><i class="fas fa-user"></i>
                                        <span>Profile</span></a>
                                </li>
                                <hr class="my-2">
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();"><i
                                                class="fas fa-key"></i>
                                            <span>Logout</span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
