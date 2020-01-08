<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.9.2
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ARSOFT | Dashboard</title>
    @include('layouts.partials._head')
    @yield('extra_styles')

</head>

<body class="top-navigation fixed-nav">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                @include('layouts.partials._navbar')
            </div>
            <div class="wrapper wrapper-content">
                @yield('contents')
            </div>
            <div class="footer fixed">
                <div class="float-right">
                    {{-- 10GB of <strong>250GB</strong> Free. --}}
                </div>
                <div>
                    <strong>Copyright</strong> Alamraya Software &copy; 2014-2018
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials._script')
    @yield('extra_scripts')
</body>
</html>
