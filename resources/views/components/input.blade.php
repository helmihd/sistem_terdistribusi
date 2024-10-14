@props(['name', 'id', 'placeholder'])

<div class="relative mt-2">
    <input
        type="text"
        id="{{ $id }}"
        name="{{ $name }}"
        class="pl-8 h-9 bg-transparent border border-gray-300 dark:border-gray-700 dark:text-white w-full rounded-md text-sm"
        placeholder="{{ $placeholder }}"
    />
</div>
