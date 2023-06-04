<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechMarketHub</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap50/css/bootstrap.min.css') }}">

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('deconnexionadmin') }}" method="post">
                        @csrf
                        <button class="nav-link">
                            <i class="fas fa-power-off text-danger"></i>
                       </button>
                </form>
                </li>

            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="{{ route('accueil.admin') }}" class="brand-link">
                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light">TechMarketHub</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                    </div>
                        <a class="light"> ADMINISTRATEUR </a>
                    <div class="info">
                        <a href="#" class="d-block"></a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <ul class="nav ">
                            <li class="nav-item">
                                <a href="{{ route('accueil.admin') }}" class="nav-link ">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link ">

                                    <p>
                                        Catégorie
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('page.ajout.categorie') }}" class="nav-link">
                                            <i class="fas fa-plus nav-icon"></i>
                                            <p>Ajouter categories</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('liste.categorie') }}" class="nav-link">
                                            <i class="fas fa-list nav-icon"></i>
                                            <p>Liste des catégorie</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link ">
                                    <i class="nav-icon fas fa-users-alt"></i>
                                    <p>
                                        Proprietaires
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('ajout.prop.page') }}" class="nav-link ">
                                            <i class="fas fa-plus nav-icon"></i>
                                            <p>Ajouter proprietaire</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('liste.propriétaire') }}" class="nav-link">
                                            <i class="fas fa-list nav-icon"></i>
                                            <p>Liste des proprietaire</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0"></h1> -->
                        </div>
                        <!-- <div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Starter Page</li>
</ol>
</div> -->
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        @yield('contenu')

                    </div>
                </div>

            </div>
        </div>



    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('bootstrap50/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
