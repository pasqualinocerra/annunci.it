<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Annunci</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
        body {
            margin: 0;
            padding: 0;
            line-height: inherit;
            background-color: orange;
        }

        h1 {
            font-size: 50px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            line-height: 2;
            color: green;
        }

        h2 {
            font-size: 35px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            line-height: 4;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="annunci.png" width="200px" height="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrati</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/listaCategorie">Categorie disponibili</a></li>
                            @if (auth()->user())
                                <li><a class="dropdown-item" href="/nuovaCategoria">Aggiungi categoria</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="card p-5 shadow-lg bg-light" style="widht: 400px height:200px">
            <h2 class="text-center mb-4">Registrati</h2>
            <form action="/register" method="post">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <!-- Name Input -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tuo nome"
                        required>
                </div>

                <!-- Email Input -->
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Inserisci la tua email" required>
                </div>

                <!-- Password input -->
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Inserisci la tua password" required>
                </div>

                <!-- Password confermation -->
                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Conferma password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Conferma password" required>
                </div>

                <!-- Submit button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </div>
            </form>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center text-lg-start mt-5">
        <div class="container p-4">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-6 col-md-12">
                    <h5 class="text-uppercase">Annunci.it</h5>
                    <p>
                        Sito di annunci di vendita online.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Links column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Link</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#!" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#!" class="text-white text-decoration-none">Chi siamo</a></li>
                        <li class="mb-2"><a href="#!" class="text-white text-decoration-none">Servizi</a></li>
                        <li class="mb-2"><a href="#!" class="text-white text-decoration-none">Contatti</a></li>
                    </ul>
                </div>
                <!-- Links column -->

                <!-- Social media column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Seguici</h5>
                    <a href="#" class="text-white me-2 text-decoration-none">Facebook</a>
                    <a href="#" class="text-white me-2 text-decoration-none">Twitter</a>
                    <a href="#" class="text-white text-decoration-none">Instagram</a>
                </div>
            </div>
        </div>

        <!-- Copyright -->

        <div class="text-center p-3 bg-dark text-white">
            © 2024 Copyright:
            <a class="text-white text-decoration-none" href="#">Team Pasqualino</a>
        </div>

    </footer>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>