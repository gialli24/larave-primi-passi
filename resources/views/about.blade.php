<!doctype html>
<html lang="it" data-bs-theme="light">

<head>
    <title>About</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>

    <header class="app-header" style="height: 80px;">

        <nav class="h-100 navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">MyFirstLaravelApp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- /.app-header -->

    <main class="app-main" style="height: calc(100dvh - 80px - 80px);">

        <div class="jumbotron bg-primary text-white" style="height: 250px;">
            <div class="container h-100 d-flex flex-column justify-content-center">
                <h1 class="display-3">
                    About
                </h1>
            </div>
        </div>
        <!-- /.jumbotron -->

    </main>
    <!-- /.app-main -->

    <footer class="app-footer py-4 bg-body-tertiary" style="height: 80px;">
        <div class="container">
            <div class="text-center">
                &copy; 2023 MyFirstLaravelApp. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- /.app-footer -->

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>