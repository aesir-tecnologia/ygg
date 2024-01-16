<label {{ $attributes->class($getClasses($attributes->get('disabled'))) }}>
    {{ $label ?? $slot }}
</label>
