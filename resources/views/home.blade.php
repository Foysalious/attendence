{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
@extends('backend.template.layout')

@section('body-content')
    <!-- main content start -->
    <div class="main-content">
        <div class="container-fluid">

            <!-- page indicator start -->
            <section class="page-indicator">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <i class="fas fa-home"></i>
                            </li>
                            <li>
                                dashboard
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- page indicator end -->

            <!-- dashbaord statistics seciton start -->
            <section class="statistics">
                <div class="row">

                    <!--- stat card start -->


                    <div class="col-md-3">
                        <form action="{{ route('attendence') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <button type="submit">Click Me!</button>
                        </form>
                    </div>

                    <!--- stat card end -->

                    <!--- stat card end -->

                </div>
            </section>
            <!-- dashbaord statistics seciton end -->

        </div>
    </div>
    <!-- main content end -->
@endsection
