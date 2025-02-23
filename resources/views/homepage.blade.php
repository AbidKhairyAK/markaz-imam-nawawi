<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta
		http-equiv="X-UA-Compatible"
		content="IE=edge"
	>
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>

	<x-social-meta
		title="Markaz Imam Nawawi"
		description="Pesantren Tahfidzul Qur’an Markaz Imam Nawawi Bulukumba adalah sebuah lembaga pendidikan Khusus Tahfidzul Qur’an setingkat SMP, SMA didirikan pada tahun 2018"
		image="{{ asset('favicon/android-chrome-512x512.png') }}"
	/>

	<title>
		@hasSection('title')
			@yield('title') |
		@endif
		Markaz Imam Nawawi
	</title>

	<link
		rel="preconnect"
		href="https://fonts.bunny.net"
	>
	<link
		href="https://fonts.bunny.net/css?family=bebas-neue:400|mulish:300,400,400i,600,700,900"
		rel="stylesheet"
	/>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="outer-wrapper font-sans leading-normal text-gray-800">
	<main class="inner-wrapper overflow-hidden">

		<!-- === NAVBAR START === -->
		@php
$menus = json_decode(
	json_encode([
		['title' => 'Beranda', 'url' => '#'],
		['title' => 'Tentang Kami', 'url' => '#'],
		['title' => 'Aktifitas Santri', 'url' => '#'],
		['title' => 'Galeri', 'url' => '#'],
	]),
);
		@endphp

		<header class="sticky top-0 z-40 bg-gradient-to-r from-[#369b3a] to-[#00763d] py-1 md:py-2">
			<div class="container">
				<div class="navbar">

					<section class="navbar-start">
						<a
							class="flex items-center gap-2"
							href="/"
						>
							<div
								class="block overflow-hidden rounded-full shadow-lg"
								href="#"
							>
								<img
									src="{{ asset('assets/logo-markaz-imam-nawawi.jpeg') }}"
									class="w-14 scale-105 object-contain"
								>
							</div>
							<div class="hidden font-['Bebas_Neue'] leading-none text-white drop-shadow md:block">
								<div class="text-3xl">MARKAZ</div>
								<div class="-mt-[10px] text-lg">IMAM NAWAWI</div>
							</div>
						</a>

						<div class="dropdown">
							<div
								tabindex="0"
								role="button"
								class="btn btn-ghost mr-2 lg:hidden"
							>
								<img
									src="{{ asset('assets/menu-bar.svg') }}"
									class="h-8 w-8"
								>
							</div>
							<ul
								tabindex="0"
								class="menu dropdown-content -left-[72px] mt-4 w-[calc(100vw-15px)] rounded-xl bg-base-100 p-2 shadow"
							>
								@foreach ($menus as $menuIndex => $menu)
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
						<ul class="menu menu-horizontal gap-6 font-semibold text-white">
							@foreach ($menus as $menu)
								<li>
									<a href="{{ $menu->url }}">
										{{ $menu->title }}
									</a>
								</li>
							@endforeach
						</ul>
					</section>

					<section class="navbar-end">
						<button class="btn btn-secondary rounded-xl font-bold shadow">
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
				class="relative -left-5 z-0 w-[120vw] max-w-[120vw] object-contain md:left-0 md:w-full md:max-w-full"
				src="/assets/banner-web-markaz-imam-nawawi.png"
				alt="banner web markaz imam nawawi"
			>
		</section>
		<!-- === BANNER END === -->


		<!-- === ABOUT US START === -->
		<section class="container pb-24 pt-20">
			<h2 class="mb-10 text-center text-3xl font-black text-gray-800 md:mb-16 md:text-4xl">
				Tentang Kami
				<div class="mx-auto mt-3 w-[16rem] bg-[#369b3a] p-[.15rem] md:mt-4 md:w-[18rem]"></div>
			</h2>

			<div class="grid gap-8 md:grid-cols-5">
				<section class="relative md:col-span-2">
					<div
						class="absolute -left-2 -top-2 h-full w-full scale-95 rounded-xl bg-gradient-to-br from-[#369b3a] to-[#00763d] shadow-lg"
					>
					</div>
					<img
						class="relative -bottom-2 -right-2 w-full scale-95 rounded-2xl border-8 border-white object-contain shadow-xl"
						src="{{ asset('assets/santri-markaz-imam-nawawi.jpg') }}"
					>
				</section>

				<section class="prose md:col-span-3">
					<p>
						Pesantren Tahfidzul Qur’an <strong>Markaz Imam Nawawi</strong> Bulukumba adalah sebuah lembaga
						pendidikan
						Khusus Tahfidzul Qur’an setingkat SMP, SMA didirikan pada tahun 2018 dan berkedudukan
						di Kabupaten Bulukumba.
					</p>

					<p>
						<strong>Markaz Imam Nawawi</strong> merupakan sistem pendidikan yang menghafalkan dan memahamkan
						Al-Qur’an
						serta menanamkan karakter Islami yang mendalam kepada generasi Muslim/ah
					</p>
				</section>
			</div>
		</section>
		<!-- === ABOUT US END === -->


		<!-- === OUR PROGRAM START === -->
		<section class="bg-gradient-to-br from-[#369b3a] to-[#00763d] py-12 shadow-2xl md:py-16">
			<h2 class="mb-10 text-center text-3xl font-black text-white md:mb-16 md:text-4xl">
				Program Kami
				<div class="mx-auto mt-3 w-[16rem] bg-secondary p-[.15rem] md:mt-4 md:w-[18rem]"></div>
			</h2>

			@php
				$programs = json_decode(json_encode([
					[
						'title' => 'LPQ',
						'subtitle' => 'Lembaga Pendidikan Qur’an.',
						'content' => 'Program untuk tahfidz sore dan tahfidz weekend.',
						'image' => asset('assets/santri-markaz-imam-nawawi.jpg'),
					],
					[
						'title' => 'TPQ',
						'subtitle' => 'Taman Pendidikan Qur’an.',
						'content' => 'Program mengaji Iqro\' dan juz 30 untuk siswa SD',
						'image' => asset('assets/santri-markaz-imam-nawawi.jpg'),
					],
					[
						'title' => 'RTQ',
						'subtitle' => 'Rumah Tahfidz Qur’an.',
						'content' => 'Program dengan fokus tahfidz tanpa mondok',
						'image' => asset('assets/santri-markaz-imam-nawawi.jpg'),
					],
				]));
			@endphp

			<section class="container grid gap-8 lg:grid-cols-3">
				@foreach ($programs as $program)
					<article class="card bg-white shadow-xl">
						<figure>
							<img src="{{ $program->image }}">
						</figure>

						<div class="card-body p-6">
							<h2 class="card-title mx-auto text-2xl font-black text-gray-800">
								{{ $program->title }}
							</h2>
							<p class="text-center text-sm mb-4">
								{{ $program->subtitle }}
							</p>
							<p class="text-center font-light">
								{{ $program->content }}
							</p>
						</div>
					</article>
				@endforeach
			</section>
		</section>

		<!-- === OUR PROGRAM END === -->
	</main>
</body>

</html>
