<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center bg-slate-900 border-2 border-white rounded-md font-medium text-base text-white tracking-widest hover:text-red-500 hover:border-red-500 hover:bg-slate-900 focus:bg-slate-900 active:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
