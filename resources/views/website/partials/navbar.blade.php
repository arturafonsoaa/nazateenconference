<nav id="main-nav"
    class="fixed top-0 w-full flex flex-wrap items-center justify-between py-4 z-50 transition-colors bg-transparent text-white hover:text-neon-pink navbar navbar-expand-lg navbar-light">
    <div class="container m-auto flex flex-wrap items-center justify-between px-6">
        <button
            class="navbar-toggler text-white border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline"
            type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links"
            aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                </path>
            </svg>
        </button>
        <div class="w-24">
            <a class="w-24" href="#">
                <img src="{{ Vite::asset('resources/img/logo-base.png') }}" class="w-full" />
            </a>
        </div>
        <div class="collapse navbar-collapse items-center text-center" id="navbar-links">
            <ul class="navbar-nav flex flex-col pl-0 py-4 lg:py-0 bg-neutral-black lg:bg-transparent list-style-none mr-auto uppercase">
                <li class="nav-item p-2">
                    <a class="nav-link text-white hover:text-neon-pink" href="#section-speakers">Palestrantes</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-white hover:text-neon-pink" href="#section-schedule">Programação</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-white hover:text-neon-pink" href="#section-register-now">Inscrição</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-white hover:text-neon-pink" href="{{ route('login') }}">
                        <i class="fa fa-right-to-bracket fa-fw mr-2"></i> Entrar
                    </a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
    </div>
</nav>

@section('js')
    @parent
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            jQuery(window).scroll(function() {
                if (jQuery(window).scrollTop() > 72) {
                    jQuery('#main-nav').addClass('bg-neutral-black')
                    jQuery('#main-nav').removeClass('bg-transparent')
                } else {
                    jQuery('#main-nav').removeClass('bg-neutral-black')
                    jQuery('#main-nav').addClass('bg-transparent')
                }
            })
        })
    </script>
@endsection
