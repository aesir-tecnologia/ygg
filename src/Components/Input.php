<?php

namespace Aesir\Ygg\Components;

class Input extends FormComponent
{
    public function __construct(
        public ?string $cornerHint = null,
        public ?string $label = null,
    ) {
    }

    public function shouldRender(): bool
    {
        return true;
    }

    public function getClasses(bool $hasError): string
    {
        return $hasError
            ? 'block w-full rounded-md border-0 py-1.5 pr-10 text-red-900 ring-1 ring-inset ring-red-300 placeholder:text-red-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6'
            : 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6';
    }

    protected function getView(): string
    {
        return 'ygg::components.input';
    }
}
