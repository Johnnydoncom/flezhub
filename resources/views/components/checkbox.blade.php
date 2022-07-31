@props(['label' => null, 'wrapperClass'=>'', ])

<div class="flex items-center {{$wrapperClass}}">
    <input {!! $attributes->merge(['class' => 'w-4 h-4 text-primary bg-gray-100 rounded border-gray-300 focus:ring-primary dark:focus:ring-primary dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600']) !!} type="checkbox">
    <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="{{ $attributes->get('id')}}">
        {{$label ?? $slot}}
    </label>
</div>
