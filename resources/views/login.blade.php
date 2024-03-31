<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tableau de bord</title>
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
		<link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
		<meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
		<meta name="theme-color" content="#ffffff">
		<script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
		<script src="{{ asset('assets/js/config.js') }}"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
		<link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
		<link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
		<link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
		<link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
		<link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
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
		<form method="POST" action="{{ route('login') }}">
			@csrf
			<main class="main" id="top">
				<div class="row vh-100 g-0">
					<div class="col-lg-6 position-relative d-none d-lg-block">
						<div class="bg-holder" style="background-image:url(../../../assets/img/bg/30.png);"></div>
					</div>
					<div class="col-lg-6">
						<div class="row flex-center h-100 g-0 px-4 px-sm-0">
							<div class="col col-sm-6 col-lg-7 col-xl-8 mb-4">
								<a class="d-flex flex-center text-decoration-none mb-5">
									<div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
								</a>
								<div class="text-center">
									<h3 class="text-body-highlight">Se connecter</h3>
								</div>
								<div class="position-relative">
									<hr class="bg-body-secondary mt-5 mb-4" />
									<div class="divider-content-center">Accéder à votre compte</div>
								</div>
								@if(session('error'))
								<div class="alert alert-subtle-danger alert-dismissible fade show fs-9" role="alert" style="padding-top: 1rem; padding-bottom: 1rem; padding-left: 1.5rem; padding-right: 1rem">
									{{ session('error') }}
									<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" style="padding-bottom: 0.6rem;"></button>
								</div>
							@endif
								<div class="mb-3 text-start">
									<label class="form-label" for="email">Identifiant</label>
									<div class="form-icon-container"><input class="form-control form-icon-input" type="identifiant" placeholder="Identifiant" name="identifiant"/><span class="fas fa-user text-body fs-9 form-icon"></span></div>
								</div>
								<div class="mb-3 text-start">
									<label class="form-label" for="password">Mot de passe</label>
									<div class="form-icon-container"><input class="form-control form-icon-input" type="password" placeholder="Mot de passe" name="password"/><span class="fas fa-key text-body fs-9 form-icon"></span></div>
								</div>
								<div class="row flex-between-center mb-5">
									<div class="col-auto">
										<div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox" /><label class="form-check-label mb-0" for="basic-checkbox">Se souvenir de moi</label></div>
									</div>
									<div class="col-auto"><a class="fs-9 fw-semibold" href="forgot-password.html">J'ai oublié mon mot de passe</a></div>
								</div>
								<button class="btn btn-primary w-100" type="submit">Se connecter</button>
							</div>
						</div>
					</div>
				</div>
			</main>
		</form>
		<script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
		<script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
		<script src="{{ asset('vendors/is/is.min.js') }}"></script>
		<script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
		<script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
		<script src="https://polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
		<script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
		<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
		<script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
		<script src="{{ asset('assets/js/phoenix.js') }}"></script>
	</body>
</html>