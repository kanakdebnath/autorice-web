<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title') | Rice Mills</title>
    @include('backend.includes.style')
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @include('backend.includes.nav ')
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('backend.includes.sidenav')
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
                @yield('content')
            </main>
            <footer class="py-4 bg-light mt-auto">
                @include('backend.includes.footer')
            </footer>
        </div>
    </div>
    @include('backend.includes.script')
    @stack('script')
</body>

</html>
