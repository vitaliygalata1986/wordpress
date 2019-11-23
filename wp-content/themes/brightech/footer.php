<div class="contact-us">
    <h2 class="contact-us__title">Contact Us</h2>
    <div class="contact-us-block">
        <div class="contact-us__left">
            <div class="contact-us__form">
                <form class="form">
                    <div class="contact-us__input">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="contact-us__input">
                        <input type="tel" name="phone" placeholder="Phone">

                    </div>
                    <div class="contact-us__input">
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="contact-us__input contact-us__input-last">
                        <input class="check" type="checkbox" name="confirm" id="confirm" >
                        <label for="confirm" class="last">I agree the processing of personal data</label>
                    </div>

                    <div class="contact-us__button">
                        <button type="submit" id="submit" disabled>Get in touch</button>
                    </div>
                    <div id="messenger"></div>
                </form>
            </div>
        </div>
        <div class="contact-us__right">
            <p>Please tell us more about your request and give us info about your company and country</p>
        </div>
    </div>
</div>
</div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 50.489412, lng: 30.489477},
                zoom: 14,
            }),
            marker = new google.maps.Marker({
                position: {lat: 50.489412, lng: 30.489477},
                map: map,
                icon: "<?php bloginfo('template_url')?>/img/marker.png"
            });
        $.getJSON("<?php bloginfo('template_url')?>/json/map-style/map-style_colored.json", function(data) {
            map.setOptions({styles: data});
        });
        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<b>Global Message Services Ukraine LLC</b>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

    }
</script>
<?php wp_footer()?>
</body>
</html>