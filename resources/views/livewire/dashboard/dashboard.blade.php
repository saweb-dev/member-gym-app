<div>
    <div class="flex justify-between ">
        <h1 class="text-2xl font-bold text-[#bbe50a] mb-4">
            Bienvenue {{ auth()->user()->name }}
        </h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-[10px] px-3 py-1 rounded">
                Déconnexion
            </button>
        </form>
        {{-- Theme Toggle --}}
        <button
            id="theme-toggle"
            onclick="toggleTheme()"
            class="group flex items-center justify-center w-9 h-9 rounded-xl transition-all duration-300 cursor-pointer border
                bg-white dark:bg-[#141414]
                border-zinc-200 dark:border-white/[0.06] 
                text-slate-500 dark:text-yellow-400
                hover:border-primary/70  
                hover:shadow-md"
            aria-label="Toggle theme">

            {{-- Soleil — visible en dark --}}
            <svg x-cloak xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="transition-transform group-hover:rotate-45 hidden dark:block">
                <circle cx="12" cy="12" r="5"/>
                <line x1="12" y1="1" x2="12" y2="3"/>
                <line x1="12" y1="21" x2="12" y2="23"/>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                <line x1="1" y1="12" x2="3" y2="12"/>
                <line x1="21" y1="12" x2="23" y2="12"/>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
            </svg>

            {{-- Lune — visible en light --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="transition-transform group-hover:-rotate-12 block dark:hidden">
                <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z"/>
            </svg>
        </button>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white dark:bg-red-100 p-4 rounded shadow">Carte 1</div>
        <div class="bg-white p-4 rounded shadow">Carte 2</div>
        <div class="bg-white p-4 rounded shadow">Carte 3</div>
    </div>
</div>
