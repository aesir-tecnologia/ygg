<?php

namespace Aesir\Ygg\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Label extends Component
{
    public function __construct(
        public bool $hasError = false,
        public ?string $label = null,
    ) {
    }

    public function getClasses($disabled): string
    {
        return Str::of('block text-sm font-medium leading-6')
                  ->when(
                      $this->hasError,
                      fn($str) => $str->append(' text-negative-600'),
                      fn($str) => $str->append(' text-secondary-900 dark:text-secondary-400'),
                  )
                  ->when($disabled, fn($str) => $str->append(' opacity-60'));
    }

    public function render(): Closure
    {
        return function (array $data) {
            return view('ygg::components.label', $data);
        };
    }
}
