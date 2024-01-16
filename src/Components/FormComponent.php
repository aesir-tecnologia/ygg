<?php

namespace Aesir\Ygg\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

abstract class FormComponent extends Component
{
    /** @var string[] Attributes shared between ComponentAttributeBag and component properties. */
    protected array $sharedAttributes = [
        'id',
        'name',
        'disabled',
        'readonly',
    ];

    public function render(): Closure
    {
        return function (array $data) {
            return view($this->getView(), $this->mergeAttributes($data));
        };
    }

    abstract protected function getView(): string;

    protected function mergeAttributes(array $data): array
    {
        /** @var ComponentAttributeBag $attributes */
        $attributes = $data['attributes'];

        $model = $attributes->get('wire:model');

        if ($attributes->has('name') && ! $model) {
            $model = $attributes->get('name');
        }

        if (! $attributes->has('name') && $model) {
            $attributes->offsetSet('name', $model);
        }

        if (! $attributes->has('id') && $model) {
            $attributes->offsetSet('id', md5($model));
        }

        foreach ($this->sharedAttributes as $attribute) {
            $value = property_exists($this, $attribute)
                ? data_get($this, $attribute)
                : $attributes->get($attribute);

            $data[$attribute] = $value;
            $attributes->offsetSet($attribute, $value);
        }

        return $data;
    }
}
