<html lang="en" style="background: var(--primary-cream-150, #FFEFCD);">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="undangan powered by mayvez">
    <meta name="tile" content="udangan">
    <meta name="MobileOptimized" content="320">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google" content="notranslate">
    <title>Undangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha384-/rJKQnzOkEo+daG0jMjU1IwwY9unxt1NBw3Ef2fmOJ3PW/TfAg2KXVoWwMZQZtw9" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Sacramento&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Open+Sans&family=Sacramento&display=swap">
    <link rel="stylesheet" href="{{ asset('css/scss.css') }}">
    <!-- Preconnect -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
</head>

<body>
    <div id="preloader">
        <div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div>
        <div class="ms-2 mt-2">
            <h6>Loading...</h6>
        </div>
    </div>
    <section class="container-sm" id="app" style="height: 100vh; background: var(--primary-cream-150, #FFEFCD);">
        @include('layouts.pattern_top')
        <div data-aos="fade-up">
            @yield('content')
            @include('layouts.footer')
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha384-n1AULnKdMJlK1oQCLNDL9qZsDgXtH6jRYFCpBtWFc+a9Yve0KSoMn575rk755NJZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script defer>
        ! function() {
            "use strict";
            AOS.init({
                duration: 1e3,
                once: !0
            }), document.addEventListener("DOMContentLoaded", (function() {
                const t = document.getElementById("preloader");
                window.addEventListener("load", (function() {
                    t.classList.add("fade-out"), setTimeout((function() {
                        t.style.opacity = "0", t.style.display = "none"
                    }), 200)
                }))
            }))
        }();
    </script>
</body>

</html>