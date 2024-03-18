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
		<link href="../../vendors/choices/choices.min.css" rel="stylesheet" />
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
								<div class="nav-item-wrapper">
									<a class="nav-link dropdown-indicator label-1" href="#nv-contact" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-contact">
										<div class="d-flex align-items-center">
											<div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
											<span class="nav-link-icon"><span data-feather="phone"></span></span><span class="nav-link-text">Client</span>
										</div>
									</a>
									<div class="parent-wrapper label-1">
										<ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-contact">
											<li class="collapsed-nav-item-title d-none">Client</li>
											<li class="nav-item">
												<a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
													<div class="d-flex align-items-center"><span class="nav-link-text">Enregistrer un client</span></div>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
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
								<div class="nav-item-wrapper">
									<a class="nav-link dropdown-indicator label-1" href="#nv-user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-user">
										<div class="d-flex align-items-center">
											<div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
											<span class="nav-link-icon"><span data-feather="phone"></span></span><span class="nav-link-text">Utilisateur</span>
										</div>
									</a>
									<div class="parent-wrapper label-1">
										<ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-user">
											<li class="collapsed-nav-item-title d-none">Client</li>
											<li class="nav-item">
												<a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
													<div class="d-flex align-items-center"><span class="nav-link-text">Enregistrer un utilisateur</span></div>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
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
											<h6 class="mt-3 text-body-emphasis">{{ Auth::user()->name }} </h6>
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
							<a>Client</a>
						</li>
						<li class="breadcrumb-item">Fiche du client</li>
					</ol>
				</nav>
				<div class="border-bottom border-translucent mx-n3 px-2 mx-lg-n6 px-lg-6">
					<div class="row">
						<div class="col-xl-12">
							<div class="d-sm-flex justify-content-between">
								<h2 class="mb-4">Fiche du client</h2>
								<div class="d-flex mb-3">
									<button class="btn btn-outline-secondary me-2">Archiver la fiche</button>
									<button class="btn btn-outline-primary me-2">Modifier la fiche</button>
									<button class="btn btn-outline-danger me-2">Supprimer le client</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pt-4 pb-4">
					<div class="row g-0 g-md-4 g-xl-6">
						<div class="col-md-5 col-lg-5 col-xl-3">
							<div class="sticky-leads-sidebar">
								<div class="lead-details-offcanvas bg-body scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
									<div class="card mb-3">
										<div class="card-body">
											<div class="d-flex align-items-center mb-3">
												<h3>{{ $client->gender }} {{ $client->last_name }} {{ $client->first_name }}</h3>
											</div>
											<div class="mb-3">
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-phone"> </span>
													<h5 class="mb-0">Type du client</h5>
												</div>
												{{ $client->client_type }}</a>
											</div>
											<div>
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-phone"> </span>
													<h5 class="mb-0">Date de naissance</h5>
												</div>
												{{ $client->dob }}</a>
											</div>
										</div>
									</div>
									<div class="card mb-3">
										<div class="card-body">
											<div class="d-flex align-items-center mb-3">
												<h3>Contact</h3>
											</div>
											<div class="mb-3">
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-phone"> </span>
													<h5 class="mb-0">Téléphone mobile</h5>
												</div>
												{{ $client->mobile_phone }}</a>
											</div>
											<div class="mb-3">
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-phone"> </span>
													<h5 class="mb-0">Téléphone fixe</h5>
												</div>
												{{ $client->phone}}</a>
											</div>
											<div>
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-envelope-alt"> </span>
													<h5 class="mb-0">Email</h5>
												</div>
												{{ $client->email}}</a>
											</div>
										</div>
									</div>
									<div class="card mb-3">
										<div class="card-body">
											<div class="d-flex align-items-center mb-3">
												<h3>Adresse</h3>
											</div>
											<div class="mb-2">
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-estate"></span>
													<h5 class="mb-0">Adresse</h5>
												</div>
												<p class="mb-0 text-body-secondary">{{ $client->address}}</p>
											</div>
											<div class="mb-2">
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-estate"></span>
													<h5 class="mb-0">Adresse complémentaire</h5>
												</div>
												<p class="mb-0 text-body-secondary">{{ $client->address_additional }}</p>
											</div>
											<div class="mb-2">
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-map-pin-alt"></span>
													<h5 class="mb-0 text-body-highlight">Code postal</h5>
												</div>
												<p class="mb-0 text-body-secondary">{{ $client->zipcode}}</p>
											</div>
											<div>
												<div class="d-flex align-items-center mb-1">
													<span class="me-2 uil uil-map"></span>
													<h5 class="mb-0 text-body-highlight">Ville</h5>
												</div>
												<p class="mb-0 text-body-secondary">{{ $client->city }}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-lg-7 col-xl-9">
							<div class="lead-details-container">
								<nav class="navbar pb-4 pt-0 px-0 sticky-top bg-body nav-underline-scrollspy" id="navbar-deals-detail">
									<ul class="nav nav-underline fs-9">
										<li class="nav-item"><a class="nav-link me-2" href="#scrollspyValider">Étape à valider</a></li>
										<li class="nav-item"><a class="nav-link me-2" href="#scrollspyRelance">Relance rdv call center</a></li>
										<li class="nav-item"><a class="nav-link me-2" href="#scrollspyAchevee">Étape achevée</a></li>
										<li class="nav-item"><a class="nav-link" href="#scrollspyPiece">Pièce jointe</a></li>
									</ul>
								</nav>
								<div class="scrollspy-example rounded-2" data-bs-spy="scroll" data-bs-offset="0" data-bs-target="#navbar-deals-detail" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
									<div class="mb-5">
										<div class="d-flex justify-content-between align-items-center mb-3" id="scrollspyValider">
											<h3 class="mb-0">Étape à valider</h3>
										</div>
										<div>
											<div class="table-responsive scrollbar mx-n1 px-1">
												<table class="table fs-9 border-top border-bottom">
													<thead>
														<tr>
															<th class="align-middle text-center border-start border-end" style="width:15%;">Crée par</th>
															<th class="align-middle text-center border-end" style="width:15%;">Date de relance</th>
															<th class="align-middle text-center border-end" style="width:70%;">Relance pour l'étape</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="align-middle text-center border-start border-end fw-bold py-2" style="padding-left: 1rem; padding-right: 1rem">
																Mamoun Ezzidi
																<div>
																	<p class="mb-0 text-center fw-semibold text-opacity-75 text-body-tertiary fs-9">le 12/05/2024 à 12:30</p>
																</div>
															</td>
															<td class="align-middle text-center border-end fw-semibold text-opacity-75 text-body-tertiary py-2" style="padding-left: 1rem; padding-right: 1rem">le 12/05/2024 à 12:30
															</td>
															<td class="align-middle text-center border-end fw-semibold py-2">Découverte</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div id="ValiderTable" data-list='{"page":5,"pagination":true}'>
											<div>
												<div class="table-responsive scrollbar mx-n1 px-1">
													<table class="table fs-9 mb-1 border-top border-bottom">
														<thead>
															<tr>
																<th class="align-middle text-center border-start border-end" style="width:15%;">Call center</th>
																<th class="align-middle text-center border-end" style="width:85%;">Remarque</th>
															</tr>
														</thead>
														<tbody class="list" id="members-table-body">
															<tr>
																<td class="align-middle text-center border-start border-end fw-bold py-2" style="padding-left: 1rem; padding-right: 1rem">
																	Mamoun Ezzidi
																	<div>
																		<p class="mb-0 text-center fw-semibold text-opacity-75 text-body-tertiary fs-9">le 12/05/2024 à 12:30</p>
																	</div>
																</td>
																<td class="align-middle text-left border-end fw-semibold py-2" style="padding-left: 1rem; padding-right: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																</td>
															</tr>
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
									<div class="mb-5">
										<div class="d-flex justify-content-between align-items-center mb-3" id="scrollspyRelance">
											<h3 class="mb-0">Relance rendez-vous call center</h3>
											<button class="btn btn-primary btn-sm"><span class="fa-solid fa-plus me-2"></span>Ajouter la relance</button>
										</div>
										<div>
											<div>
												<div class="table-responsive scrollbar mx-n1 px-1">
													<table class="table fs-9 mb-1">
														<tbody class="list" id="members-table-body">
															<tr>
																<td class="align-middle text-left fw-bold py-2" style="width:15%; padding-left: 1rem; padding-right: 1rem">Date de l'appel</td>
																<td class="align-middle text-left fw-bold py-2" style="width:70%; padding-left: 1rem; padding-right: 1rem">
																	<div class="row">
																		<div class="col-sm-6 col-md-6" style="padding-right: 0.4rem;">
																			<input class="form-control datetimepicker" id="datepicker" type="text" placeholder="jj/mm/aa" data-options='{"disableMobile":true,"dateFormat":"d/m/Y","allowInput":true}' />
																		</div>
																		<div class="col-sm-6 col-md-6" style="padding-left: 0.4rem;">
																			<input class="form-control datetimepicker" id="timepicker1" type="text" placeholder="heure : minute" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"allowInput":true}' />
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="align-middle text-left fw-bold py-2" style="width:15%; padding-left: 1rem; padding-right: 1rem">Crée par</td>
																<td class="align-middle text-left fw-semibold text-opacity-75 text-body-tertiary py-2" style="width:70%; padding-left: 1rem; padding-right: 1rem">Mamoun Ezzidi</td>
															</tr>
															<tr>
																<td class="align-middle text-left fw-bold py-2" style="width:15%; padding-left: 1rem; padding-right: 1rem">Prise de rendez-vous</td>
																<td class="align-middle text-left fw-bold py-2" style="width:70%; padding-left: 1rem; padding-right: 1rem">
																	<div class="row">
																		<div class="col-sm-6 col-md-6" style="padding-right: 0.4rem;">
																			<input class="form-control datetimepicker" id="datepicker" type="text" placeholder="jj/mm/aa" data-options='{"disableMobile":true,"dateFormat":"d/m/Y","allowInput":true}' />
																		</div>
																		<div class="col-sm-6 col-md-6" style="padding-left: 0.4rem;">
																			<input class="form-control datetimepicker" id="timepicker1" type="text" placeholder="heure : minute" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"allowInput":true}' />
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="align-middle text-left fw-bold py-2" style="width:15%; padding-left: 1rem; padding-right: 1rem">Reporter la relance</td>
																<td class="align-middle text-left fw-bold py-2" style="width:70%; padding-left: 1rem; padding-right: 1rem">
																	<div class="row">
																		<div class="col-sm-6 col-md-6" style="padding-right: 0.4rem;">
																			<input class="form-control datetimepicker" id="datepicker" type="text" placeholder="jj/mm/aa" data-options='{"disableMobile":true,"dateFormat":"d/m/Y","allowInput":true}' />
																		</div>
																		<div class="col-sm-6 col-md-6" style="padding-left: 0.4rem;">
																			<input class="form-control datetimepicker" id="timepicker1" type="text" placeholder="heure : minute" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"allowInput":true}' />
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="align-middle text-left fw-bold py-2" style="width:15%; padding-left: 1rem; padding-right: 1rem">Annuler la relance</td>
																<td class="align-middle text-left fw-semibold text-opacity-75 text-body-tertiary py-2" style="width:70%; padding-left: 1rem; padding-right: 1rem">  <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="" /></td>
															</tr>
															<tr>
																<td class="align-middle text-left fw-bold py-2" style="width:15%; padding-left: 1rem; padding-right: 1rem">Remarque</td>
																<td class="align-middle text-left fw-semibold text-opacity-75 text-body-tertiary py-2" style="width:70%; padding-left: 1rem; padding-right: 1rem"><textarea class="form-control" id="floatingTextarea2" style="height: 10px"></textarea></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="mb-5">
										<div class="d-flex justify-content-between align-items-center mb-3" id="scrollspyAchevee">
											<h3 class="mb-0">Étape achevée</h3>
										</div>
										<div id="AcheveeTable" data-list='{"page":5,"pagination":true}'>
											<div>
												<div class="table-responsive scrollbar mx-n1 px-1">
													<table class="table fs-9 mb-1 border-top border-bottom">
														<thead>
															<tr>
																<th class="align-middle text-center border-start border-end" style="width:15%;">Validée par</th>
																<th class="align-middle text-center border-start border-end" style="width:15%;">Étape</th>
																<th class="align-middle text-center border-end" style="width:60%;">Remarque</th>
															</tr>
														</thead>
														<tbody class="list" id="members-table-body">
															<tr>
																<td class="align-middle text-center border-start border-end fw-bold py-2" style="padding-left: 1rem; padding-right: 1rem">
																	{{ $client->whoaddit }}
																	<div>
																		<p class="mb-0 text-left fw-semibold text-opacity-75 text-body-tertiary fs-9">{{ $client->created_at->format('d/m/Y') }} {{ $client->created_at->format('H:i') }}</p>
																	</div>
																</td>
																<td class="align-middle text-center border-start border-end fw-bold py-2" style="padding-left: 1rem; padding-right: 1rem">
                                {{ $client->contact }}
                                {{ $client->qualification }}
                                {{ $client->measure }}
                                {{ $client->discovery }}
                                {{ $client->solution_plan }}
                                {{ $client->argumentation }} 
                                {{ $client->price_announcement }}
                                {{ $client->handover }}
                                {{ $client->decision }}
                                {{ $client->vente }}
																<td class="align-middle text-left border-start border-end fw-bold py-2" style="padding-left: 1rem; padding-right: 1rem">
																	<div>
																		<p class="mb-0 text-left fw-semibold text-opacity-75 text-body-tertiary fs-9">{{ $client->description }}</p>
																	</div>
																</td>
															</tr>
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
									<div>
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
