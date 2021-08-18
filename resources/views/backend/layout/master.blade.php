@include('backend.include.head')
    <!-- Pre-loader start -->
    {{-- @include('backend.include.preloader') --}}
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('backend.include.navbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('backend.include.sidebar')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        @include('backend.include.pageheader')
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        @yield('content')
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required Jquery -->
@include('backend.include.script')
