<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Minimaliste')</title>
    <link rel="stylesheet" href="/bootstrap.css">
</head>
<body>
    <header class="bg-primary text-white py-3 mb-4">
        <div class="container">
            <h1 class="h2">Mon Blog</h1>
            <div class="row d-flex justify-content-around align-items-center">
                <div class="col d-flex">
                    <a class="nav-link text-white" href="/articles">Accueil</a>
                    @auth
                        <a class="nav-link text-white" href="/articles/create">Créer un Article</a>
                    @endauth
                </div>

                <div class="col d-flex justify-content-end">
                    @guest
                        <a class="nav-link text-white" href="/login">Login</a>
                    @endguest
                    @auth
                        <form action="/logout" method="POST" class="d-inline">
                            @csrf
                            <button class="nav-link btn btn-link text-white" type="submit">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <main class="container d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-12 mx-auto">
                @yield('content')
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; 2024 Mon Blog Minimaliste</p>
    </footer>
</body>
</html>
