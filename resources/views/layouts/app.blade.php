<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"
        integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <script src="main.js"></script>
</head>

<body>
    <div class="wrapper">

        <!-- HEADER -->
        <header>
            <div class="netflixLogo">
                <a id="logo" href="/#home"><img
                        src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true"
                        alt="Logo Image"></a>
            </div>
            <nav class="main-nav">
                <a href="/#">Home</a>
                <a href="/#tvShows">TV Shows</a>
                <a href="/#movies">Movies</a>
                <a href="/#originals">Originals</a>
                <a href="/#">Recently Added</a>
                <a href="{{ route('personnes.index') }}">Acteur</a>
                @role('admin')
                <a href="{{ route('personnes.relation') }}">Relation</a>
                @endrole
            </nav>
            <nav class="sub-nav">
                <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
                <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
                <a href="/account">Account</a>
            </nav>
        </header>
        <!-- END OF HEADER -->

        
        


        @yield('contenu')

       



        <!-- FOOTER -->
        <footer>
            <p>&copy 1997-2018 Netflix, Inc.</p>
            <p>Carlos Avila &copy 2018</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
