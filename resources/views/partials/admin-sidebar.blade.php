<aside class="fixed left-0 top-0 w-64 h-full bg-[#0f172a] text-white">

    <div class="p-6 text-xl font-bold border-b border-white/10">
        SB PERBARINDO
        <p class="text-xs text-white/60">Admin Panel</p>
    </div>

    <nav class="mt-6 space-y-1 text-sm">

        <a href="{{ route('admin.dashboard') }}"
           class="block px-6 py-3 hover:bg-white/10">
           Dashboard
        </a>

        <a href="{{ route('admin.complaints') }}"
           class="block px-6 py-3 hover:bg-white/10">
           Pengaduan
        </a>

    </nav>
</aside>
