<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('layouts.partials.header-links')
</head>

<body id="kt_body"
    class="header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.partials.Sidebar')

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.partials.header')

                <div class="content-wrapper" id="app">
                    @yield('content')
                </div>

                @include('layouts.partials.Footer')
            </div>
        </div>
    </div>
    @include('layouts.partials.Footer-script')
</body>

</html>
