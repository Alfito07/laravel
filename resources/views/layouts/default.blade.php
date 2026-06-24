@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
    
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
<base href="../">

<title>@yield('title', $page_title ?? '') | {{ config('dz.name') }}</title>

@include('elements.meta')
<link rel="shortcut icon" type="image/png" href="{{ config('dz.site_level.favicon') }}">

@include('elements.page-css')

</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
@include('elements.preloader')	
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
                @php
    $classConfig = config('dz.pagelevel.'.$action.'.mainwrapperclass');
@endphp
                            

	<div id="main-wrapper" @if(isset($classConfig)) class="{{$classConfig}}" @endif>
		<!--**********************************
            Nav header start
        ***********************************-->
@include('elements.nav-header')
		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
@include('elements.chatbox')
		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
@include('elements.header')
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
@include('elements.sidebar')
		<!--**********************************
            Sidebar end
        ***********************************-->

@yield('content')


        <!--**********************************
            Footer start
        ***********************************-->
@include('elements.footer')
        <!--**********************************
            Footer end
        ***********************************-->

	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->



@include('elements.page-js')

@yield('local-js')
</body>

</html>