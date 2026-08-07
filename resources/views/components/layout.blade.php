<html>
    <head>
        <title>{{ isset($title) ? $title : "layout" }}</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="layout-body-container">
        <header class="header-container">
            <div class="header">
                {{-- <input type="checkbox" id="menu-toggle" class="menu-toggle">
                <label for="menu-toggle" class="fa fa-bars" aria-hidden="true"></label> --}}
                <h1 class="header-txt">CMS</h1>
            </div>
        </header>
        <main class="layout-container">
            <div class="sidebar-container">
                <div class="sidebar">
                    <a class="sidebar-link" href="/doctors">Doctors</a>
                    <a class="sidebar-link" href="/patients">Patients</a>
                    <a class="sidebar-link" href="/appointments">Appointments</a>
                </div>
                <div class="content-container">
                    {{ $slot }}
                </div> 
            </div>        
        </main>
    </body>
</html>