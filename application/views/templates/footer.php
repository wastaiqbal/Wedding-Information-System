
<?php
$categoriesLimit = $this->Categories_model->getCategoriesLimit();
$setting = $this->Settings_model->getSetting();
$sosmed = $this->Settings_model->getSosmed();
$footerhelp = $this->Settings_model->getFooterHelp();
$footerinfo = $this->Settings_model->getFooterInfo();
$rekening = $this->db->get('rekening');
 ?>


 <style>
     footer div.information div.main div.about div.sosmed a:hover {
        color: <?= $this->config->item("default_color") ?>;
    }
    footer div.information div.main div.item a:hover {
        color: <?= $this->config->item("default_color") ?>;
    }
    footer div.contact div.main div.item i{
        color: <?= $this->config->item("default_color") ?>;
    }
 </style>
 <?php echo $this->session->flashdata('subscriber'); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.countdown.min.js"></script>
    <script>

        $("i.icon-search-navbar").on('click', function(){
            $("div.search-form").slideDown('fast');
            $("div.search-form input").focus();
        })

        $("div.search-form i").on('click', function(){
            $("div.search-form").slideUp('fast');
        })

        const years = new Date().getFullYear();
        $("#footer-cr-years").text(years);

        // COUNTDOWN NYA PAKE BEKASAN PROMO AJA BREN
        $("#countdownPromo").countdown({
            date: "<?= $setting['promo_time']; ?>", 
            render: function (data) {
                var el = $(this.el);
                el.empty()
                .append(
                    this.leadingZeros(data.days, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.hours, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.min, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.sec, 2)
                );
            },
        });

        //loading screen
        $(window).ready(function(){
            $(".loading-animation-screen").fadeOut("slow");
        })

        // detail
        $("#detailBtnPlusJml").click(function(){
            var val = parseInt($(this).prev('input').val());
            $(this).prev('input').val(val + 1).change();
            return false;
        })

        $("#detailBtnMinusJml").click(function(){
            var val = parseInt($(this).next('input').val());
            if (val !== 1) {
                $(this).next('input').val(val - 1).change();
            }
            return false;
        })



    </script>

    <!-- BRADERKUY CODE -->
    <!-- jQuery -->
        <script src="<?= base_url();  ?>assets/home/js/jquery-1.11.1.min.js"></script>
        <!-- Pace -->
        <script src="<?= base_url();  ?>assets/home/js/pace/pace.min.js"></script> 
    	<!-- Bootstrap -->
    	<script src="<?= base_url();  ?>assets/home/js/bootstrap/bootstrap.min.js"></script>  	
        <!-- Device JS -->
        <script src="<?= base_url();  ?>assets/home/js/devicejs/device.min.js"></script>  
        <!-- SmoothScroll -->
        <script src="<?= base_url();  ?>assets/home/js/smoothscroll/jquery.smooth-scroll.min.js"></script>
        <!-- Flexslider -->
        <script src="<?= base_url();  ?>assets/home/js/flexslider/jquery.flexslider-min.js"></script> 
        <!-- Waypoint -->
        <script src="<?= base_url();  ?>assets/home/js/waypoint/jquery.waypoints.min.js"></script>
        <!-- DoubleTapToGo -->
        <script src="<?= base_url();  ?>assets/home/js/jquery-ui-widget/jquery.ui.widget.min.js"></script>
        <script src="<?= base_url();  ?>assets/home/js/jquery-doubletaptogo/jquery.dcd.doubletaptogo.min.js"></script>
        <!-- Stellar -->
        <script src="<?= base_url();  ?>assets/home/js/stellar/jquery.stellar.min.js"></script>
        <!-- Masonry -->
        <script src="<?= base_url();  ?>assets/home/js/masonry/masonry.pkgd.min.js"></script>
        <!-- Countdown -->
        <script src="<?= base_url();  ?>assets/home/js/countdown/jquery.plugin.min.js"></script>
        <script src="<?= base_url();  ?>assets/home/js/countdown/jquery.countdown.min.js"></script>
        <!-- Magnific Popup -->
        <script src="<?= base_url();  ?>assets/home/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Owl Carousel -->
        <script src="<?= base_url();  ?>assets/home/js/owlcarousel/owl.carousel.min.js"></script>
        <!-- Google Map -->
        <script type="text/javascript" src="<?= base_url();  ?>assets/home/js/scripts.js"></script>        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiVsriSLN6zXp68PIIhUNyKBIYmTFuEBk"></script>
        <script type="text/javascript" src="<?= base_url();  ?>assets/home/js/markerlabel/markerwithlabel.js"></script>
        <!-- RSVP -->
        <script src="<?= base_url();  ?>assets/home/js/rsvp/rsvp.js"></script>
        
        <!-- Custom Additional Script -->
        <script type="text/javascript" src="<?= base_url();  ?>assets/home/js/main-slider-fade.js"></script>
        <script type="text/javascript" src="<?= base_url();  ?>assets/home/js/map-script-3.js"></script> 
    <!-- BRADERKUY CODE -->
</html>
