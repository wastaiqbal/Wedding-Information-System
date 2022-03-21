
    <!-- MUSIC -->
          <style>
            .container-music {
                position: Fixed;
                top: 150px;
                z-index: 999;
                height: 55px;
                width: 55px;
                margin: 200px auto;
                overflow: hidden;
                border-radius: 50%;
                box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
                transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
                -o-transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
                -moz-transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
                -webkit-transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
            }
            
            .container-music button {
                position: absolute;
                height: 100%;
                width: 100%;
                border: none;
                outline: none;
                cursor: pointer;
                background-color: #ac8ca4;
                text-align: center;
                transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
                -o-transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
                -moz-transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
                -webkit-transition: all .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
                opacity: 50%;
            }
            
            .container-music button i {
                font-size: 30px;
                color: #fff;
                opacity: 70%;
            }
            
            .container-music #playBtn {
                display: block;
            }
            
            .container-music #pauseBtn {
                display: none;
            }
            
            .container-music .songIcons {
                position: absolute;
                height: 50px;
                width: 100%;
                bottom: 0;
                left: 0;
                top: 240px;
            }
            
            .container-music .songIcons #a {
                position: absolute;
                color: #A3CB38;
                font-size: 30px;
                top: 30px;
                left: 14px;
            }
            
            .container-music .songIcons #b {
                position: absolute;
                color: #20bf6b;
                font-size: 20px;
                top: -10px;
                left: 160px;
            }
            
            .container-music .songIcons #c {
                position: absolute;
                color: #12CBC4;
                font-size: 40px;
                top: -40px;
                left: 40px;
            }
            
            .container-music .songIcons #d {
                position: absolute;
                color: #B53471;
                font-size: 16px;
                top: -5px;
                left: 73px;
            }
            
            .container-music .songIcons #e {
                position: absolute;
                color: #8e44ad;
                font-size: 44px;
                top: 14px;
                left: 100px;
            }
            /*on hover */
            
            .container-music button:hover {
                background-color: #ac8ca4;
                opacity: 100%;
            }
            
            .container-music button:hover i {
                animation: iconAnim .5s linear forwards 1;
                opacity: 100%;
            }
            /*animation*/
            
            @keyframes anim {
                0% {
                    top: 240px;
                }
                50% {
                    top: 20px;
                }
                100% {
                    top: -140px;
                }
            }
            
            @keyframes iconAnim {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.2);
                }
                100% {
                    transform: scale(1);
                }
            }
            /*class animation*/
            
            .animClass {
                animation: anim 2s .5s linear forwards infinite;
            }
        </style>

    <div class="container-music">
        <audio id="myAudio" loop="true" autoplay="true"> 
        <source src="<?= base_url(); ?>assets/home/music/back.mpeg" type="audio/mpeg">
       </audio>

        <button type="button" id="playBtn"> 
          <i id="play" class="fas fa-play"></i>
        </button>
        <button type="button" id="pauseBtn">
          <i id="pause" class="fas fa-pause"></i>
        </button>

        <div class="songIcons">
            <i id="a" class="fas fa-music"></i>
            <i id="b" class="fas fa-music"></i>
            <i id="c" class="fas fa-music"></i>
            <i id="d" class="fas fa-music"></i>
            <i id="e" class="fas fa-music"></i>
        </div>
    </div>


        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

       <script>
        $(document).ready(() => {


                $("#myAudio")[0].play();
                $("#playBtn").fadeOut(400);
                $("#pauseBtn").fadeIn(400);

                // add anim class
                $(".songIcons").addClass("animClass");

            // when we click on play button do this ===>>
            $("#playBtn").on("click", () => {
                $("#myAudio")[0].play();
                $("#playBtn").fadeOut(400);
                $("#pauseBtn").fadeIn(400);

                // add anim class
                $(".songIcons").addClass("animClass");
            });

            // when we click on pause button do this ===>>
            $("#pauseBtn").on("click", () => {
                $("#myAudio")[0].pause();
                $("#pauseBtn").fadeOut(400);
                $("#playBtn").fadeIn(400);

                // remove anim class
                $(".songIcons").removeClass("animClass");

            });
        });
    </script>
 <!--CONTENT SECTION-->
 <section id="content">
        <!--COUPLE SECTION-->    
        <section id="couple-section" class="section-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center animation fadeInUp">
                        <h2 class="h4">WELCOME TO OUR BEGINING</h2>
                        <p class="intro-text">" Pernikahan Selalu Mengubah Sepasang Manusia. Dari Sepasang Makhluk Asing, Berevolusi Perlahan Menjadi Satu Tim Yang Kuat Yang Membutuhkan Satu Sama Lain, Seperti Manusia Membutuhkan Udara " Irene Dyah ♥
                        </p><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <!--PHOTO-ITEM-->
                         <div class="photo-item animation fadeInLeft">
                            
                                 <!--HIS-PHOTO-->
                                <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo2']; ?>" alt="" class="hover-animation image-zoom-in">
                                        
                                <!--PHOTO OVERLAY-->
                                   <div class="layer wh95 hidden-black-overlay hover-animation fade-in">
                                </div><!--END of PHOTO OVERLAY-->                                                                  
                                 
                                <!--ICON LINK-->
                                <div class="layer wh100 hidden-link hover-animation delay1 fade-in">
                                    <div class="alignment">
                                        <div class="v-align center-middle">
                                        
                                             <div class="photo-name"><?= $couple['laki_nama'] ?></div>
                                            
                                          </div>
                                    </div>
                                 </div><!--END of ICON LINK-->
                        
                        </div><!--END of PHOTO-ITEM--> 
                       
                           <div class="couple-excerpt animation fadeInLeft">
                            <h2 class="h4">Mempelai Wanita</h2>
                            <h6>Ulfa Widapratama I.Ikom</h6>
                            <p><?= $couple['laki_deskripsi'] ?></p>
                          </div>
                    </div>
                       
                    <div class="col-md-6 col-sm-6">
                        <!--PHOTO-ITEM-->
                         <div class="photo-item animation fadeInRight">
                            
                                 <!--HER-PHOTO-->
                                <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo']; ?>" alt="" class="hover-animation image-zoom-in">
                                        
                                <!--PHOTO OVERLAY-->
                                   <div class="layer wh95 hidden-black-overlay hover-animation fade-in">
                                </div><!--END of PHOTO OVERLAY-->
                                                              
                                 
                                <!--ICON LINK-->
                                <div class="layer wh100 hidden-link hover-animation delay1 fade-in">
                                    <div class="alignment">
                                        <div class="v-align center-middle">
                                        
                                             <div class="photo-name"><?= $couple['perempuan_nama'] ?></div>
                                            
                                          </div>
                                    </div>
                                 </div><!--END of ICON LINK-->
                        
                        </div><!--END of PHOTO-ITEM--> 
                       
                           <div class="couple-excerpt animation fadeInRight">
                            <h2 class="h4">Mempelai Pria</h2>
                            <h6>Nugraha Nazarudin Soleh, IJ</h6>
                            <p><?= $couple['perempuan_deskripsi'] ?></p>
                          </div>
                    </div>
                           
                </div>
            </div>            	
        </section>
        <!-- END of COUPLE SECTION-->
        
        
        <!-- DIVIDER-1 SECTION -->
        <section id="divider-1-section">
            <div class="image-divider fixed-height" style="background-image:url(<?= base_url();  ?>assets/images/banner/DSC07124.JPG);" data-stellar-background-ratio="0.5">
                
                <div class="divider-overlay"></div>
                
                <!--Use Center Middle Alignment to align middle the content for fixed-height parallax-->
                <div class="alignment"> 
                    <div class="v-align center-middle">                   	
                
                <div class="container">                 	 
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-center">
                            <div id="adventure-begin-wrapper" class="animation fadeInUp">
                                <div id="adventure-begin" class="scale75-onmobile">
                                    <div id="let-the" class="quote-top">Hidup</div>
                                    <div id="adventure" class="quote-middle">Baru</div>
                                    <div id="begin" class="quote-bottom">Menanti</div>
                                   </div>
                               </div>
                         </div>
                     </div>
                 </div>
                 
                     </div>
                   </div>
                
            </div>		
        </section>
        <!-- END of DIVIDER-1 SECTION -->
        
        
        <!-- OUR STORY SECTION -->
        <section id="story-section" class="section-block">
            
            <div class="container">
           
                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="h4 animation fadeInUp">LOVE STORY TIMELINE</h2>
                       <!--  <p class="intro-text animation fadeInUp">
                            Berawal dari pertemuan yang sudah ditakdirkan oleh sang Maha Kuasa, berkenalan, berpacaran dan akhirnya
                            kami sampai ke titik pernikahan untuk melanjutkan kehidupan yang baru bersama dengannya.
                        </p> -->
                    </div>
                </div>
                <!-- END of ROW-1 -->
               
               
               <!-- STORY ROW-1-->
               <div class="row story-row">      
                    
                    <div class="col-sm-12 col-md-5 text-center">
                        <!--PHOTO-ITEM-->
                        <div class="photo-item animation delay1 fadeInLeft">
                                
                             <!--PHOTO-->
                               <img src="<?= $lovestory['ofm_link'] ?>" alt="" class="hover-animation image-zoom-in">
                                        
                               <!--PHOTO OVERLAY-->
                               <div class="layer wh100 hidden-black-overlay hover-animation fade-in">
                            </div><!--END of PHOTO OVERLAY-->
                                                                                
                            <!--ICON LINK-->
                            <div class="layer wh100 hidden-link hover-animation delay1 fade-in">
                                <div class="alignment">
                                    <div class="v-align center-middle">
                                       
                                         <a href="<?= $lovestory['ofm_link'] ?>" class="magnific-zoom" title="Our First Met">
                                            <div class="de-icon circle light medium-size inline">
                                                <i class="de-icon-zoom-in"></i>
                                            </div>
                                        </a>
                                            
                                      </div>
                                </div>
                            </div><!--END of ICON LINK-->
                        
                        </div><!--END of PHOTO-ITEM-->
                    </div>
                    
                    <div class="col-sm-12 col-md-2 text-center story-date-wrapper animation fadeIn">
                        <div class="story-date">
                            <div class="the-month"><?= $lovestory['ofm_tgl'] ?></div>
                           </div>                      
                    </div>
                    
                    <div class="col-sm-12 col-md-5 animation delay1 fadeInRight">
                        <h5>OUR FIRST MET</h5>
                        <p style="text-align: justify;"><?= $lovestory['ofm_desc'] ?></p>
                    </div>    
                    
                    <div class="vertical-line">
                    </div>
                                        
                </div><!-- END of STORY ROW-1 -->
                
               <!-- STORY ROW-2-->
               <div class="row story-row">      
                    
                    <div class="col-sm-12 col-md-5 col-md-push-7 text-center">
                        <!--PHOTO-ITEM-->
                        <div class="photo-item animation delay1 fadeInLeft">
                                
                             <!--PHOTO-->
                               <img src="<?= $lovestory['fd_link'] ?>" alt="" class="hover-animation image-zoom-in">
                                        
                               <!--PHOTO OVERLAY-->
                               <div class="layer wh100 hidden-black-overlay hover-animation fade-in">
                            </div><!--END of PHOTO OVERLAY-->
                                                                                
                            <!--ICON LINK-->
                            <div class="layer wh100 hidden-link hover-animation delay1 fade-in">
                                <div class="alignment">
                                    <div class="v-align center-middle">
                                       
                                         <a href="<?= $lovestory['fd_link'] ?>" class="magnific-zoom" title="Our Story">
                                            <div class="de-icon circle light medium-size inline">
                                                <i class="de-icon-zoom-in"></i>
                                            </div>
                                        </a>                                                 
                                            
                                      </div>
                                </div>
                            </div><!--END of ICON LINK-->
                        
                        </div><!--END of PHOTO-ITEM-->
                    </div>
                    
                    <div class="col-sm-12 col-md-2 text-center story-date-wrapper animation fadeIn">
                        <div class="story-date">
                            <div class="the-month"><?= $lovestory['fd_tgl'] ?></div>
                           </div>                       
                    </div>
                    
                    <div class="col-sm-12 col-md-5 col-md-pull-7 animation delay1 fadeInRight">
                        <h5>OUR STORY</h5>
                        <p style="text-align: justify;"><?= $lovestory['fd_desc'] ?></p>
                    </div>    
                    
                    <div class="vertical-line">
                    </div>
                                        
                </div><!-- END of STORY ROW-2 -->
                
                <!-- STORY ROW-3-->
                   <div class="row story-row">      
                    
                    <div class="col-sm-12 col-md-5 text-center">
                        <!--PHOTO-ITEM-->
                        <div class="photo-item animation delay1 fadeInLeft">
                                
                             <!--PHOTO-->
                               <img src="<?= $lovestory['hp_link'] ?>" alt="" class="hover-animation image-zoom-in">
                                        
                               <!--PHOTO OVERLAY-->
                               <div class="layer wh100 hidden-black-overlay hover-animation fade-in">
                            </div><!--END of PHOTO OVERLAY-->
                                                                                
                            <!--ICON LINK-->
                            <div class="layer wh100 hidden-link hover-animation delay1 fade-in">
                                <div class="alignment">
                                    <div class="v-align center-middle">
                                       
                                         <a href="<?= $lovestory['hp_link'] ?>" class="magnific-zoom" title="He Proposed">
                                            <div class="de-icon circle light medium-size inline">
                                                <i class="de-icon-zoom-in"></i>
                                            </div>
                                        </a>
                                            
                                      </div>
                                </div>
                            </div><!--END of ICON LINK-->
                        
                        </div><!--END of PHOTO-ITEM-->
                    </div>
                    
                    <div class="col-md-2 text-center story-date-wrapper animation fadeIn">
                        <div class="story-date">
                            <div class="the-month"><?= $lovestory['hp_tgl'] ?></div>
                           </div>                        
                    </div>
                    
                    <div class="col-sm-12 col-md-5 animation delay1 fadeInRight">
                        <h5>HE PROPOSED</h5>
                        <p style="text-align: justify;"><?= $lovestory['hp_desc'] ?></p>
                    </div>    
                    
                    <div class="vertical-line">
                    </div>	
                                        
                </div><!-- END of STORY ROW-3 -->
                
                
               <!-- STORY LAST ROW-->
                   <div class="row">
                    
                    <div class="col-md-12 text-center story-date-wrapper animation fadeIn">
                        <div id="last-row-date-wrapper">   
                        
                            <div class="vertical-line">
                            </div>                          	  
                            <div class="story-date">
                                <div class="the-month">and</div>
                                <div class="the-year">NOW</div>
                               </div>    
                            
                           </div>    
                        <div id="end-of-story" class="animation fadeInUp">
                            <h4>WE ARE GETTING MARRIED</h4>
                        </div>         
                    </div>
                           
                </div><!-- END of STORY LAST ROW -->
                
            </div><!-- END of CONTAINER -->
            
        </section>  
        
        
        <!-- SAVE THE DATE SECTION -->
        <section id="save-the-date-section">
            <div class="image-divider fixed-height" style="background-image:url(<?= base_url(); ?>assets/images/banner/1628954729042.JPG); height:500px" data-stellar-background-ratio="0.5">
                
                <div class="divider-overlay"></div>
                
                <!--Use Center Middle Alignment to align middle the content for fixed-height parallax-->
                <div class="alignment"> 
                    <div class="v-align center-middle">                   	
                
                <div class="container">                 	 
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-center">
                            <div id="save-date" class="animation fadeInUp">Save the Date</div>
                            <h2 class="h1 animation fadeInUp" style="margin:30px 0"><?= $couple['tgl_pernikahan'] ?></h2>
                            <span></span>
                             <h3  id="countdownPromo"class="animation fadeInUp" style="letter-spacing:6px; font-weight:400"></h3>                     
                         </div>
                     </div>
                 </div>
                 
                     </div>
                   </div>
                
            </div>		
        </section>
        <!-- END of SAVE THE DATE SECTION -->
        
        
        <!--WEDDING SECTION-->    
        <section id="wedding-section" class="section-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="h4 animation fadeInUp">OUR WEDDING</h2>
                        <p class="intro-text animation fadeInUp">
                            Sususan Acara pada pernikahan yang tidak akan pernah terlupakan ini dimulai dengan
                            Akad, Resepsi dan akan diakhiri
                            dengan Pesta untuk seluruh tamu undangan.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <!-- ITEM-1 -->
                    <!-- =================================================================== -->
                    <div class="col-md-4 col-sm-4 wedding-item-wrapper">
                        <!--PHOTO-ITEM-->
                        <div class="photo-item animation fadeInUp">
                            <!-- GANTI PHOTO-->
                            <img src="assets/images/banner/DSC07204.JPG" alt="" class="hover-animation image-zoom-in">
                        </div>
                        <!--END of PHOTO-ITEM--> 
                                
                        <!-- TITLE -->
                        <!-- <div class="title-excerpt animation fadeInUp text-center">
                            <h5><a href="#">IJAB KABUL</a></h5>
                            <p>Mengawali Pernikahan, kami akan memulainya dengan Ijab Kabul.</p>
                        </div> -->
                        <!-- END of TITLE-->
                    </div><!-- END of ITEM-1 -->
                                
                                
                       <!-- ITEM-2 -->
                    <!-- =================================================================== -->
                    <div class="col-md-4 col-sm-4 wedding-item-wrapper">
                        <!--PHOTO-ITEM-->
                        <div class="photo-item animation fadeInUp">
                            <!-- GANTI PHOTO-->
                            <img src="assets/images/banner/DSC07193.JPG" alt="" class="hover-animation image-zoom-in">
                        </div>
                        <!--END of PHOTO-ITEM--> 

                        <!-- TITLE-->
                       <!--  <div class="title-excerpt animation fadeInUp text-center">
                            <h5><a href="#">TUKAR CINCIN</a></h5>
                            <p>Kemudian dilanjutkan dengan acara Tukar Cincin antar mempelai.</p>
                           </div> -->
                        <!-- END of TITLE-->
                    </div><!-- END of ITEM-2 -->
                    
                    
                    <!-- ITEM-3 -->
                    <!-- =================================================================== -->
                    <div class="col-md-4 col-sm-4 wedding-item-wrapper">
                        <!--PHOTO-ITEM-->
                        <div class="photo-item animation fadeInUp">
                            <!--GANTI PHOTO-->
                            <img src="assets/images/banner/DSC07183.JPG" alt="" class="hover-animation image-zoom-in">
                        </div>
                        <!--END of PHOTO-ITEM--> 
                                
                        <!-- TITLE -->
                       <!--  <div class="title-excerpt animation fadeInUp text-center">
                            <h5><a href="#">PARTY</a></h5>
                            <p>Dan mengakhirinya dengan Pesta yang tidak akan terlupakan oleh Kami.</p>
                        </div> -->
                        <!-- END of TITLE-->
                    </div>
                    <!-- END of ITEM-3 -->
                </div>
            </div>            	
        </section>
        <!-- END of WEDDING SECTION-->
        
        
        <style>
         #map-section iframe {
             width: 100%!important;
             height: 550px!important;
         } 
        </style>

        <!-- MAP SECTION -->
        <section id="map-section">
              <?= $couple['link_gmap'] ?>
        </section>
        <!-- END of MAP SECTION -->

        
        
        <!--TAMU KEHORMATAN SECTION-->    
        <section id="bridesmaid-section" class="section-block more-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="h4 animation fadeInUp">OUR GUEST OF HONOR</h2>
                        <p class="intro-text animation fadeInUp">Terima Kasih telah menemani perjalan Kami berdua dari bawah sampai ke-titik saat ini, dengan ini Kami sangat menunggu kedatangan Anda sebagai Tamu Kehormatan di Pernikahan yang akan kami laksanakan. Jangan lupa untuk menghadiri acara pernikahan ini beserta keluarga & pasangannya!</p>
                    </div>
                </div>
                <div class="row">
            


                <?php if($promo->num_rows() > 0){ ?>
                <?php if($setting['promo'] == 1){ ?>

                    <?php foreach($getPromo->result_array() as $data): ?>
                    <!-- TAMU KEHORMATAN -->
                    <div class="col-md-4 col-sm-6 animation fadeInUp">
                        <div class="wedding-card">
                            <div class="card-photo">
                                <img src="<?= base_url(); ?>assets/images/product/<?= $data['img'] ?>" alt="" class="rounded fullwidth">
                                <div class="heart-icon-wrapper">
                                    <div class="heart-icon">
                                        <i class="de-icon-heart"></i>
                                    </div>
                                </div>
                               </div>
                            <div class="card-duty">
                                <h5>GUEST OF HONOR</h5>
                            </div>
                            <div class="card-name">
                                <?= $data['title'] ?>
                            </div>
                            <div class="card-desc">
                                <p class="no-margin"><?= $data['description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- END TAMU KEHORMATAN --> 
                    <?php endforeach; ?>

                <?php }else{ ?>
                <br><br>
                <?php } ?>
                <?php }else{ ?>
                <br><br>
                <?php } ?>
                    
                </div>
                
            </div>            	
        </section>
        <!-- END of TAMU KEHORMATAN SECTION-->
        
        
        <!-- DIVIDER-4 SECTION -->
        <section id="divider-4-section">
            <div class="image-divider fixed-height" style="background-image:url(<?= base_url(); ?>assets/images/banner/1628953883021.JPG); height:500px" data-stellar-background-ratio="0.5">
                
                <div class="divider-overlay"></div>
                
                <!--Use Center Middle Alignment to align middle the content for fixed-height parallax --> 
                <div class="alignment"> 
                    <div class="v-align center-middle">                 	
                
                <div class="container">                 	 
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-center">
                            <div id="attending-wrapper" class="animation fadeInUp">
                                <div id="attending">Datang Ya?</div>
                               </div>
                             <a href="#rsvp-section" class="de-button small light-2 rounded animation fadeInUp smooth-scroll">
                                Datang kok!
                            </a>
                         </div>
                     </div>
                 </div>
                 
                     </div>
                   </div>
                
            </div>		
        </section>
        <!-- END of DIVIDER-4 SECTION -->
     
        
        <!--GALLERY SECTION-->    
        <section id="gallery-section" class="section-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="h4 animation fadeInUp">GALLERY</h2>
                        <p class="intro-text animation fadeInUp">
                            Galleri tentang Kami, mulai dari pertama bertemu sampai di titik saat ini.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($package->result_array() as $p): ?>
                        <!-- GALLERY ITEM 1 -->
                        <div class="col-sm-4 col-md-3 gallery-item animation fadeInUp">
                            <!--PHOTO-ITEM-->
                            <div class="photo-item animation fadeIn">
                                    
                                <!--PHOTO-->
                                <img src="<?= base_url(); ?>assets/images/banner/<?= $p['banner'] ?>" alt="" class="hover-animation image-zoom-in">
                                            
                                <!--PHOTO OVERLAY-->
                                <div class="layer wh100 hidden-black-overlay hover-animation fade-in">
                                </div><!--END of PHOTO OVERLAY-->
                                                                                    
                                <!--ICON LINK-->
                                <div class="layer wh100 hidden-link hover-animation delay1 fade-in">
                                    <div class="alignment">
                                        <div class="v-align center-middle">
                                        
                                            <a href="<?= base_url(); ?>assets/images/banner/<?= $p['banner'] ?>" class="magnific-zoom-gallery" title="Gallery-1">
                                                <div class="de-icon circle light-1 medium-size inline">
                                                    <i class="de-icon-zoom-in-1"></i>
                                                </div>
                                            </a>
                                                
                                        </div>
                                    </div>
                                </div><!--END of ICON LINK-->
                            
                            </div><!--END of PHOTO-ITEM--> 
                        </div>
                        <!-- END of GALLERY ITEM 1 -->  
                    <?php endforeach; ?>
               </div>
            </div>            	
        </section>
        <!-- END of GALLERY SECTION-->
        
        
        <!-- DIVIDER-5 SECTION -->
        <section id="divider-5-section">
            <div class="image-divider fixed-height" style="background-image:url(<?= base_url();  ?>assets/images/banner/1628952628152.JPG); height:500px" data-stellar-background-ratio="0.5">
                
                <div class="divider-overlay"></div>
                
            </div>		
        </section>
        <!-- END of DIVIDER-5 SECTION -->
        
        
        <!--GIFT SECTION-->    
        <section id="gift-registry-section" class="section-block more-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="h4 animation fadeInUp">PROTOKOL KESEHATAN</h2>
                        <p class="intro-text animation fadeInUp">
                        Tanpa mengurangi rasa hormat, dikarenakan situasi yang sedang terjadi ditengah pandemi covid-19 ini kami memohon maaf karena acara akan diselenggarakan sesuai peraturan dan himbauan pemerintah.</p>
                         <img class="img-fluid" src="<?= base_url(); ?>assets/home/images/Protokol Kesehatan.jpg" alt="" class="hover-animation image-zoom-in">
                    </div>
                </div>

               <!--  <div class="row">
                    <div class="col-md-4 col-sm-6 animation fadeInUp">
                        <div class="gift-card">
                            <div class="gift-logo">
                                <a href="#"><img width="200" style="padding: 35px 0px;" src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-9.png" alt=""></a>
                               </div>
                            <div class="gift-desc">
                                <p class="no-margin">Jutaan Akun Premium Youtube</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 animation fadeInUp">
                        <div class="gift-card">
                            <div class="gift-logo">
                                <a href="#"><img width="170" src="gal7.jpg" alt=""></a>
                               </div>
                            <div class="gift-desc">
                                <p class="no-margin">Puluhan Unit Iphone Pro Max</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 animation fadeInUp">
                        <div class="gift-card">
                            <div class="gift-logo">
                                <a href="#"><img width="200" src="gal6.jpg" alt=""></a>
                               </div>
                            <div class="gift-desc">
                                <p class="no-margin">Ribuan Baju Supreme Termahal</p>
                            </div>
                        </div>
                    </div> -->
               </div>
            </div>            	
        </section>
        <!-- END of GIFT SECTION-->
        
        
        
        <!--RSVP SECTION-->    
        <section id="rsvp-section" class="section-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="h4 animation fadeInUp">Pastikan Kamu Hadir!</h2>
                        <p class="intro-text animation fadeInUp">Hadir kan? Beri Kami jawaban dengan mengisi form dibawah ini ya!</p>
                    </div>
                </div>
                <!--TEXT SECTION-->
                <div class="row">
                    <div id="message" class="col-md-12 message">
                        <!-- Show Message -->
                    </div>
                </div>
                <form class="whatsapp-form">
                <div class="row">                		
                    <div class="col-md-6 animation fadeInUp">
                        <div class="form-group">
                            <label for="wa_name">*NAMA</label>
                            <input type="text" class="form-control ajax-input" id="wa_name" placeholder="" data-required="Name Required" data-output-label="Output Name">
                         </div>
                        <div class="form-group">
                            <label for="wa_number">*NOMOR HANDPHONE</label>
                            <input type="phone" class="form-control ajax-input" id="wa_number" placeholder="" data-required="Email Required" data-output-label="Output Email">
                         </div>
                        <div class="form-group">
                            <label for="inputevents">*AKAN HADIR BERSAMA</label>
                            <select multiple id="wa_select" class="form-control ajax-input" data-required="Please Select Events" data-output-label="Output Events">
                                <option selected='selected' >PACAR</option>
                                <option>ISTRI</option>
                                <option>SUAMI</option>
                                <option>KELUARGA</option>
                            </select>
                         </div>
                    </div>
                    <div class="col-md-6 animation fadeInUp">
                        <div class="form-group">
                            <label for="wa_textarea">PESAN TAMBAHAN</label>
                            <textarea id="wa_textarea" class="form-control ajax-input" rows="15" data-output-label="Output Message"></textarea>
                         </div>               
                    </div>
                </div><!--END of TEXT SECTION-->
            
                <div class="row">
                    <div class="col-md-12 text-center animation fadeInUp">
                        <div class="form-group">
                             <a class="send_form de-button small" href="javascript:void" type="submit" title="Send to Whatsapp">Send to Whatsapp</a>
                             <div id="text-info"></div>
                        </div> 
                    </div>
                </div>
                </form>
            </div>            	
        </section>
        <!-- END of RSVP SECTION-->            
        
    </section>


    <script>
        $(document).on('click','.send_form', function(){
            var input_blanter = document.getElementById('wa_number');

            var walink = 'https://web.whatsapp.com/send',
                phone = '<?= $this->Settings_model->general()["whatsapp"]; ?>',
                walink2 = 'Hai! Aku akan menghadiri Pernikahan ',
                text_yes = 'Terkirim.',
                text_no = 'Isi semua Formulir lalu klik Send.';

            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var walink = 'whatsapp://send';
            }

            if("" != input_blanter.value){

            var input_select1 = $("#wa_select :selected").text(),
                input_name1 = $("#wa_name").val(),
                input_number1 = $("#wa_number").val(),
                input_textarea1 = $("#wa_textarea").val();

            var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
                '*Nama* : ' + input_name1 + '%0A' +
                '*Akan Hadir Bersama* : ' + input_select1 + '%0A' +
                '*Input Number* : ' + input_number1 + '%0A' +
                '*Pesan Tambahan* : ' + input_textarea1 + '%0A';

            window.open(blanter_whatsapp,'_blank');
                document.getElementById("text-info").innerHTML = '<span class="yes">'+text_yes+'</span>';
            } 
            else {
                document.getElementById("text-info").innerHTML = '<span class="no">'+text_no+'</span>';
            }
        });
    </script>