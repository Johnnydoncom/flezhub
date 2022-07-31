@props(['type' => 'light'])
<img src="{{ $type=='dark' ? site_logo_white() : site_logo() }}" {{ $attributes->merge(['class' => 'rounded-md']) }}>
