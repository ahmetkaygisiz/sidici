@extends('layout.main')

@section('content')
    <div class="contact-agile">
        <center>
        <div id="map" style="padding-top: 1cm ">

            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4133.57966518122!2d28.950164901646477!3d41.05742413958277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x445e66857fde4496!2zSGFsacOnIMOcbml2ZXJzaXRlc2k!5e0!3m2!1str!2str!4v1493470762181" width="1200" height="400" frameborder="0" style="border:0 ;" allowfullscreen></iframe>

        </div>
        </center>
        <br><br>
        <div class="faq">
            <h4 class="latest-text w3_latest_text">Contact Us</h4>
            <div class="container">
                <div class="col-md-3 location-agileinfo">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    </div>
                    <h3>Adress</h3>
                    <h4>Sütlüce Mah. No: 82 </h4>
                    <h4> İmrahor Cd., 34445</h4>
                    <h4>Beyoğlu/İstanbul</h4>
                </div>
                <div class="col-md-3 call-agileits">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    </div>
                    <h3>Call</h3>
                    <h4> 444 2 542</h4>
                    <h4> 505 894 78 25</h4>
                    <h4> 455 844 85 78</h4>
                </div>
                <div class="col-md-3 mail-wthree">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <h3>Email</h3>
                    <h4><a href="mailto:info@example.com">sidici@gmail.com</a></h4>
                    <h4><a href="mailto:info@example.com">ahmetkaygisiz@gmail.com</a></h4>
                    <h4><a href="mailto:info@example.com">blabla@gmail.com</a></h4>
                </div>
                <div class="col-md-3 social-w3l">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <h3>Social media</h3>
                    <ul>
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i><span class="text">Facebook</span></a></li>
                        <li class="twt"><a href="https://twitter.com/kaaygisiz"><i class="fa fa-twitter" aria-hidden="true"></i><span class="text">Twitter</span></a></li>
                        <li class="ggp"><a href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i><span class="text">Google+</span></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <form action="#" method="post">
                    <h1> Şirket Bilgileri</h1><br>
                    <p>
                        <b>Ünvanı</b><br>
                        Haliç Korsan Elektronik Hizmetler ve Tic. A.Ş. (Sidici.com)<br>
                        <b>Ticari Sicil Numarası</b><br>
                        445643<br>
                        <b>Genel Müdürlük</b><br>
                        Kuştepe Mah. Mecidiyeköy Yolu Cad. Trump Towers Kule 1 Kat:5 No:8 34387 Şişli/İstanbul<br>
                        <b>Yer Sağlayıcı</b><br>
                        D-Market Elektronik Hizmetler ve Tic. A.Ş.<br>
                        <b>Mersis Numarası</b><br>
                        0101101011010101<br>
                       </p>

                </form>
            </div>
        </div>
    </div>
    <!-- Map-JavaScript -->


    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(40.6700, -73.9400),
                styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
            });
        }
    </script>
@endsection