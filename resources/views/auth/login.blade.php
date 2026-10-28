<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative min-h-screen overflow-hidden bg-[#0b100b] flex items-center justify-center p-4">

    {{-- Image de fond floutée --}}
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('assets/img/loginImage.png') }}" alt=""
             class="h-full w-full scale-110 object-cover"> 
    </div>

    {{-- Carte --}}
    <div class="w-full max-w-sm rounded-[2.5rem] bg-black/40 backdrop-blur-md ring-1 ring-white/10 shadow-2xl px-7 py-10 flex flex-col items-center ">

        <div class="text-center mb-8">
            <svg class="mx-auto h-12 w-12 text-[#bbe50a]" viewBox="0 0 48 48" fill="currentColor">
                <rect x="2" y="15" width="6" height="18" rx="2"/>
                <rect x="9" y="10" width="7" height="28" rx="2.5"/>
                <rect x="32" y="10" width="7" height="28" rx="2.5"/>
                <rect x="40" y="15" width="6" height="18" rx="2"/>
                <rect x="17" y="21" width="14" height="6" rx="1"/>
            </svg>
            <h1 class="mt-4 text-2xl font-bold text-gray-100">Connexion</h1>
        </div>

        <form action="{{ route('login') }}" method="post" class="w-full space-y-4">
            @csrf
            {{-- Code de l'application --}}
            <div>
                <div class="flex items-center gap-3 rounded-2xl bg-black/60 p-4 focus-within:ring-2 focus-within:ring-[#bbe50a]
                            @error('access_code') ring-2 ring-red-500 @enderror">
                    <svg class="h-5 w-5 shrink-0 text-[#bbe50a]" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M4 3h10a1 1 0 0 1 1 1v6h5a1 1 0 0 1 1 1v9h-5v-4h-4v4H4V4a1 1 0 0 1 0-1zm3 3v2h2V6H7zm0 4v2h2v-2H7zm0 4v2h2v-2H7zm4-8v2h2V6h-2zm0 4v2h2v-2h-2z"/>
                    </svg>
                    <input type="text" id="access_code" name="access_code" value="{{ old('access_code') }}"
                           placeholder="Code de l'application" required autofocus
                           class="w-full bg-transparent text-white placeholder-gray-400 uppercase placeholder:normal-case focus:outline-none">
                </div>
                @error('access_code')
                    <p class="mt-1 ml-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Nom d'utilisateur --}}
            <div>
                <div class="flex items-center gap-3 rounded-2xl bg-black/60 p-4 focus-within:ring-2 focus-within:ring-[#bbe50a]
                            @error('username') ring-2 ring-red-500 @enderror">
                    <svg class="h-5 w-5 shrink-0 text-[#bbe50a]" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7z"/>
                    </svg>
                    <input type="text" id="username" name="username" value="{{ old('username') }}"
                           placeholder="Nom d'utilisateur" required autocomplete="username"
                           class="w-full bg-transparent text-white placeholder-gray-400 focus:outline-none">
                </div>
                @error('username')
                    <p class="mt-1 ml-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Mot de passe --}}
            <div>
                <div class="flex items-center gap-3 rounded-2xl bg-black/60 p-4 focus-within:ring-2 focus-within:ring-[#bbe50a]
                            @error('password') ring-2 ring-red-500 @enderror">
                    <svg class="h-5 w-5 shrink-0 text-[#bbe50a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="4" y="11" width="16" height="10" rx="2"/>
                        <path d="M8 11V7a4 4 0 0 1 8 0v4"/>
                    </svg>
                    <input type="password" id="password" name="password"
                           placeholder="Mot de passe" required autocomplete="current-password"
                           class="w-full bg-transparent text-white placeholder-gray-400 focus:outline-none">
                    <button type="button" id="togglePassword" aria-label="Afficher le mot de passe"
                            class="text-[#bbe50a] hover:opacity-80">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
                @error('password')
                    <p class="mt-1 ml-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="mt-2 flex w-full items-center justify-center gap-2 rounded-full bg-[#bbe50a] py-4
                           font-semibold text-[#0f0f0f] transition hover:brightness-110 active:scale-[0.99]
                           focus:outline-none focus:ring-2 focus:ring-[#bbe50a] focus:ring-offset-2 focus:ring-offset-black">
                Se connecter
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M5 12h14M13 6l6 6-6 6"/>
                </svg>
            </button>
        </form>

        <p class="mt-8 text-center text-xs text-gray-400">
            Besoin d'aide ? Contactez votre salle de sport.
        </p>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    </script>
</body>

</html>