<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Sistem Pakar Pertanian</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4 sm:p-6">

        <div class="w-full max-w-5xl">

            {{-- CARD UTAMA --}}
            <div class="relative overflow-hidden rounded-[28px] shadow-2xl">

                {{-- BACKGROUND FOTO SAWAH --}}
                <div
                    class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('{{ asset('images/bg-login.png') }}');">
                </div>

                {{-- OVERLAY HIJAU --}}
                <div class="absolute inset-0 bg-green-950/60"></div>

                {{-- ISI --}}
                <div class="relative z-10 min-h-[620px] px-6 py-10 sm:px-12 sm:py-12">

                    {{-- LOGO / NAMA APLIKASI --}}
                    <div class="absolute left-6 top-6 sm:left-10 sm:top-8">

                        <h1 class="text-2xl font-bold tracking-wide text-white">
                            Pertanian
                        </h1>

                        <p class="text-xs text-white/80">
                            Sistem Pakar Tanaman
                        </p>

                    </div>


                    {{-- FORM LOGIN --}}
                    <div class="flex min-h-[540px] items-center justify-center">

                        <div class="w-full max-w-md">

                            {{-- ICON --}}
                            <div class="mb-5 flex justify-center">

                                <div class="flex h-20 w-20 items-center justify-center rounded-full bg-white/15 backdrop-blur-md">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-11 w-11 text-white"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.7">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 21V10m0 0C9 10 5 8 5 4c4 0 7 2 7 6Zm0 0c3 0 7-2 7-6-4 0-7 2-7 6Z" />

                                    </svg>

                                </div>

                            </div>


                            {{-- JUDUL --}}
                            <div class="mb-8 text-center text-white">

                                <h2 class="text-3xl font-bold uppercase tracking-wider sm:text-4xl">
                                    Sistem Pakar
                                </h2>

                                <p class="mt-2 text-base font-medium text-white/90">
                                    Identifikasi Hama dan Penyakit Tanaman
                                </p>

                            </div>


                            {{-- SESSION STATUS --}}
                            <x-auth-session-status
                                class="mb-4 text-white"
                                :status="session('status')" />


                            {{-- LOGIN CARD --}}
                            <div class="rounded-2xl border border-white/20 bg-black/20 p-6 shadow-xl backdrop-blur-sm sm:p-8">

                                <form method="POST" action="{{ route('login') }}">

                                    @csrf


                                    {{-- EMAIL --}}
                                    <div>

                                        <label
                                            for="email"
                                            class="mb-2 block text-sm font-medium text-white">

                                            Email

                                        </label>

                                        <div class="relative">

                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-5 w-5 text-white/60"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="1.8">

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M3 20a9 9 0 0 1 18 0" />

                                                </svg>

                                            </div>

                                            <input
                                                id="email"
                                                type="email"
                                                name="email"
                                                value="{{ old('email') }}"
                                                required
                                                autofocus
                                                autocomplete="username"
                                                placeholder="Masukkan email"
                                                class="block w-full rounded-xl border border-white/20 bg-white/15 py-3.5 pl-12 pr-4 text-white placeholder-white/60 outline-none transition focus:border-white/50 focus:bg-white/20 focus:ring-2 focus:ring-white/20"
                                            >

                                        </div>

                                        @if ($errors->get('email'))
                                            <p class="mt-2 text-sm text-red-200">
                                                {{ $errors->first('email') }}
                                            </p>
                                        @endif

                                    </div>


                                    {{-- PASSWORD --}}
                                    <div class="mt-5">

                                        <label
                                            for="password"
                                            class="mb-2 block text-sm font-medium text-white">

                                            Password

                                        </label>

                                        <div class="relative">

                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-5 w-5 text-white/60"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="1.8">

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M16.5 10.5V7a4.5 4.5 0 0 0-9 0v3.5" />

                                                    <rect
                                                        width="14"
                                                        height="10"
                                                        x="5"
                                                        y="10"
                                                        rx="2"
                                                        stroke="currentColor"
                                                        stroke-width="1.8" />

                                                </svg>

                                            </div>

                                            <input
                                                id="password"
                                                type="password"
                                                name="password"
                                                required
                                                autocomplete="current-password"
                                                placeholder="Masukkan password"
                                                class="block w-full rounded-xl border border-white/20 bg-white/15 py-3.5 pl-12 pr-4 text-white placeholder-white/60 outline-none transition focus:border-white/50 focus:bg-white/20 focus:ring-2 focus:ring-white/20"
                                            >

                                        </div>

                                        @if ($errors->get('password'))
                                            <p class="mt-2 text-sm text-red-200">
                                                {{ $errors->first('password') }}
                                            </p>
                                        @endif

                                    </div>


                                    {{-- REMEMBER ME --}}
                                    <div class="mt-5">

                                        <label class="inline-flex items-center">

                                            <input
                                                type="checkbox"
                                                name="remember"
                                                class="rounded border-white/30 bg-white/10 text-green-600 focus:ring-green-500">

                                            <span class="ml-2 text-sm text-white/80">
                                                Ingat saya
                                            </span>

                                        </label>

                                    </div>


                                    {{-- BUTTON --}}
                                    <button
                                        type="submit"
                                        class="mt-7 w-full rounded-xl bg-green-700 px-5 py-3.5 text-sm font-bold uppercase tracking-wide text-white shadow-lg transition hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-white/50">

                                        Masuk

                                    </button>


                                    {{-- LUPA PASSWORD --}}
                                    @if (Route::has('password.request'))

                                        <div class="mt-4 text-center">

                                            <a
                                                href="{{ route('password.request') }}"
                                                class="text-sm text-white/80 transition hover:text-white hover:underline">

                                                Lupa password?

                                            </a>

                                        </div>

                                    @endif

                                </form>


                                {{-- REGISTER --}}
                                @if (Route::has('register'))

                                    <div class="mt-6 border-t border-white/15 pt-5 text-center">

                                        <p class="text-sm text-white/75">

                                            Belum memiliki akun?

                                            <a
                                                href="{{ route('register') }}"
                                                class="font-semibold text-white hover:underline">

                                                Daftar sekarang

                                            </a>

                                        </p>

                                    </div>

                                @endif

                            </div>


                            {{-- KETERANGAN --}}
                            <p class="mt-5 text-center text-xs text-white/60">
                                Sistem Pendukung Identifikasi Awal Hama dan Penyakit Tanaman
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>