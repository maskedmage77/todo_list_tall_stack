<div class="absolute top-4 right-4">
    <button 
        x-data="{ mode: 'dark' }"
        x-init="document.documentElement.classList.remove('light', 'dark'); document.documentElement.classList.add(mode);"
        @click="
            mode = (mode === 'dark') ? 'light' : 'dark';
            document.documentElement.classList.remove('light', 'dark');
            document.documentElement.classList.add(mode);
        "
        class="rounded bg-neutral-800 text-white hover:bg-neutral-700 transition h-10 w-10"
        >
        <i class="ph ph-sun" x-show="mode === 'dark'"></i>
        <i class="ph ph-moon" x-show="mode === 'light'"></i>
    </button>
</div>
