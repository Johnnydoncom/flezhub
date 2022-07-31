<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {!! SEO::generate() !!}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Adobe Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/uid2kib.css">

        <!-- Styles -->
        @stack('beforeStyles')
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        @stack('styles')
    </head>
    <body x-data="{
    menuOpened:false,
    hasScrolled:false,
    reactOnScroll() {
        if (this.$el.getBoundingClientRect().top < 120 && window.scrollY > 120) {
            this.hasScrolled = true;
        } else {
            this.hasScrolled = false;
        }
    }
    }" x-init="reactOnScroll()" @scroll.window="reactOnScroll()" class="font-sans antialiased overflow-x-hidden" :class="{'nav-open-noscroll': menuOpened }">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <x-headers.header-v1 />
{{--            @include('layouts.navigation')--}}


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <x-footers.footer-v1 />
        </div>

        @livewireScripts
        <script src="{{ mix('js/app.js') }}"></script>
        @include('layouts.darkmode-script')
        {!! setting('chat_widget') !!}
        @stack('scripts')
    </body>
</html>
