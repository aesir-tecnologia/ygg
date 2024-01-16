@php
    $hasError = $name && $errors->has($name);
@endphp

<div class="w-full">
    @if ($label || $cornerHint)
        <div class="flex {{ !$label && $cornerHint ? 'justify-end' : 'justify-between items-end' }} mb-1">
            @if ($label)
                <x-ygg-label :for="$id" :has-error="$hasError" :label="$label"/>
            @endif

            @if ($cornerHint)
                <x-ygg-label :for="$id" :has-error="$hasError" :label="$cornerHint"/>
            @endif
        </div>
    @endif

    <div class="relative mt-2 rounded-md shadow-sm">
        <input {{ $attributes->merge(['type' => 'text'])->class($getClasses($hasError)) }} />
    </div>

    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
