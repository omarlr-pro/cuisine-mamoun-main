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
            <div class="content kanban-content">
                <div class="kanban-header">
                    <div class="row gx-0 justify-content-between justify-content-md-start">
                        <div class="col-auto">
                          <button class="btn btn-link text-decoration-none text-body-emphasis fs-8 ps-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="fs-7 me-2">Mes relances</h5>
                        </div>
                    </div>
                </div>
                <div class="kanban-container scrollbar" data-kanban-container="data-kanban-container">
                    <div class="kanban-column scrollbar">
                        <div class="kanban-column-header px-4 hover-actions-trigger">
                            <div class="d-flex align-items-center border-bottom border-3 py-3 border-warning">
                                <h5 class="mb-0 kanban-column-title">Mes rendez-vous brut</h5>
                                <span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
                            </div>
                        </div>
                        <div class="kanban-items-container" data-sortable="data-sortable">
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span>
                                            <span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span>
                                            <span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Develop a new feature for the phoenix mobile app</p>
                                        <div class="d-flex mt-2 align-items-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span>
                                            <span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span>
                                            <span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Develop a new feature for the phoenix mobile app</p>
                                        <div class="d-flex mt-2 align-items-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
                    </div>
                    <div class="kanban-column scrollbar">
                        <div class="kanban-column-header px-4 hover-actions-trigger">
                            <div class="d-flex align-items-center border-bottom border-3 py-3 border-300">
                                <h5 class="mb-0 kanban-column-title">To do<span class="kanban-title-badge">2</span></h5>
                                <div class="hover-actions-trigger">
                                    <button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                                    </div>
                                </div>
                                <span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
                            </div>
                        </div>
                        <div class="kanban-items-container" data-sortable="data-sortable">
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                                            <div class="bg-holder" style="background-image:url(../../assets/img/kanban/1.jpg);"></div>
                                            <!--/.bg-holder-->
                                        </div>
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Test and debug code for the e-commerce website checkout process</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Write a blog post on industry trends and best practices</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
                    </div>
                    <div class="kanban-column scrollbar">
                        <div class="kanban-column-header px-4 hover-actions-trigger">
                            <div class="d-flex align-items-center border-bottom border-3 py-3 border-primary">
                                <h5 class="mb-0 kanban-column-title">Doing<span class="kanban-title-badge">4</span></h5>
                                <div class="hover-actions-trigger">
                                    <button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                                    </div>
                                </div>
                                <span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
                            </div>
                        </div>
                        <div class="kanban-items-container" data-sortable="data-sortable">
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Create wireframes for a new phoenix landing page design</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <div class="avatar-name rounded-circle text-warning bg-warning-subtle"><span>R</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Set up and configure a new software tool for the marketing team</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa fa-check-square fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>5/34</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Draft and send a press release to announce a new partnership</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                                            <div class="bg-holder" style="background-image:url(../../assets/img/kanban/glass.jpg);"></div>
                                            <!--/.bg-holder-->
                                        </div>
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Conduct a security audit of the phoenix web applications</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
                    </div>
                    <div class="kanban-column scrollbar">
                        <div class="kanban-column-header px-4 hover-actions-trigger">
                            <div class="d-flex align-items-center border-bottom border-3 py-3 border-info">
                                <h5 class="mb-0 kanban-column-title">Review<span class="kanban-title-badge">4</span></h5>
                                <div class="hover-actions-trigger">
                                    <button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                                    </div>
                                </div>
                                <span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
                            </div>
                        </div>
                        <div class="kanban-items-container" data-sortable="data-sortable">
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Design and develop a new logo for the phoenix</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Create a fresh visual identity for Phoenix with a new logo design</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa fa-check-square fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>5/34</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Identify best software vendors for company-wide system through comprehensive research and evaluation</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                                            <div class="bg-holder" style="background-image:url(../../assets/img/kanban/wall.jpg);"></div>
                                            <!--/.bg-holder-->
                                        </div>
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Write and edit copy for a new email marketing campaign</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
                    </div>
                    <div class="kanban-column scrollbar">
                        <div class="kanban-column-header px-4 hover-actions-trigger">
                            <div class="d-flex align-items-center border-bottom border-3 py-3 border-success">
                                <h5 class="mb-0 kanban-column-title">Release<span class="kanban-title-badge">3</span></h5>
                                <div class="hover-actions-trigger">
                                    <button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                                        <hr class="my-2" />
                                        <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                                    </div>
                                </div>
                                <span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
                            </div>
                        </div>
                        <div class="kanban-items-container" data-sortable="data-sortable">
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Improve Phoenix website usability through user testing</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                                            <div class="bg-holder" style="background-image:url(../../assets/img/kanban/home.jpg);"></div>
                                            <!--/.bg-holder-->
                                        </div>
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Develop and deliver a training program for new employees</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                                <div class="card sortable-item hover-actions-trigger">
                                    <div class="card-body py-3 px-3">
                                        <div class="kanban-status mb-1 position-relative lh-1">
                                            <span class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;">
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                                                <hr class="my-2" />
                                                <a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                                            </div>
                                        </div>
                                        <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Organize and lead a brainstorming session to generate new product ideas</p>
                                        <div class="d-flex mt-2 align-items-center">
                                            <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                                            <div class="avatar-group ms-auto">
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                                                </div>
                                                <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                                                    <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
                    </div>
                    <div class="kanban-column scrollbar position-relative bg-transparent">
                        <div class="d-flex h-100 flex-center fw-bold bg-body-hover">
                            <a class="text-decoration-none stretched-link text-body-secondary" href="#!">
                                <div class="circle-btn bg-body-secondary mx-auto"><span class="fas fa-plus" data-fa-transform="shrink-2"></span></div>
                                <span>Add another list</span>
                            </a>
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
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="../../vendors/list.js/list.min.js"></script>
        <script src="../../vendors/feather-icons/feather.min.js"></script>
        <script src="../../vendors/dayjs/dayjs.min.js"></script>
        <script src="../../assets/js/phoenix.js"></script>
        <script src="../../assets/js/flatpickr.js"></script>
    </body>
</html>