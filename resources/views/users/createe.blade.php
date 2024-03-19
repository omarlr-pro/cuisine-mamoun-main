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
    <link href="../../vendors/dropzone/dropzone.min.css" rel="stylesheet" />
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
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- parent pages-->
                <div class="nav-item-wrapper">
                  <a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-home">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon">
                        <span class="fas fa-caret-right"></span>
                      </div>
                      <span class="nav-link-icon">
                        <span data-feather="pie-chart"></span>
                      </span>
                      <span class="nav-link-text">Acceuil</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                      <li class="collapsed-nav-item-title d-none">Acceuil</li>
                      <li class="nav-item">
                        <a class="nav-link" href="../../index-2.html" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center">
                            <span class="nav-link-text">Tableau de bord</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <p class="navbar-vertical-label">Client</p>
                <hr class="navbar-vertical-line" />
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-contact" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-contact">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="phone"></span></span><span class="nav-link-text">Client</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-contact">
                      <li class="collapsed-nav-item-title d-none">Client</li>
                      <li class="nav-item"><a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Enregistrer un client</span></div>
                        </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Voir tous les client</span></div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <p class="navbar-vertical-label">Utilisateur</p>
                <hr class="navbar-vertical-line" />
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-user">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="phone"></span></span><span class="nav-link-text">Utilisateur</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-user">
                      <li class="collapsed-nav-item-title d-none">Client</li>
                      <li class="nav-item"><a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Enregistrer un utilisateur</span></div>
                        </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Voir tous les utilisateur</span></div>
                        </a>
                      </li>
                    </ul>
                  </div>
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
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
              <input class="form-control search-input fuzzy-search form-control-sm" type="search" placeholder="Rechercher un client" aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
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
                  <img class="rounded-soft " src="../../assets/img/team/40x40/1.jpg" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-3 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-soft " src="../../assets/img/team/72x72/1.jpg" alt="" />
                      </div>
                      <h6 class="mt-3 text-body-emphasis">Admin Admin</h6>
                    </div>
                  </div>
                  <div class="overflow-auto scrollbar p-0 border-top border-translucent" style="height: auto;">
                    <ul class="nav d-flex flex-column mb-2 mt-2">
                      <li class="nav-item">
                        <a class="nav-link px-3" href="#!">
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
                      <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                        <span class="me-2" data-feather="log-out"></span>Se déconnecter</a>
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
            <li class="breadcrumb-item">Enregistrer un nouvel utilisateur</li>
          </ol>
        </nav>
        <div class="border-bottom border-translucent mx-n3 px-2 mx-lg-n6 px-lg-6">
          <div class="row">
            <div class="col-xl-12">
              <div class="d-sm-flex justify-content-between">
                <h2 class="mb-4">Enregistrer un nouvel utilisateur</h2>
                <div class="d-flex mb-3"><button class="btn btn-primary">Voir tous les utilisateurs</button></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-4 pb-4">
          <div class="col-xl-12">
            <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
              <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
                <ul class="nav justify-content-between nav-wizard" role="tablist">
                  <li class="nav-item" role="presentation"><a class="nav-link active fw-semibold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1" aria-selected="true" role="tab">
                      <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-lock" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg><!-- <span class="fas fa-lock"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs-9">Connexion</span></div>
                    </a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2" aria-selected="false" tabindex="-1" role="tab">
                      <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path></svg><!-- <span class="fas fa-user"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs-9">Contact</span></div>
                    </a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="4" aria-selected="false" tabindex="-1" role="tab">
                      <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path></svg><!-- <span class="fas fa-check"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs-9">Términé</span></div>
                    </a></li>
                </ul>
              </div>
              <div class="card-body pt-4 pb-0">
                <div class="tab-content">
                  <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                    <form id="wizardValidationForm1" novalidate="novalidate" data-wizard-form="1">
                      <div class="row g-4 mb-4 dz-clickable" data-dropzone="data-dropzone" data-options="{&quot;maxFiles&quot;:1,&quot;data&quot;:[{&quot;name&quot;:&quot;avatar.webp&quot;,&quot;size&quot;:&quot;54kb&quot;,&quot;url&quot;:&quot;../../assets/img/team&quot;}]}">
                        <div class="col-md-auto">
                          <div class="dz-preview dz-preview-single">
                            <div class="dz-preview-cover d-flex align-items-center justify-content-center mb-2 mb-md-0 dz-image-preview">
                            <div class="avatar avatar-4xl"><img class="rounded-circle avatar-placeholder" src="../../assets/img/team/avatar.webp" alt="avatar.webp" data-dz-thumbnail="data-dz-thumbnail">
                            </div>                                    
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>                                  
                          </div>
                        </div>
                        </div>
                        <div class="col-md">
                          <div class="dz-message dropzone-area px-2 py-3" data-dz-message="data-dz-message">
                            <div class="text-center text-body-emphasis">
                              <h5 class="mb-2"><svg class="svg-inline--fa fa-upload me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M105.4 182.6c12.5 12.49 32.76 12.5 45.25 .001L224 109.3V352c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V109.3l73.38 73.38c12.49 12.49 32.75 12.49 45.25-.001c12.49-12.49 12.49-32.75 0-45.25l-128-128C272.4 3.125 264.2 0 256 0S239.6 3.125 233.4 9.375L105.4 137.4C92.88 149.9 92.88 170.1 105.4 182.6zM480 352h-160c0 35.35-28.65 64-64 64s-64-28.65-64-64H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456z"></path></svg>Télécharger l'image du profil</h5>
                              <p class="mb-0 fs-9 text-body-tertiary text-opacity-85 lh-sm">Télécharger une image jpg de 300x300 <br>avec une taille maximale de 400KB</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h5 class="mb-3">Informations de connexion</h5>
                      <div class="row g-3">
                        <div class="col-sm-6 col-md-6">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="Last name" required="required" />
                            <label for="floatingInputLastname">Idenitifiant</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-floating">
                            <select class="form-select">
                              <option value="1">Admin</option>
                              <option value="2">Commercial</option>
                              <option value="3">Call center</option>
                            </select>
                            <label for="floatingSelectOwner">Statut</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="Last name" required="required" />
                            <label for="floatingInputLastname">Mot de passe</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="Last name" required="required" />
                            <label for="floatingInputLastname">Confirmer le mot de passe</label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                    <form id="wizardValidationForm1" novalidate="novalidate" data-wizard-form="1">
                      <h5 class="mb-3">Informations de l'utilisateur</h5>

                      <div class="row g-3 mb-3">
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
                            <input class="form-control" type="text" placeholder="Last name" required="required" />
                            <label for="floatingInputLastname">Nom</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="Last name" required="required" />
                            <label for="floatingInputLastname">Prénom</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="Last name" required="required" />
                            <label for="floatingInputLastname">CIN</label>
                          </div>
                        </div>
                      </div>
                      <h5 class="mb-3">Date de naissance</h5>
                      <div class="row g-3 mb-3">
                        <div class="col-sm-6 col-md-12">
                          <div class="form-floating">
                            <input class="form-control" id="basic-form-dob" type="date" style="padding-top: 9.5px;" />
                          </div>
                        </div>
                      </div>
                      <h5 class="mb-3">Contact</h5>
                      <div class="row g-3 mb-3">
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="Adresse" />
                            <label for="floatingInputStreet">Téléphone mobile</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="Adresse" />
                            <label for="floatingInputStreet">Téléphone fixe</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" type="text" placeholder="zip code" />
                            <label for="floatingInputZipcode">Email</label>
                          </div>
                        </div>
                      </div>
                      <h5 class="mb-3">Adresse</h5>
                      <div class="row g-3">
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
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab3">
                    <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                      <div class="col-12 col-sm-auto">
                        <div class="text-center text-sm-start"><img class="d-dark-none" src="../../assets/img/spot-illustrations/38.webp" alt="" width="220"><img class="d-light-none" src="../../assets/img/spot-illustrations/dark_38.webp" alt="" width="220"></div>
                      </div>
                      <div class="col-12 col-sm-auto">
                        <div class="text-center text-sm-start">
                          <h5 class="mb-3">Le compte est prêt !</h5>
                          <p class="text-body-emphasis fs-9">Vous pouvez désormais accéder <br>au compte à tout moment</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
                <div class="d-flex pager wizard list-inline mb-0"><button class="d-none btn btn-link ps-0" type="button" data-wizard-prev-btn="data-wizard-prev-btn"><svg class="svg-inline--fa fa-chevron-left me-1" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span> Font Awesome fontawesome.com -->Retour</button>
                  <div class="flex-1 text-end"><button class="btn btn-primary px-6 px-sm-6" type="submit" data-wizard-next-btn="data-wizard-next-btn">Suivant<svg class="svg-inline--fa fa-chevron-right ms-1" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span> Font Awesome fontawesome.com --></button></div>
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
    <script src="../../vendors/dropzone/dropzone.min.js"></script>
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