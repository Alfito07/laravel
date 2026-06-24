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

<body class="vh-100">

	@yield('content')

@include('elements.page-js')

@yield('local-js')
</body>

</html>