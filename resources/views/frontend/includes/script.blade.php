<script src="{{ asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.1/jquery-migrate.min.js"></script>

<script src="{{ asset('frontend/bootstrap/assets/bootjs/popper.min.js') }}"></script>
<script src="{{ asset('frontend/bootstrap/assets/bootjs/bootstrap.min.js') }}"></script>


<!-- News Ticker -->
<script type="text/javascript" src="{{ asset('frontend/assets/js/ticker.js') }}"></script>

<script type="text/javascript" src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/scripts.js') }}"></script>





<script type="text/javascript">
    $(document).ready(function() {
        lightbox.option({
            'resizeDuration': 800,
            'wrapAround': false,
            'maxWidth': 1920,
            'disableScrolling': true,
        })
    });
</script>

<script type="text/javascript">
    /* Preloader */
    $(window).on('load', function() { // makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut(
            'slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    });

    /* News Ticker */
    hljs.initHighlightingOnLoad();
    $(document).ready(function() {
        $('#newsTicker14').breakingNews();
        $('#newsTicker9').breakingNews({
            themeColor: '#f9a828',
            effect: 'slide-left'
        });
    });
</script>
