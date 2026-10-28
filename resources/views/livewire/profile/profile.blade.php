<div>
    <h1 class="text-2xl font-bold text-[#bbe50a] mb-4">Profile</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div>
            <label
                class="block text-[10px] font-bold uppercase tracking-widest mb-1.5
                text-zinc-500">
                Nom complet
            </label>
            <input readonly value="{{ $member->name }}" type="text"
                class="w-full px-3 py-2 rounded-xl border text-xs font-semibold transition-all duration-200 bg-white dark:bg-[#1a1a1a] border-zinc-200 dark:border-white/[0.08] text-zinc-700 dark:text-zinc-300 placeholder-zinc-300 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10">
        </div>
        <div>
            <label
                class="block text-[10px] font-bold uppercase tracking-widest mb-1.5
                text-zinc-500">
                CIN
            </label>
            <input readonly value="{{ $member->cin }}" type="text"
                class="w-full px-3 py-2 rounded-xl border text-xs font-semibold transition-all duration-200 bg-white dark:bg-[#1a1a1a] border-zinc-200 dark:border-white/[0.08] text-zinc-700 dark:text-zinc-300 placeholder-zinc-300 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10">
        </div>
        <div>
            <label
                class="block text-[10px] font-bold uppercase tracking-widest mb-1.5
                text-zinc-500">
                Date de naissance
            </label>
            <input readonly value="{{ $member->bornDate }}" type="text"
                class="w-full px-3 py-2 rounded-xl border text-xs font-semibold transition-all duration-200 bg-white dark:bg-[#1a1a1a] border-zinc-200 dark:border-white/[0.08] text-zinc-700 dark:text-zinc-300 placeholder-zinc-300 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10">
        </div>
        <div>
            <label
                class="block text-[10px] font-bold uppercase tracking-widest mb-1.5
                text-zinc-500">
                Téléphone
            </label>
            <input readonly value="{{ $member->tel }}" type="phone"
                class="w-full px-3 py-2 rounded-xl border text-xs font-semibold transition-all duration-200 bg-white dark:bg-[#1a1a1a] border-zinc-200 dark:border-white/[0.08] text-zinc-700 dark:text-zinc-300 placeholder-zinc-300 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10">
        </div>
        <div>
            <label
                class="block text-[10px] font-bold uppercase tracking-widest mb-1.5
                text-zinc-500">
                Adresse
            </label>
            <input readonly value="{{ $member->address }}" type="text"
                class="w-full px-3 py-2 rounded-xl border text-xs font-semibold transition-all duration-200 bg-white dark:bg-[#1a1a1a] border-zinc-200 dark:border-white/[0.08] text-zinc-700 dark:text-zinc-300 placeholder-zinc-300 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/10">
        </div>
    </div>
</div>
