@extends('layouts.site')

@section('content')
    <header>
        @include('website.partials.navbar')
    </header>

    <main id="main-content" class="bg-neutral-black">
        @include('website.partials.sections.banner')
        @include('website.partials.sections.reasons')
        @include('website.partials.sections.speakers')
        @include('website.partials.sections.schedule')
        @include('website.partials.sections.ticket')
        @include('website.partials.sections.sponsors')
        @include('website.partials.sections.testimonials')
        @include('website.partials.sections.gallery')
        @include('website.partials.sections.form')
        @include('website.partials.sections.call-to-action')
    </main>

    <footer class="bg-neutral-black py-20">
        @include('website.partials.footer')
    </footer>

    <a href="#" class="block fixed bottom-6 right-6 bg-neon-pink p-3 rounded-lg  ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 fill-white">
            <path fill-rule="evenodd"
                d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                clip-rule="evenodd" />
        </svg>
    </a>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let splide = new Splide('.splide', {
                type: 'loop',
                arrows: false,
                autoplay: true,
                classes: {
                    pagination: 'splide__pagination',
                    page: 'splide__pagination__page fa fa-circle text-white mx-1 my-4',
                },
            })
            splide.mount()
        })
    </script>
@endsection
