<!doctype html>
<html lang="{{ config('app.locale') }}">
    @include('includes.homepage.head')
    <body class="loading-overlay-showing" data-loading-overlay>
        <div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

        <!-- Side Overlay-->
        {{-- @include('includes.homepage.right-sidebar') --}}


        {{-- @include('includes.homepage.sidebar') --}}
        <!-- END Sidebar -->

        <div class="body">
            <!-- Header -->
            @include('includes.homepage.header')
            <!-- END Header -->

            <!-- Main Container -->
            <div role="main" class="main">
                {{-- @include('includes.homepage.menu') --}}
                @include('includes.homepage.alerts')
                @yield('content')
                {{-- @include('includes.homepage.actionbox') --}}
                @include('includes.homepage.footer1')
            </div>
            <!-- END Main Container -->

        </div>

        <!-- Footer -->

        {{-- @include('includes.homepage.footer2') --}}
        <!-- END Footer -->

        <!-- Apps Modal -->
        <!-- Opens from the modal toggle button in the header -->
        {{-- @include('includes.homepage.modals') --}}
        <!-- END Apps Modal -->

        <!-- END Page Container -->

        @include('includes.homepage.scripts')
    </body>
</>
