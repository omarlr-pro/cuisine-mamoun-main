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
                                    <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="user-plus"></span></span>
                                            <span>
                                            <span class="nav-link-text">RDV net non statuer</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="user-plus"></span></span>
                                            <span>
                                            <span class="nav-link-text">RDV net jour J</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
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
                                            <span class="nav-link-text">Relance reporté</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon"><span data-feather="x-circle"></span></span>
                                            <span>
                                            <span class="nav-link-text">Relance annulée</span>
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
                                                <a class="nav-link px-3" href="{{ route('profile') }}">
                                                <span class="me-2 text-body" data-feather="user"></span>
                                                <span>Profile</span>
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
            <div class="modal fade" id="relance" tabindex="-1" aria-labelledby="relance" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-body-highlight" id="relancecallcenter">Ajouter une relance rendez-vous call center</h5>
                            <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-9"></span></button>
                        </div>
                        <form action="{{ route('relance.store') }}" method="POST"  >
                            @csrf
                            <div class="modal-body">
                                <div class="table-responsive scrollbar">
                                    <table class="table fs-9 mb-1">
                                        <tbody class="list" id="members-table-body">
                                            <tr>
                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    Prise de rendez-vous
                                                </td>
                                                <td class="align-middle text-center fw-semibold p-2 px-3">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6" style="padding-right: 0.4rem;">
                                                            <input class="form-control" id="basic-form-dob" type="date" style="padding-top: 9.5px;"/>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6" style="padding-left: 0.4rem;">
                                                            <input class="form-control" type="time" id="appt" name="appt"/>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    Reporter la relance
                                                </td>
                                                <td class="align-middle text-center fw-semibold p-2 px-3">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6" style="padding-right: 0.4rem;">
                                                            <input class="form-control" id="basic-form-dob" type="date" style="padding-top: 9.5px;" name="reporter_la_relance"/>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6" style="padding-left: 0.4rem;">
                                                            <input class="form-control" type="time" id="appt" name="appt"/>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    Annuler la relance
                                                </td>
                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="annuler" name="annuler" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    Remarque
                                                </td>
                                                <td class="align-middle text-center fw-semibold p-2 px-3">
                                                    <textarea class="form-control"  name="remarque" id="floatingTextarea2" placeholder="Laissez une remarque" style="height: 10px"></textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="text" class="form-control" name="whoaddit" value="{{ Auth::user()->nom }} {{ Auth::user()->prenom }}" readonly style="display: none;" >
                                <input type="text" class="form-control" name="client_id" value="{{ $client->id }}" readonly style="display: none;">
                                <button class="btn btn-phoenix-secondary me-2 px-6" type="button" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer le relance</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="valider" tabindex="-1" aria-labelledby="valider" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-body-highlight" id="relancecallcenter">Valider l'étape</h5>
                            <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-9"></span></button>
                        </div>
                        <form action="{{ route('etapes.store') }}" method="POST"  >
                            @csrf
                            <div class="modal-body">
                                <div class="table-responsive scrollbar">
                                    <table class="table fs-9 mb-1">
                                        <tbody class="list" id="members-table-body">
                                            <tr>
                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    Prise de rendez-vous
                                                </td>
                                                <td class="align-middle text-center fw-semibold p-2 px-3">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6" style="padding-right: 0.4rem;">
                                                            <input class="form-control" id="basic-form-dob" type="date" style="padding-top: 9.5px;" name="date"/>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6" style="padding-left: 0.4rem;">
                                                            <input class="form-control" type="time" id="appt" name="appt"/>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <input type="text" class="form-control" name="whoaddit" value="{{ Auth::user()->nom }} {{ Auth::user()->prenom }}" readonly style="display: none;" >

                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    Remarque
                                                </td>
                                                <td class="align-middle text-center fw-semibold p-2 px-3">
                                                    <textarea class="form-control"  name="remarque" id="floatingTextarea2" placeholder="Laissez une remarque" style="height: 10px"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle text-left fw-semibold p-2 px-3">
                                                    Étape à valider
                                                </td>
                                                <td class="align-middle text-center fw-semibold p-2 px-3">
                                                    <select class="form-select" aria-label="Default select example" name="etape">
                                                      <option value="Contact">Contact</option>
                                                      <option value="Qualification">Qualification</option>
                                                      <option value="Mesure">Mesure</option>
                                                      <option value="Découverte">Découverte</option>
                                                      <option value="Solution - Plan">Solution - Plan</option>
                                                      <option value="Argumentaire">Argumentaire</option>
                                                      <option value="Passage de main">Passage de main</option>
                                                      <option value="Décision">Décision</option>
                                                      <option value="Vente">Vente</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="text" class="form-control" name="whoaddit" value="{{ Auth::user()->nom }} {{ Auth::user()->prenom }}" readonly style="display: none;" >
                                <input type="text" class="form-control" name="client_id" value="{{ $client->id }}" readonly style="display: none;">
                                <button class="btn btn-phoenix-secondary me-2 px-6" type="button" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider l'étape</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content">
                <nav class="mb-3" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a>Client</a>
                        </li>
                        <li class="breadcrumb-item">Fiche du client</li>
                    </ol>
                </nav>
                <div class="border-bottom border-translucent mx-n3 px-2 mx-lg-n6 px-lg-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-sm-flex justify-content-between">
                                <h3 class="mb-4">Fiche de {{ $client->civilite }} {{ $client->nom }} {{ $client->prenom }}</h3>
                                <div class="d-flex mb-3">
                                    <button class="btn btn-phoenix-secondary me-2 px-6"><span class="fa-solid fa-edit me-sm-2"></span><span class="d-none d-sm-inline">Modifier</span></button>
                                    <button class="btn btn-phoenix-danger me-2 px-6" onclick="event.preventDefault(); document.getElementById('delete-client-form-{{$client->id}}').submit();"><span class="fa-solid fa-trash me-2"></span><span>Supprimer</span></button>
                                    <form id="delete-client-form-{{$client->id}}" action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4">
                    <div class="row g-4 g-xl-6">
                        <div class="col-xl-5 col-xxl-3">
                            <div class="sticky-leads-sidebar">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('clients.update', $client->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="d-flex align-items-center mb-3">
                                                <h5 class="w-100">Information client</h5>
                                                <button class="btn btn-link p-0" type="submit">Enregistrer</button>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-phone"></span>
                                                    <h6 class="mb-0">Civilité</h6>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-select form-select-sm" name="civilite" >
                                                        <option value="{{ $client->civilite }}" selected disabled>{{ $client->civilite }}</option>
                                                        <option value="M.">Homme</option>
                                                        <option value="Mme">Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-gift"></span>
                                                    <h6 class="mb-0">Nom</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="nom" name="nom" value="{{ $client->nom }}">
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-gift"></span>
                                                    <h6 class="mb-0">Prénom</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="prenom" name="prenom" value="{{ $client->prenom }}">
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-phone"></span>
                                                    <h6 class="mb-0">Type du client</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="gender" name="gender" value="{{ $client->type }}">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-gift"></span>
                                                    <h6 class="mb-0">Date de naissance</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" class="form-control form-control-sm" id="dob" name="dob" value="{{ $client->dob }}">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('clients.update', $client->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="d-flex align-items-center mb-3">
                                                <h5 class="w-100">Adresse</h5>
                                                <button class="btn btn-link p-0" type="submit">Enregistrer</button>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-phone"></span>
                                                    <h6 class="mb-0">Adresse</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="adresse" name="adresse" value="{{ $client->adresse }}">
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-gift"></span>
                                                    <h6 class="mb-0">Adresse complémentaire</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="adresse_complementaire" name="adresse_complementaire" value="{{ $client->adresse_complementaire }}">
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-phone"></span>
                                                    <h6 class="mb-0">Code postal</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="code_postal" name="code_postal" value="{{ $client->code_postal }}">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-phone"></span>
                                                    <h6 class="mb-0">Ville</h6>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-select form-select-sm" name="ville">
                                                        <option value="{{ $client->ville }}"selected disabled>{{ $client->ville }}</option>
                                                        <option value="Al Hoceïma">Al Hoceïma</option>
                                                        <option value="Azilal">Azilal</option>
                                                        <option value="Beni Mellal">Beni Mellal</option>
                                                        <option value="Berkane">Berkane</option>
                                                        <option value="Berréchid">Berrechid</option>
                                                        <option value="Casablanca">Casablanca</option>
                                                        <option value="Chefchaouen">Chefchaouen</option>
                                                        <option value="Dakhla">Dakhla</option>
                                                        <option value="El Hajeb">El Hajeb</option>
                                                        <option value="El Jadida">El Jadida</option>
                                                        <option value="Errachidia">Errachidia</option>
                                                        <option value="Essaouira">Essaouira</option>
                                                        <option value="Fès">Fès</option>
                                                        <option value="Figuig">Figuig</option>
                                                        <option value="Guelmim">Guelmim</option>
                                                        <option value="Ifrane">Ifrane</option>
                                                        <option value="Kénitra">Kénitra</option>
                                                        <option value="Khémisset">Khémisset</option>
                                                        <option value="Khénifra">Khénifra</option>
                                                        <option value="Khouribga">Khouribga</option>
                                                        <option value="Laâyoune">Laâyoune</option>
                                                        <option value="Larache">Larache</option>
                                                        <option value="Marrakech">Marrakech</option>
                                                        <option value="Meknès">Meknès</option>
                                                        <option value="Mohammedia">Mohammedia</option>
                                                        <option value="Nador">Nador</option>
                                                        <option value="Ouarzazate">Ouarzazate</option>
                                                        <option value="Oujda">Oujda</option>
                                                        <option value="Rabat">Rabat</option>
                                                        <option value="Safi">Safi</option>
                                                        <option value="Salé">Salé</option>
                                                        <option value="Sefrou">Sefrou</option>
                                                        <option value="Settat">Settat</option>
                                                        <option value="Sidi Ifni">Sidi Ifni</option>
                                                        <option value="Tanger">Tanger</option>
                                                        <option value="Tan-Tan">Tan-Tan</option>
                                                        <option value="Taza">Taza</option>
                                                        <option value="Témara">Témara</option>
                                                        <option value="Tétouan">Tétouan</option>
                                                        <option value="Tinghir">Tinghir</option>
                                                        <option value="Tiznit">Tiznit</option>
                                                        <option value="Youssoufia">Youssoufia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('clients.update', $client->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="d-flex align-items-center mb-3">
                                                <h5 class="w-100">Contact</h5>
                                                <button class="btn btn-link p-0" type="submit">Enregistrer</button>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-phone"></span>
                                                    <h6 class="mb-0">Téléphone mobile</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="tel_mobile" name="tel_mobile" value="{{ $client->tel_mobile }}">
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-gift"></span>
                                                    <h6 class="mb-0">Téléphone fixe</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="tel_fixe" name="tel_fixe" value="{{ $client->tel_fixe }}">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="me-2 uil uil-phone"></span>
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" id="email" name="email" value="{{ $client->email }}">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-xxl-9">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-4 g-xl-1 g-xxl-3 justify-content-between">
                                        <div class="col-sm-auto">
                                            <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                                                <div class="d-flex bg-success-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px"><span class="text-success-dark" data-feather="check" style="width:24px; height:24px"></span></div>
                                                <div>
                                                    <p class="fs-9 fw-semibold mb-1">Étape à achevée</p>
                                                    <h5>{{ $client->contact }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                                                <div class="d-flex bg-warning-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px"><span class="text-warning-dark" data-feather="dollar-sign" style="width:24px; height:24px"></span></div>
                                                <div>
                                                    <p class="fs-9 fw-semibold mb-1">Étape à traiter</p>
                                                    <h5>
                                                        @if($client->contact === 'Contact')
                                                        {{ "Qualification" }}
                                                        @elseif($client->qualification === 'Qualification')
                                                        {{ "Mesure" }}
                                                        @elseif($client->mesure === 'Mesure')
                                                        {{ "Découverte" }}
                                                        @elseif($client->decouverte === 'Découverte')
                                                        {{ "Solution Plan" }}
                                                        @elseif($client->solution_plan === 'Solution Plan')
                                                        {{ "Argumentaire" }}
                                                        @elseif($client->argumentaire === 'Argumentaire')
                                                        {{ "Annonce de prix" }}
                                                        @elseif($client->annonce_prix === 'Annonce de prix')
                                                        {{ "Passage de main" }}
                                                        @elseif($client->passage_main === 'Passage de main')
                                                        {{ "Décision" }}
                                                        @elseif($client->decision === 'Décision')
                                                        {{ "Vente" }}
                                                        @elseif($client->vente === 'vente')
                                                        {{"sui"}}
                                                        @endif
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                                                <div class="d-flex bg-danger-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px"><span class="text-danger-dark" data-feather="x-circle" style="width:24px; height:24px"></span></div>
                                                <div>
                                                    <p class="fs-9 fw-semibold mb-1">État de la relance</p>
                                                    <h5>Annulée</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-underline justify-content-center fs-9 deal-details scrollbar flex-nowrap mb-3" id="myTab" role="tablist" style="overflow-y: hidden;">
                                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link active" id="etapes-tab" data-bs-toggle="tab" href="#tab-etapes" role="tab" aria-controls="tab-activity" aria-selected="false" tabindex="-1"> <span class="fa-solid fa-chart-line me-2 tab-icon-color"></span>Étapes et relances</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="tab-etapes" role="tabpanel" aria-labelledby="etapes-tab">
                                    <div class="card card-body mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Étape à valider</h5>
                                            <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#valider"><span class="fa-solid fa-plus me-2"></span>Valider l'étape</button>
                                        </div>
                                        <div>
                                            <div class="table-responsive scrollbar">
                                                <table class="table fs-9 m-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="align-middle text-start py-2 px-3" style="width:20%;">Crée par</th>
                                                            <th class="align-middle text-start py-2 px-3" style="width:20%;">Date de relance</th>
                                                            <th class="align-middle text-start py-2 px-3" style="width:40%;">Étape à traiter</th>
                                                            <th class="align-middle text-center py-2 px-3"style="width:10%;">Statut</th>
                                                            <th class="align-middle text-center py-2 px-3"style="width:10%;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="align-middle text-start fw-semibold p-2 px-3">
                                                                {{$client->whoaddit}}
                                                                <div>
                                                                    <p class="m-0 fw-semibold">{{$client->created_at}}</p>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-start fw-semibold p-2 px-3">
                                                                12/05/2024 12:30
                                                            </td>
                                                            <td class="align-middle text-start fw-semibold p-2 px-3">
                                                                Relance pour l'étape
                                                                <div>
                                                                    <p class="m-0 fw-semibold">
                                                                        @if($client->contact === 'Contact')
                                                                        {{ "Qualification" }}
                                                                        @elseif($client->qualification === 'Qualification')
                                                                        {{ "Mesure" }}
                                                                        @elseif($client->mesure === 'Mesure')
                                                                        {{ "Découverte" }}
                                                                        @elseif($client->decouverte === 'Découverte')
                                                                        {{ "Solution Plan" }}
                                                                        @elseif($client->solution_plan === 'Solution Plan')
                                                                        {{ "Argumentaire" }}
                                                                        @elseif($client->argumentaire === 'Argumentaire')
                                                                        {{ "Annonce de prix" }}
                                                                        @elseif($client->annonce_prix === 'Annonce de prix')
                                                                        {{ "Passage de main" }}
                                                                        @elseif($client->passage_main === 'Passage de main')
                                                                        {{ "Décision" }}
                                                                        @elseif($client->decision === 'Décision')
                                                                        {{ "Vente" }}
                                                                        @elseif($client->vente === 'vente')
                                                                        {{"sui"}}
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-center fw-semibold p-2 px-3">
                                                                <span class="badge badge-phoenix badge-phoenix-secondary">En cours</span>
                                                            </td>
                                                            <td class="align-middle text-center fw-semibold p-2 px-3">
                                                                <div class="btn-reveal-trigger position-static">
                                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                                        <a class="dropdown-item fw-semibold" href="#!">Modifier</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item fw-semibold text-danger">Supprimer</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body mb-10">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Étape à achevée</h5>
                                        </div>
                                        <div id="AcheveeTable" data-list='{"page":5,"pagination":true}'>
                                            <div>
                                                <div class="table-responsive scrollbar">
                                                    <table class="table fs-9 m-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="align-middle text-start py-2 px-3" style="width:20%;">Validée par</th>
                                                                <th class="align-middle text-start py-2 px-3" style="width:20%;">Étape</th>
                                                                <th class="align-middle text-start py-2 px-3" style="width:40%;">Prise de rendez-vous</th>
                                                                <th class="align-middle text-start py-2 px-3" style="width:40%;">Commentaire</th>
                                                                <th class="align-middle text-center py-2 px-3"style="width:10%;">Statut</th>
                                                                <th class="align-middle text-center py-2 px-3"style="width:10%;">Action</th>
                                                            </tr>
                                                        </thead>
                                                    </tbody>
                                                    @foreach($client->etapes as $etape)
                                                    <tr>
                                                        <td class="align-middle text-start fw-semibold p-2 px-3">{{ $etape->valide_par }} {{ $etape->created_at }}</td>
                                                        <td class="align-middle text-start fw-semibold p-2 px-3">{{ $etape->etape }}</td>
                                                        <td class="align-middle text-start fw-semibold p-2 px-3">{{ $etape->date }}</td>
                                                        <td class="align-middle text-start fw-semibold p-2 px-3">{{ $etape->remarque }}</td>
                                                        <td class="align-middle text-center fw-semibold p-2 px-3">
                                                            <span class="badge badge-phoenix badge-phoenix-success">Achevée</span>
                                                        </td>
                                                        <td class="align-middle text-center fw-semibold p-2 px-3">
                                                            <div class="btn-reveal-trigger position-static">
                                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                                    <a class="dropdown-item fw-semibold" href="#!">Modifier</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-semibold text-danger">Supprimer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                        
                                                    </table>
                                                </div>
                                                <div class="row align-items-center justify-content-between pt-2 fs-9">
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
                                    <div class="card card-body mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Report des relances</h5>
                                            <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#relance"><span class="fa-solid fa-plus me-2"></span>Ajouter une relance call center</button>
                                        </div>
                                        <div id="2" data-list='{"page":5,"pagination":true}'>
                                            <div class="table-responsive scrollbar">
                                                <table class="table fs-9 mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="align-middle text-start py-2 px-3" style="width:20%;">Call center</th>
                                                            <th class="align-middle text-start py-2 px-3" style="width:20%;">Date de relance</th>
                                                            <th class="align-middle text-start py-2 px-3" style="width:40%;">Commentaire</th>
                                                            <th class="align-middle text-center py-2 px-3"style="width:10%;">Statut</th>
                                                            <th class="align-middle text-center py-2 px-3"style="width:10%;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list" id="members-table-body">
                                                        @foreach($relances as $relance)
                                                        <tr>
                                                            <td class="align-middle text-start fw-semibold p-2 px-3">
                                                                {{ $relance->whoaddit }}
                                                                <div>
                                                                    <p class="m-0 fw-semibold">{{ $relance->created_at->format('d M Y') }} {{ $relance->created_at->format('H:i') }}</p>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-start fw-semibold p-2 px-3">
                                                                {{ $relance->reporter_la_relance }}
                                                            </td>
                                                            <td class="align-middle text-start fw-semibold p-2 px-3">
                                                                {{ $relance->remarque }}
                                                            </td>
                                                            <td class="align-middle text-center fw-semibold p-2 px-3">
                                                                @if ($relance->isannuler == "nest pas annuler")
                                                                <span class="badge badge-phoenix badge-phoenix-primary">relancée</span>
                                                                @else
                                                                <span class="badge badge-phoenix badge-phoenix-danger">annulée</span>
                                                                @endif
                                                            </td>
                                                            <td class="align-middle text-center fw-semibold p-2 px-3">
                                                                <div class="btn-reveal-trigger position-static">
                                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                                        <a class="dropdown-item fw-semibold" href="#!">Modifier</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item fw-semibold text-danger">Supprimer</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row align-items-center justify-content-between pt-2 pe-0 fs-9">
                                                <div class="col-auto d-flex">
                                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
                                                    <a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
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