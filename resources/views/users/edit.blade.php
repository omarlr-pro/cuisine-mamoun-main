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
            <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a>Utilisateur</a>
            </li>
            <li class="breadcrumb-item">Modifier les informations de l'utilisateur</li>
          </ol>
        </nav>
        <div class="border-bottom border-translucent mx-n3 px-2 mx-lg-n6 px-lg-6">
          <div class="row">
            <div class="col-xl-12">
              <div class="d-sm-flex justify-content-between">
                <h2 class="mb-4">Enregistrer un nouveau client</h2>
                <div class="d-flex mb-3"><a href="#"><button onclick="refreshPage()" class="btn btn-phoenix-primary me-2 px-6">Annuler</button></a><button class="btn btn-primary">Enregistrer le client</button></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-4 pb-4">
          <div class="row g-6">
            <div class="col-12 col-xl-4">
              <div class="card mb-5">
                <div class="card-header hover-actions-trigger position-relative mb-6" style="min-height: 130px; ">
                  <div class="bg-holder rounded-top" style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url(../../assets/img/generic/59.png)"><input class="d-none" id="upload-settings-cover-image" type="file" /><label class="cover-image-file-input" for="upload-settings-cover-image"></label>
                    <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white dark__text-gray-1100"><span class="fa-solid fa-camera me-2"></span></div>
                  </div><input class="d-none" id="upload-settings-porfile-picture" type="file" /><label class="avatar avatar-4xl status-online feed-avatar-profile cursor-pointer" for="upload-settings-porfile-picture"><img class="rounded-circle img-thumbnail shadow-sm border-0" src="../../assets/img/team/20.webp" width="200" alt="" /></label>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex flex-wrap mb-2 align-items-center">
                        <h3 class="me-2">M. Admin Admin</h3><span class="fw-normal fs-8">u/hansolo</span>
                      </div>
                      <div class="d-flex d-xl-block d-xxl-flex align-items-center">
                        <div class="d-flex mb-xl-2 mb-xxl-0"><span class="fa-solid fa-user-group fs-10 me-2 me-lg-1 me-xl-2"></span>
                          <h6 class="d-inline-block mb-0">1297<span class="fw-semibold ms-1 me-4">Followers</span></h6>
                        </div>
                        <div class="d-flex"><span class="fa-solid fa-user-check fs-10 me-2 me-lg-1 me-xl-2"></span>
                          <h6 class="d-block d-xl-inline-block mb-0">3971<span class="fw-semibold ms-1">Following</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="border-bottom border-translucent border-dashed pb-3 mb-4">
                <h5 class="text-body mb-3">Élément</h5>
                <div class="form-check"><input class="form-check-input" id="onlyMe" type="radio" checked="checked" name="profiileVisibility" /><label class="form-check-label fs-8" for="onlyMe">Élément</label></div>
                <div class="form-check"><input class="form-check-input" id="myFollowers" type="radio" name="profiileVisibility" /><label class="form-check-label fs-8" for="myFollowers">Élément</label></div>
                <div class="form-check"><input class="form-check-input" id="everyone" type="radio" name="profiileVisibility" /><label class="form-check-label fs-8" for="everyone">Élément</label></div>
              </div>
              <div class="border-bottom border-translucent border-dashed pb-3 mb-4">
                <h5 class="text-body mb-3">Élément</h5>
                <div class="form-check"><input class="form-check-input" id="tagGroupMembers" type="radio" checked="checked" name="tagPermission" /><label class="form-check-label fs-8" for="tagGroupMembers">Élément</label></div>
                <div class="form-check"><input class="form-check-input" id="tagEveryone" type="radio" name="tagPermission" /><label class="form-check-label fs-8" for="tagEveryone">Élément</label></div>
              </div>
              <div class="border-bottom border-translucent border-dashed pb-3 mb-4">
                <div class="form-check"><input class="form-check-input" id="showEmail" type="checkbox" name="showEmail" /><label class="form-check-label fs-8" for="showEmail">Élément</label></div>
                <div class="form-check"><input class="form-check-input" id="showExperiences" type="checkbox" name="showExperiences" /><label class="form-check-label fs-8" for="showExperiences">Élément</label></div>
                <div class="form-check"><input class="form-check-input" id="showFollowers" type="checkbox" checked="checked" name="showFollowers" /><label class="form-check-label fs-8" for="showFollowers">Élément</label></div>
              </div>
              <div class="mb-4">
                <div class="form-check form-switch"><input class="form-check-input" id="showPhone" type="checkbox" checked="checked" name="showPhone" /><label class="form-check-label fs-8" for="showPhone">Élément</label></div>
                <div class="form-check form-switch"><input class="form-check-input" id="permitFollow" type="checkbox" checked="checked" name="permitFollow" /><label class="form-check-label fs-8" for="permitFollow">Élément</label></div>
              </div>
            </div>
            <div class="col-12 col-xl-8">
              <div class="border-bottom mb-4">
                <div class="mb-4">
                  <div class="row g-3">
                    <h5>Informations de l'utilisateur</h5>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-floating">
                        <select class="form-select">
                          <option value="1">Homme</option>
                          <option value="2">Femme</option>
                        </select>
                        <label for="floatingSelectOwner">Civilité</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="Last name" />
                        <label for="floatingInputLastname">Nom</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="First name" />
                        <label for="floatingInputFirstname">Prénom</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="First name" />
                        <label for="floatingInputFirstname">CIN</label>
                      </div>
                    </div>
                    <h5 class="pt-2">Date de naissance</h5>
                    <div class="col-sm-6 col-md-12">
                      <div class="form-floating">
                        <input class="form-control" id="basic-form-dob" type="date" style="padding-top: 9.5px;" />
                      </div>
                    </div>
                    <h5 class="pt-2">Adresse</h5>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="Adresse" />
                        <label for="floatingInputStreet">Adresse</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="Adresse" />
                        <label for="floatingInputStreet">Adresse complémentaire</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="zip code" />
                        <label for="floatingInputZipcode">Code postal</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                      <div class="form-floating">
                        <select class="form-select">
                          <option value="1">Agadir</option>
                          <option value="2">Casablanca</option>
                        </select>
                        <label for="floatingSelectCity">Ville</label>
                      </div>
                    </div>
                    <h5 class="pt-2">Contact</h5>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-floating">
                        <input class="form-control" type="tel" placeholder="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                        <label for="floatingInputPhone">Téléphone mobile</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-floating">
                        <input class="form-control" type="tel" placeholder="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                        <label for="floatingInputPhone">Téléphone fixe</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="email" />
                        <label for="floatingInputEmail">Email</label>
                      </div>
                    </div>
                    <h5 class="pt-2">Information de connexion</h5>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="email" />
                        <label for="floatingInputEmail">Identifiant</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-floating">
                        <select class="form-select">
                          <option value="1">Admin</option>
                          <option value="2">Commercial</option>
                        </select>
                        <label for="floatingSelectCity">Statut</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="Last name" />
                        <label for="floatingInputLastname">Nouveau mot de passe</label>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-floating">
                        <input class="form-control" type="text" placeholder="First name" />
                        <label for="floatingInputFirstname">Confirmer le nouveau mot de passe</label>
                      </div>
                    </div>
                    <h5 class="pt-2">Social</h5>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="facebook" type="text" placeholder="Facebook" /><label class="text-body-tertiary form-icon-label" for="facebook">Facebook</label></div><span class="fa-brands fa-facebook text-body fs-9 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="linkedin" type="text" placeholder="Linkedin" /><label class="text-body-tertiary form-icon-label" for="linkedin">Linkedin</label></div><span class="fa-brands fa-linkedin text-body fs-9 form-icon"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-end mb-4">
                  <div><a><button onclick="refreshPage()" class="btn btn-phoenix-secondary me-2">Annuler</button></a><button class="btn btn-phoenix-primary">Sauvegarder les changements</button></div>
                </div>
              </div>
              <div class="row gy-5">
                <div class="col-12 col-md-6">
                  <h4 class="text-body-emphasis mb-2">Archiver le compte</h4>
                  <p class="text-body-tertiary">Le compte et toutes ses informations seront archivé.</p><button class="btn btn-subtle-warning">Archiver le compte</button>
                </div>
                <div class="col-12 col-md-6">
                  <h4 class="text-body-emphasis mb-2">Supprimer le compte</h4>
                  <p class="text-body-tertiary">Le compte et toutes ses informations seront supprimés.</p><button class="btn btn-subtle-danger">Supprimer le compte</button>
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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../assets/js/flatpickr.js"></script>
  </body>
</html>