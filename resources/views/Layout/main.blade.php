<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>personality prediction</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:title" content="Admin Templates - Dashboard Templates">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <link rel="shortcut icon" href="{{ asset('PublicArea/images/favicon.ico') }}">
    @include('libraries.styles')
    <title>personality prediction</title>
    <!-- plugins:css -->


</head>

<body>
    <div class="page-wrapper">

    <main class="main">

        @include('Layout.navBar')

        @if(session('success'))
            <div class="success-message">
                <i class="fas fa-check-circle"></i>
                {{ session('success') }}
                <button class="close-message" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        <div class="main-container">
            @yield('container')
            @include('Layout.footer')
            @include('libraries.scripts')
        </div>
    </main>

</body>

</html>
