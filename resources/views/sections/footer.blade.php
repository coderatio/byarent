<!-- Footer
    ================================================== -->
<div id="footer" class="br-sticky-footer">
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <img class="footer-logo" data-cfsrc="images/logo.png" alt="" style="display:none;visibility:hidden;">
                <noscript><img class="footer-logo" src="images/logo.png" alt=""></noscript>
                <br><br>
                <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
            </div>

            <div class="col-md-4 col-sm-6 ">
                <h4>Helpful Links</h4>
                <ul class="footer-links">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Add Property</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>

                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Our Agents</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-3  col-sm-12">
                <h4>Contact Us</h4>
                <div class="text-widget">
                    <span>12345 Little Lonsdale St, Melbourne</span> <br>
                    Phone: <span>(123) 123-456 </span><br>
                    E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="670801010e040227021f060a170b024904080a">[email&#160;protected]</span></a> </span><br>
                </div>

                <ul class="social-icons margin-top-20">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                </ul>

            </div>

        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
            </div>
        </div>

    </div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
{{--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/rangeSlider.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/sticky-kit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/masonry.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/uikit/js/uikit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/uikit/js/uikit-icons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/template/scripts/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>


<!-- Google Autocomplete -->
<script>
    $(document).ready(function () {
        const currency = '{{ setting('payments.currency_symbol') }}'
    })

    function initAutocomplete() {
        let input = document.getElementById('autocomplete-input');
        if (input) {
            let autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function() {
                let place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
            });
        }
    }
</script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>--}}

<!-- Style Switcher
================================================== -->
<script src="{{ asset('vendor/template/scripts/switcher.js') }}"></script>

{{--<div id="style-switcher">
    <h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>

    <div>
        <ul class="colors" id="color1">
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="navy" title="Navy"></a></li>
            <li><a href="#" class="yellow" title="Yellow"></a></li>
            <li><a href="#" class="peach" title="Peach"></a></li>
            <li><a href="#" class="beige" title="Beige"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
            <li><a href="#" class="celadon" title="Celadon"></a></li>
            <li><a href="#" class="pink" title="Pink"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="brown" title="Brown"></a></li>
            <li><a href="#" class="cherry" title="Cherry"></a></li>
            <li><a href="#" class="cyan" title="Cyan"></a></li>
            <li><a href="#" class="gray" title="Gray"></a></li>
            <li><a href="#" class="olive" title="Olive"></a></li>
        </ul>
    </div>

</div>--}}
<!-- Style Switcher / End -->

@yield('javascript')
