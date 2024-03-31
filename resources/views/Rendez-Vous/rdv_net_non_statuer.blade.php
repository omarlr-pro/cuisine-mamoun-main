<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Phoenix</title>
        <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
        <link rel="manifest" href="../../assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <script src="../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="../../vendors/simplebar/simplebar.min.js"></script>
        <script src="../../assets/js/config.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link href="../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
        <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
        <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
        <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
        <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
        <script>
            var phoenixIsRTL = window.config.config.phoenixIsRTL;
            if (phoenixIsRTL) {
              var linkDefault = document.getElementById('style-default');
              var userLinkDefault = document.getElementById('user-style-default');
              linkDefault.setAttribute('disabled', true);
              userLinkDefault.setAttribute('disabled', true);
              document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
              var linkRTL = document.getElementById('style-rtl');
              var userLinkRTL = document.getElementById('user-style-rtl');
              linkRTL.setAttribute('disabled', true);
              userLinkRTL.setAttribute('disabled', true);
            }
        </script>
    </head>
    <body>
        <main class="main" id="top">
            <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
                <script>
                    var navbarStyle = window.config.config.phoenixNavbarStyle;
                    if (navbarStyle && navbarStyle !== 'transparent') {
                      document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content">
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                            <li class="nav-item">
                                <p class="navbar-vertical-label">Tableau de bord</p>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="compass"></span></span>
                                            <span>
                                            <span class="nav-link-text">Tableau de bord</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <p class="navbar-vertical-label">Gestion des rendez-vous</p>
                                <hr class="navbar-vertical-line" />
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('rendezvous.rdv_net_non_statuer') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="user-plus"></span></span>
                                            <span>
                                            <span class="nav-link-text">RDV net non statuer</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('rendezvous.rdv_net_jour_j') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="user-plus"></span></span>
                                            <span>
                                            <span class="nav-link-text">RDV net jour J</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('rendezvous.rdv_brut_a_confirmer') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="check-square"></span></span>
                                            <span>
                                            <span class="nav-link-text">RDV Brut à confirmer</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <p class="navbar-vertical-label">Gestion des clients</p>
                                <hr class="navbar-vertical-line" />
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('clients.create') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="user-plus"></span></span>
                                            <span>
                                            <span class="nav-link-text">Enregistrer un client</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('clients.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="list"></span></span>
                                            <span>
                                            <span class="nav-link-text">Voir tous les clients</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <p class="navbar-vertical-label">Gestion des relances</p>
                                <hr class="navbar-vertical-line" />
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('relances.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="clock"></span></span>
                                            <span>
                                            <span class="nav-link-text">Relance call center</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <p class="navbar-vertical-label">Authentification</p>
                                <hr class="navbar-vertical-line" />
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('users.create') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="user-plus"></span></span>
                                            <span>
                                            <span class="nav-link-text">Enregistrer un utilisateur</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('users.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="list"></span></span>
                                            <span>
                                            <span class="nav-link-text">Voir tous les utilisateurs</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-vertical-footer">
                    <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
                    <span class="uil uil-left-arrow-to-left fs-8"></span>
                    <span class="uil uil-arrow-from-right fs-8"></span>
                    <span class="navbar-vertical-footer-text ms-2">Réduire la vue</span>
                    </button>
                </div>
            </nav>
            <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggle-icon">
                        <span class="toggle-line"></span>
                        </span>
                        </button>
                        <a href="../../index-2.html">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                                    <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:50rem;">
                        <div class="position-relative" data-bs-toggle="search" data-bs-display="static">
                            <input class="form-control search-input fuzzy-search form-control-sm" type="search" placeholder="Rechercher un client" aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </div>
                        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
                            <button class="btn btn-link p-0" aria-label="Close"></button>
                        </div>
                        <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                            <div class="scrollbar-overlay" style="max-height: 30rem;">
                                <div class="list">
                                    <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span>
                                    </h6>
                                    <hr class="my-0" />
                                    <div class="py-2">
                                        <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title">
                                                    <span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title">
                                                    <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p class="fallback fw-bold fs-7 d-none">Aucun résultat trouvé</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2">
                                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                                <span class="icon" data-feather="moon"></span>
                                </label>
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                                <span class="icon" data-feather="sun"></span>
                                </label>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-body-emphasis position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: auto;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4">
                                                <a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="../../assets/img/nav-icons/behance.webp" alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="../../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!">
                                                    <img src="../../assets/img/nav-icons/behance.webp" alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-soft " src="../../assets/img/team/40x40/57.webp" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-3 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-soft " src="../../assets/img/team/72x72/57.webp" alt="" />
                                            </div>
                                            <h6 class="mt-3 text-body-emphasis">{{ Auth::user()->civilite }} {{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h6>
                                            <h6 class="mt-2 text-opacity-75 text-body-tertiary">{{ Auth::user()->statut }}</h6>
                                        </div>
                                    </div>
                                    <div class="overflow-auto scrollbar p-0 border-top border-translucent" style="height: auto;">
                                        <ul class="nav d-flex flex-column mb-2 mt-2">
                                            <li class="nav-item">
                                                <a class="nav-link px-3" href="{{ route('profil') }}">
                                                <span class="me-2 text-body" data-feather="user"></span>
                                                <span>Profil</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-3" href="#!">
                                                <span class="me-2 text-body" data-feather="settings"></span>Paramètre</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top border-translucent">
                                        <div class="px-2 my-2">
                                            <form method="post" action="{{ route('logout') }}">
                                                @csrf
                                                <button  type="submit" class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                                                <span class="me-2" data-feather="log-out"></span>Se déconnecter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <script>
                var navbarTopShape = window.config.config.phoenixNavbarTopShape;
                var navbarPosition = window.config.config.phoenixNavbarPosition;
                var body = document.querySelector('body');
                var navbarDefault = document.querySelector('#navbarDefault');
                var navbarTop = document.querySelector('#navbarTop');
                var documentElement = document.documentElement;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                  navbarDefault.remove();
                  navbarVertical.remove();
                  document.documentElement.setAttribute('data-navigation-type', 'horizontal');
                } else {
                  navbarDefault.removeAttribute('style');
                  navbarVertical.removeAttribute('style');
                }
                var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarVerticalStyle === 'darker') {
                  navbarVertical.setAttribute('data-navbar-appearance', 'darker');
                }
            </script>
            <div class="content">
                <nav class="mb-3" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a>Rendez-vous</a>
                        </li>
                        <li class="breadcrumb-item">Rendez-vous net non statuer</li>
                    </ol>
                </nav>
                <div class="border-bottom border-translucent mx-n3 px-2 mx-lg-n6 px-lg-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-sm-flex justify-content-between">
                                <h3 class="mb-4">Rendez-vous net non statuer</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="clientstable" data-list='{"valueNames":["1","2","3","4","5","6","7"],"page":20,"pagination":true}'>
                        <div class="row justify-content-end mt-3 mb-3">
                            <div class="col-auto">
                                <div class="d-flex">
                                    <div class="search-box me-2">
                                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Rechercher un client" aria-label="Search" />
                                            <span class="fas fa-search search-box-icon"></span>
                                        </form>
                                    </div>
                                    <button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="modal" data-bs-target="#filterModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-filter text-primary" data-fa-transform="down-3"></span></button>
                                    <div class="modal fade" id="filterModal" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border border-translucent">
                                                <form id="addEventForm" autocomplete="off">
                                                    <div class="modal-header border-translucent p-4">
                                                        <h5 class="modal-title text-body-highlight fs-6 lh-sm">Filtre par</h5>
                                                        <button class="btn p-1 text-body" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-9"></span></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-2 px-4">
                                                        <div class="mb-3">
                                                            <label class="fw-bold mb-2 text-body-highlight" for="ville">Ville</label>
                                                            <select class="form-select" id="ville">
                                                                <option value="Casablanca" selected="selected">Casablanca</option>
                                                                <option value="Rabat">Rabat</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-end align-items-center px-4 pb-4 border-0 pt-3"><button class="btn btn-sm btn-phoenix-primary px-4 fs-10 my-0" type="submit"> <span class="fas fa-arrows-rotate me-2 fs-10"></span>Réinitialiser</button><button class="btn btn-sm btn-primary px-9 fs-10 my-0" type="submit">Valider</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-body-emphasis border-y mt-2 position-relative top-1">
                            <div class="table-responsive scrollbar">
                                <table class="table fs-9 mb-0">
                                    <thead>
                                        <tr>
                                            <th class="sort align-middle text-center py-3" data-sort="1" style="width:auto;">Nom</th>
                                            <th class="sort align-middle text-center py-3" data-sort="2" style="width:auto;">Ville</th>
                                            <th class="sort align-middle text-center py-3" data-sort="3" style="width:auto;">Tél.</th>
                                            <th class="sort align-middle text-center py-3" data-sort="4" style="width:auto;">Date du rendez-vous</th>
                                            <th class="sort align-middle text-center py-3" data-sort="5" style="width:auto;">Vendeur</th>
                                            <th class="sort align-middle text-center py-3" data-sort="6" style="width:auto;">Prospecteur (VR1)</th>
                                            <th class="sort align-middle text-center py-3" data-sort="7" style="width:auto;">Étapes à traiter</th>
                                            <th class="sort align-middle text-center py-3"style="width:auto;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="members-table-body">
                                        @foreach($clients as $client)
                                        @foreach ($client->etapes as $etape)
                                        <tr>
                                            <td class="1 align-middle text-center fw-semibold py-3">
                                                <div><a href="#">{{ $client->civilite }} {{ $client->nom }} {{ $client->prenom }}</a></div>
                                            </td>
                                            <td class="2 align-middle text-center fw-semibold py-3">
                                                {{ $client->ville }}
                                            </td>
                                            <td class="3 align-middle text-center fw-semibold py-3">
                                                {{ $client->tel_mobile }}
                                            </td>
                                            <td class="4 align-middle text-center fw-semibold py-3">
                                                26 Mar 2024 15:30
                                            </td>
                                            <td class="5 align-middle text-center fw-semibold py-3">
                                                {{ $client->whoaddit }}
                                            </td>
                                            <td class="6 align-middle text-center fw-semibold py-3">
                                                {{ $client->prospecteur }}
                                            </td>
                                            <td class="7 align-middle text-center fw-semibold py-3">
                                                {{ ($client->etapes->last()->etape) }}
                                            </td>
                                            <td class="align-middle py-1 text-center fw-semibold text-body-highlight">
                                                <div class="btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="#!">Modifier</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger">Supprimer</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                <div class="col-auto d-flex">
                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
                                    <a class="fw-semibold" href="#!" data-list-view="*">Voir tout<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">Voir moins<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </div>
                                <div class="col-auto d-flex">
                                    <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                    <ul class="mb-0 pagination"></ul>
                                    <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer position-absolute">
                    <div class="row g-0 justify-content-between align-items-center h-100">
                        <div class="col-12 col-sm-auto text-center">
                            <a class="mb-0 text-body-tertiary text-opacity-85" href="https://sicilia.ma/" target="_blank">Sicilia.ma</a>
                            <a class="mb-0 text-body-tertiary text-opacity-85"></a>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-body-tertiary text-opacity-85">Customer Relationship Management - V1.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </main>
        <script>
            function refreshPage() {
              // Recharge la page actuelle
              location.reload();
            }
        </script>
        <script src="../../vendors/popper/popper.min.js"></script>
        <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
        <script src="../../vendors/anchorjs/anchor.min.js"></script>
        <script src="../../vendors/is/is.min.js"></script>
        <script src="../../vendors/fontawesome/all.min.js"></script>
        <script src="../../vendors/lodash/lodash.min.js"></script>
        <script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
        <script src="../../vendors/list.js/list.min.js"></script>
        <script src="../../vendors/feather-icons/feather.min.js"></script>
        <script src="../../vendors/dayjs/dayjs.min.js"></script>
        <script src="../../assets/js/phoenix.js"></script>
        <script src="../../assets/js/flatpickr.js"></script>
    </body>
</html>