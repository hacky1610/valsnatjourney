<?php
/**
 * Displays Main Navigation
 *
 */

?>
<div class="mainmenu-area hidden-xs">
                <div id="sticker"> 
                    <div class="vnj-container">
                        <div class="row">   
					
                            <div class="col-lg-11 col-md-11 col-sm-12">
                                <div class="mainmenu">
                                   <nav>
                                       <ul id="nav">
                                             <?php
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'primary',
                                                        'container' 	 => '',
                                                        
                                                        'items_wrap' => '%3$s'
                                                    )
                                                );
                                              ?>
                                       </ul>  
                                   </nav>  
                                </div>        
                            </div>
							 <div class="col-lg-1 col-md-1 hidden-sm toolbarContainer">
							  		 <?php #do_action('hamzahshop_custom_product_search');?>
							 <?php do_action('hamzahshop_custom_min_cart');?>
							<?php #do_action('sharonne_account_button');?> 
								 	<?php echo do_shortcode('[woocommerce_currency_switcher_drop_down_box]'); ?>
							
							
							 
							</div>	
						
                        </div>
                    </div>
               
				</div>      
            </div>
            
              <!-- Mobile Menu Area start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
							
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
										<?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'primary',
                                                'container' 	 => '',      
                                            )
                                        );
                                        ?>
                                    </nav>
                                </div>					
                            </div>
							<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="MobileButtonBar">
								 <?php do_action('hamzahshop_custom_min_cart');?>
								<?php #do_action('sharonne_account_button');?> 
								<?php echo do_shortcode('[woocommerce_currency_switcher_drop_down_box]'); ?>
							
							</div>
							</div>
                        </div>
								
                    </div>
		
					
                </div>
                <!-- Mobile Menu Area end -->
         