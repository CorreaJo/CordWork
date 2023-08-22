<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-[#642898] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#642898] active:bg-[#642898] focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>