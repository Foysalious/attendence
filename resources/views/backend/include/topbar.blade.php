<section class="topbar-pc">
    <div class="container-fluid">
        <div class="row">

            <!-- logo start -->
            <div class="col-md-3 col-3">
                <div class="logo">

                    <img src="{{ asset('frontend/images/logo.png') }}" width="50px" class="img-fluid" alt="">

                </div>
            </div>
            <!-- logo end -->

            <!-- bar start -->
            <div class="col-1 col-1 for-mob">
                <i class="fas fa-bars show-nav"></i>
                <i class="fas fa-times hide-nav"></i>
            </div>
            <!-- bar end -->

            <!-- my profile start -->
            <div class="col-md-9 col-7">
                <div class="my-profile">
                    <ul>
                        <li>

                            <img src="{{ asset('backend/images/user.png') }}" width="32px" style="border-radius: 100%;" class="img-fluid" alt="">

                        </li>
                        <li class="user-admin">
                            <i class="fas fa-user"></i>
                            <div class="profile-dropdown">
                                <ul>
                                    <li>
{{--                                        <a href="{{ route('profile.edit', Auth::user()->id ) }}">My Profile</a>--}}
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>
