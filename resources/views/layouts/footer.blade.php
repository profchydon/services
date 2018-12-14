<footer class="footer">

<div class="row text-center">
    <!-- <p class="footer-p-main">This site is restricted to persons 18 years or over.</p> -->
</div>

</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha384-pPttEvTHTuUJ9L2kCoMnNqCRcaMPMVMsWVO+RLaaaYDmfSP5//dP6eKRusbPcqhZ" crossorigin="anonymous"></script>


<!-- Magnific Popup core JS file -->
<!-- <script src="{{ asset('js/magnific-popup.min.js') }}"></script> -->

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

    //State and City Stuff
    $.ajax({
            url: '/js/locations.json',
            type: 'GET',
            dataType: 'json'
        })
        .done(function(error) {
            mydata = error;
            for (var state in mydata.States) {
                $('#state').append('<option value="' + String(state) + '">' + String(state) + ' </option>');
            }
        })
    $('#state').change(function(event) {
        var selectedState = $(this).val();
        $('#city').empty();
        //Get cities for selectedState
        var cities = mydata.States[String(selectedState)];
        $('#city').append('<option value="" selected disabled>Please select</option>');

        for (var i = 0; i < cities.length; i++) {
            $('#city').append('<option value="' + String(cities[i]) + '">' + String(cities[i]) + ' </option>');
        }
    });

});
</script>
</body>
</html>
