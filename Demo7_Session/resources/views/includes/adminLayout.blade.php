<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>AKS Machine Test</title>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
    <!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->

    <!-- Menu start --------------->
    <link href="{{ url('assets/menu/quickmenu0.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ url('assets/menu/quickmenu0.js') }}"></script>
    <!-- Menu End --------------->
</head>

<body>
    @include('includes.header')

    @yield('main_content')

    @include('includes.footer')
</body>

</html>
