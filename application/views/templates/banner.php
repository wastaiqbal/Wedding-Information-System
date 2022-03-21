<?php $banner = $this->Settings_model->getBanner(); ?>


<!-- MAIN SLIDER -->
<section id="main-slider" class="flexslider fullscreen">      	
            
            <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
        	<div class="slide-title-outter-wrapper">
            	
            	<!-- MAIN SLIDER TITLE INNER WRAPPER -->
				<div class="slide-title-inner-wrapper">
                                
                    <!-- TITLE -->
					<div class="slide-title align-middle">
                    
                    	<div class="container">
                        	<div class="row">
                        		<div class="col-md-12">
									
                                    <div id="slide-couplename-wrapper" class="animation delay1 fadeInUp">
                                    
                                    	<div id="slide-couplename" class="scale75-onmobile">
                                            <div id="slide-his-name">
												<?= $couple['laki_nama'] ?>
                                        	</div>
                                        	<div id="slide-and-text">
				                            	<div id="curve-graphic">
                                            		<img src="<?= base_url();  ?>assets/home/images/and-banner.png" alt="">
                                            	</div>
                                           	 	<div id="and-text">
                                        			and
                                           		</div>
                                        	</div>
                                        	<div id="slide-her-name">
												<?= $couple['perempuan_nama'] ?>
                                        	</div>
                                        </div>
                                        <h1 id="slide-other-text" class="animation delay2 fadeInUp">
                                          Kami Akan Segera Menikah
                                        </h1>
                                        
                                    </div>
                                                            
								</div> 
							</div>
						</div>
                        
                        <!-- DOWN ARROW -->
						<div id="slide-arrow">
 							<div class="bounceloop">
                            	<a href="#content" class="animation fadeIn smooth-scroll"><i class="de-icon-down-open"></i></a>
                            </div>
            			</div>
            			 <!-- DOWN ARROW --> 
                        
					</div> 
                                
				</div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->
                
			</div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->
                         
            <!-- MAIN SLIDER IMAGES -->
            
  			<ul class="slides">
            	
                
    			<li>
                	<!-- SLIDE IMAGE -->
         

                     <?php
                      foreach ($banner->result_array() as $key => $value) {
                          $active = ($key == 0) ? 'active' : '';
                          echo '<div data-stellar-ratio="0.5" class="slide-image" style="background-image:url(' . base_url() . 'assets/images/banner/' . $value['img'] . '); background-position:center 80%;">
                          </div>';
                      }
                      ?>
                    
                    <!-- SLIDE OVERLAY -->
                    <div class="slide-overlay" style="opacity:0.3"> </div> 
                                                      
    			</li>
    			
  			</ul><!-- END of MAIN SLIDER IMAGES -->    
            
		</section><!-- ENF of MAIN SLIDER -->