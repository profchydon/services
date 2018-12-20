<footer class="footer">

<div class="row text-center">
    <!-- <p class="footer-p-main">This site is restricted to persons 18 years or over.</p> -->
</div>

</footer>

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/util.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/button.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/modal.js') }}"></script>
<script src="{{ asset('js/main.js?version=4.4.0') }}"></script>
<script src="{{ asset('js/lightgallery.js') }}"></script>
<script src="{{ asset('js/lg-thumbnail.js') }}"></script>
<script src="{{ asset('js/lg-fullscreen.js') }}"></script>
<script src="{{ asset('js/lg-video.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/pagination.js') }}"></script>
<script src="http://vjs.zencdn.net/4.12/video.js"></script>

<script type="text/javascript">

$(document).ready(function() {

    $('#animated-thumbnails').lightGallery({
      thumbnail:true
    });
    $('#video-gallery').lightGallery({
        videojs: true
    });

    $("#partner-slide").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 6,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        itemsMobile :	[479,2],
    });

});
</script>
</body>
</html>
