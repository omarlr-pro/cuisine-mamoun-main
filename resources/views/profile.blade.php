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
                                <p class="navbar-vertical-label">Client</p>
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
                                                <a class="nav-link px-3" href="#">
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
            <div class="content">
                <div class="pb-5">
                    <div class="card mb-5">
                        <div class="card-header hover-actions-trigger d-flex justify-content-center align-items-end position-relative mb-7 mb-xxl-0" style="height: 125px; ">
                            <div class="bg-holder rounded-top" style="background-image:url(../../assets/img/generic/cover-photo.png);"></div>
                            <input class="d-none" id="upload-cover-image" type="file" /><label class="cover-image-file-input" for="upload-cover-image"></label>
                            <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white dark__text-gray-1100"><span class="fa-solid fa-camera me-2 overlay-icon"></span></div>
                            <input class="d-none" id="upload-porfile-picture" type="file" />
                            <div class="hoverbox feed-profile" style="width: 150px; height: 150px">
                                <div class="hoverbox-content rounded-circle d-flex flex-center z-1" style="--phoenix-bg-opacity: .56;"><span class="fa-solid fa-camera fs-1 text-body-quaternary" data-bs-theme="light"></span></div>
                                <div class="position-relative rounded-soft cursor-pointer d-flex flex-center mb-xxl-7">
                                    <div class="avatar avatar-5xl"><img class="rounded-soft rounded-soft img-thumbnail shadow-sm border-0" src="../../assets/img/team/9.webp" alt="" /></div>
                                    <label class="w-100 h-100 position-absolute z-1" for="upload-porfile-picture"></label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-xl-between">
                                <div class="col-auto">
                                    <div class="d-flex flex-wrap mb-3 align-items-center">
                                        <h3>{{ Auth::user()->civilite }} {{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h3>
                                    </div>
                                    <p class="fw-semibold text-body-secondary m-0">“Whenever you find yourself on the side of the majority, it is time to pause and reflect.”</p>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <div class="row g-2">
                                        <div class="col-auto order-xxl-2"><button class="btn btn-primary lh-1"><span class="fa-solid fa-user-plus me-2"></span>Follow Request</button></div>
                                        <div class="col-auto order-xxl-1"><button class="btn btn-phoenix-primary lh-1"><span class="fa-solid fa-message me-2"></span>Send Message</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <hr class="bg-body-secondary mt-5 mb-5" />
                        <div class="divider-content-center"></div>
                    </div>
                    <div class="row g-4 g-xl-6">
                        <div class="col-xl-3 col-xxl-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <h3 class="w-100">Contact</h3>

                                        <button class="btn btn-link px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Modifier</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-body-highlight" id="exampleModalLabel">Modifier les informations de contact</h5>
                                                        <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-9"></span></button>
                                                    </div>
                                                    <form>
                                                        <div class="modal-body">
                                                            <div class="table-responsive scrollbar mx-n1 px-1">
                                                                <table class="table fs-9 mb-1">
                                                                    <tbody class="list" id="members-table-body">
                                                                        <tr>
                                                                            <td class="align-middle text-body-highlight text-left fw-bold py-2" style="width:25%; padding-left: 1rem; padding-right: 1rem">
                                                                                
                                                                                <div class="d-flex align-items-center mb-1">
                                                                                    <span class="me-2 uil uil-phone"></span>
                                                                                    <h5 class="mb-0">Téléphone mobile</h5>
                                                                                </div>

                                                                            </td>
                                                                            <td class="align-middle text-body-highlight text-left fw-bold py-2" style="width:25%; padding-left: 1rem; padding-right: 1rem">
                                                                                
                                                                                <div class="d-flex align-items-center mb-1">
                                                                                    <h5 class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->tel_mobile }}</h5>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-phoenix-primary me-2 px-6" type="button" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                                                            <button type="button" class="btn btn-primary">Enregistrer le relance</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-phone"></span>
                                            <h5 class="mb-0">Téléphone mobile</h5>
                                        </div>
                                        <p class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->tel_mobile }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-phone"></span>
                                            <h5 class="mb-0">Téléphone fixe</h5>
                                        </div>
                                        <p class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->tel_fixe }}</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-envelope-alt"></span>
                                            <h5 class="mb-0">Email</h5>
                                        </div>
                                        <p class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <h3 class="w-100">Adresse</h3>
                                        <button class="btn btn-link px-3" type="button">Modifier</button>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-phone"></span>
                                            <h5 class="mb-0">Adresse</h5>
                                        </div>
                                        <p class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->adresse }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-phone"></span>
                                            <h5 class="mb-0">Adresse Complémentaire</h5>
                                        </div>
                                        <p class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->adresse_complementaire }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-envelope-alt"></span>
                                            <h5 class="mb-0">Code postal</h5>
                                        </div>
                                        <p class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->code_postal }}</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-envelope-alt"></span>
                                            <h5 class="mb-0">Ville</h5>
                                        </div>
                                        <p class="mb-0 fw-semibold text-body-secondary">{{ Auth::user()->ville }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-xxl-9">
                            <div class="card mb-3">
                                <div class="card-body p-3 p-sm-4">
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="../../apps/social/profile.html">
                                                <div class="avatar avatar-xl  me-3">
                                                    <img class="rounded-soft " src="../../assets/img//team/9.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="flex-1">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a class="fw-bold text-body-emphasis">{{ Auth::user()->civilite }} {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</a>
                                                    <button type="button" class="btn btn-phoenix-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><span class="fa-solid fa-plus me-2"></span>Ajouter le statut</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Laissez un commentaire ici" style="height: 50px" name="description"></textarea>
                                                <label for="floatingProjectOverview">Ajouter un statut sur votre porfil</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body p-3 p-sm-4">
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="../../apps/social/profile.html">
                                                <div class="avatar avatar-xl  me-3">
                                                    <img class="rounded-soft " src="../../assets/img//team/9.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="flex-1">
                                                <a class="fw-bold mb-2 text-body-emphasis">{{ Auth::user()->civilite }} {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</a>
                                                <p class="fs-9 mb-0 text-body-tertiary text-opacity-85 fw-semibold">le 18/03/2024 à 23:45</p>
                                            </div>
                                            <div class="btn-reveal-trigger">
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item" href="#!">Modifier</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-body-highlight m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body p-3 p-sm-4">
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="../../apps/social/profile.html">
                                                <div class="avatar avatar-xl  me-3">
                                                    <img class="rounded-soft " src="../../assets/img//team/9.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="flex-1">
                                                <a class="fw-bold mb-2 text-body-emphasis">{{ Auth::user()->civilite }} {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</a>
                                                <p class="fs-9 mb-0 text-body-tertiary text-opacity-85 fw-semibold">le 18/03/2024 à 23:45</p>
                                            </div>
                                            <div class="btn-reveal-trigger">
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item" href="#!">Modifier</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-body-highlight m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-bottom d-xl-none">
                    <div class="nav"><a class="nav-link" aria-current="page" href="../../apps/social/feed.html"><span class="fa-solid fa-home nav-icon"></span><span class="nav-label">Home</span></a><a class="nav-link active" href="../../apps/social/profile.html"><span class="fa-solid fa-user nav-icon"></span><span class="nav-label">Profile</span></a><a class="nav-link" href="#!"><span class="fa-solid fa-image nav-icon"></span><span class="nav-label">Photos</span></a><a class="nav-link" href="../../apps/chat.html"><span class="fa-solid fa-message nav-icon"></span><span class="nav-label">Messages</span></a><a class="nav-link" href="../../apps/events/event-detail.html"><span class="fa-solid fa-calendar-days nav-icon"></span><span class="nav-label">Events</span></a></div>
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
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="../../vendors/list.js/list.min.js"></script>
        <script src="../../vendors/feather-icons/feather.min.js"></script>
        <script src="../../vendors/dayjs/dayjs.min.js"></script>
        <script src="../../assets/js/phoenix.js"></script>
        <script src="../../assets/js/flatpickr.js"></script>
    </body>
</html>