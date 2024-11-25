<!doctype html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
			@hasSection('title')
				@yield('title') |
			@endif
			Markaz Imam Nawawi
		</title>

		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=bebas-neue:400|mulish:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />

		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body class="outer-wrapper font-sans leading-normal text-gray-800 ">

		<main class="inner-wrapper overflow-hidden">

			@php
				$menus = json_decode(json_encode([
					['title' => 'Beranda', 'url' => '#'],
					['title' => 'Tentang Kami', 'url' => '#'],
					['title' => 'Aktifitas Santri', 'url' => '#'],
					['title' => 'Galeri', 'url' => '#'],
				]));
			@endphp

			<!-- === NAVBAR START === -->
			<header class="bg-gradient-to-r from-[#369b3a] to-[#00763d] py-1 md:py-2 sticky top-0 z-40">
				<div class="container">
					<div class="navbar">

						<section class="navbar-start">
							<a href="/" class="flex items-center gap-2">
								<div class="block rounded-full overflow-hidden shadow-lg" href="#">
									<img
										src="{{ asset('/assets/logo-markaz-imam-nawawi.jpeg') }}"
										class="object-contain w-14 scale-105">
								</div>
								<div class="hidden md:block font-['Bebas_Neue'] drop-shadow leading-none text-white">
									<div class="text-3xl">MARKAZ</div>
									<div class="text-lg -mt-[10px]">IMAM NAWAWI</div>
								</div>
							</a>

							<div class="dropdown">
								<div tabindex="0" role="button" class="btn btn-ghost mr-2 lg:hidden">
									<img src="{{ asset('/assets/menu-bar.svg') }}" class="h-8 w-8">
								</div>
								<ul
									tabindex="0"
									class="menu dropdown-content -left-[72px] rounded-xl bg-base-100 mt-4 w-[calc(100vw-15px)] p-2 shadow">
									@foreach( $menus as $menuIndex => $menu )
										<li class="{{ $menuIndex == count($menus) - 1 ?: 'border-b border-base-200' }}">
											<a href="{{ $menu->url }}">
												{{ $menu->title }}
											</a>
										</li>
									@endforeach
								</ul>
							</div>
						</section>

						<section class="navbar-center hidden lg:flex">
							<ul class="menu menu-horizontal text-white font-semibold gap-6">
								@foreach( $menus as $menu )
									<li>
										<a href="{{ $menu->url }}">
											{{ $menu->title }}
										</a>
									</li>
								@endforeach
							</ul>
						</section>

						<section class="navbar-end">
							<button class="btn btn-secondary rounded-xl shadow font-bold">
								Pendaftaran
							</button>
						</section>

					</div>
				</div>
			</header>
			<!-- === NAVBAR END === -->


			<!-- === BANNER START === -->
			<section class="w-[100vw] max-w-[100vw] overflow-hidden shadow-xl">
				<img
					class="max-w-[120vw] w-[120vw] md:w-full md:max-w-full relative z-0 -left-5 md:left-0 object-contain"
					src="/assets/banner-web-markaz-imam-nawawi.png"
					alt="banner web markaz imam nawawi"
				>
			</section>
			<!-- === BANNER END === -->


			<!-- === ABOUT US START === -->
			<section class="container py-20 md:py-24">
				<div class="grid md:grid-cols-5 gap-8">
					<section class="md:col-span-2 relative">
						<div class="absolute -left-2 -top-2 w-full h-full scale-95 bg-gradient-to-br from-[#369b3a] to-[#00763d] rounded-xl shadow-lg"></div>
						<img
							class="relative -right-2 -bottom-2 w-full object-contain scale-95 rounded-2xl shadow-xl border-8 border-white"
							src="{{ asset('assets/santri-markaz-imam-nawawi.jpg') }}">
					</section>

					<section class="md:col-span-3 prose">
						<p>
							Pesantren Tahfidzul Qur’an <strong>Markaz Imam Nawawi</strong> Bulukumba adalah sebuah lembaga pendidikan
							Khusus Tahfidzul Qur’an setingkat ,SMP, SMA didirikan pada tahun 2018 dan berkedudukan
							di Kabupaten Bulukumba.
						</p>

						<p>
							<strong>Markaz Imam Nawawi</strong> merupakan sistem pendidikan yang menghafalkan dan memahamkan Al-Qur’an
							serta menanamkan karakter Islami yang mendalam kepada generasi Muslim/ah
						</p>
					</section>
				</div>
			</section>
			<!-- === ABOUT US START === -->

		</main>
	</body>
</html>
