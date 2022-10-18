<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/customers/list/export.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/customers/list/list.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/customers/add.js') }}"></script>


</head>

<body class="font-sans antialiased">
    @inertia

</body>

</html>
