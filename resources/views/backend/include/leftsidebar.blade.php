<!-- body content start -->
<div class="body-content">
@if ( Auth::user()->role=="admin")

    <!-- left sidebar pc start -->
        <section class="left-sidebar">
            <div class="container-fluid">

                <!-- top part start -->

                <div class="row top-part">

                    <!-- middle part start -->
                    <div class="col-md-9 col-9">
                        <h3></h3>

                        <p> Admin</p>

                    </div>
                    <!-- middle part end -->

                </div>
                <!-- top part end -->

                <!-- navbar item start -->
                <div class="row nav-item">
                    <div class="col-md-12">
                        <ul>

                            <li>
                                <a href="{{ route('home') }}">
                                    <div class="left">
                                        dashboard
                                    </div>
                                    <div class="right">
                                        <i class="fas fa-home"></i>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- navbar item end -->

                <!-- navbar item start -->
                <div class="row nav-item">
                    <div class="col-md-12">
                        <ul>

                            <li>
                                <a href="{{ route('user-list') }}">
                                    <div class="left">
                                        users
                                    </div>
                                    <div class="right">
                                        <i class="fas fa-home"></i>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- navbar item end -->

            </div>
        </section>
    @elseif(Auth::user()->role=="member")
        <section class="left-sidebar">
            <div class="container-fluid">

                <!-- top part start -->

                <div class="row top-part">

                    <!-- middle part start -->
                    <div class="col-md-9 col-9">
                        <h3></h3>

                        <p> Member</p>

                    </div>
                    <!-- middle part end -->

                </div>
                <!-- top part end -->

                <!-- navbar item start -->
                <div class="row nav-item">
                    <div class="col-md-12">
                        <ul>

                            <li>
                                <a href="{{ route('home') }}">
                                    <div class="left">
                                        dashboard
                                    </div>
                                    <div class="right">
                                        <i class="fas fa-home"></i>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- navbar item end -->

                <!-- navbar item start -->
                <div class="row nav-item">
                    <div class="col-md-12">
                        <ul>

                            <li>
                                <a href="{{ route('user-list') }}">
                                    <div class="left">
                                        users
                                    </div>
                                    <div class="right">
                                        <i class="fas fa-home"></i>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- navbar item end -->

            </div>
        </section>
@endif
<!-- left sidebar pc end -->
