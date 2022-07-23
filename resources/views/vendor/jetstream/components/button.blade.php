<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-light dark text-uppercase']) }}>
    {{ $slot }}
</button>
