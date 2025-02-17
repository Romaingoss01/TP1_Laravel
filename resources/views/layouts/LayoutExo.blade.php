<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>@yield('GrandTitre')</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/accueil')}}">Accueil</a></li>
                <li><a href="{{ url('/about')}}">À propos</a></li>
                <li><a href="{{ url('/contact')}}">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>@yield('Contenu')
    </main>
    <footer>
        <p>&copy; 2025 Mon Site. Tous droits réservés.</p>
    </footer>
</body>
</html>
