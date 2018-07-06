<?php
/**
 * Displays Footer
 *
 */

?>

<?php if (  is_active_sidebar( 'footer-top' ) ) { ?>
<!--Service Area Start-->
<div class="service-area">
    <div class="container">
        <div class="service-padding">
            <div class="row">
                 <?php dynamic_sidebar( 'footer-top' ); ?>
            </div>
        </div>    
    </div>
</div>
<?php }?>

<!--End of Service Area-->

<?php if (  is_active_sidebar( 'footer' ) ) { ?>
<!--Footer Widget Area Start-->
<div class="footer-widget-area">
    <div class="container">
        <div class="footer-widget-padding"> 
            <div class="row">
           	 <?php dynamic_sidebar( 'footer' ); ?>
            </div>
        </div>     
    </div>
</div>
<!--End of Footer Widget Area-->
<?php }?>

 <!--Footer Area Start-->
<footer class="footer">
    <div class="container">
        <div class="footer-padding">   
            <div class="row">
                <div class="col-md-12">	  
					<div>
                        <?php 
						$siteAddress = $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
						$iconsource = $siteAddress . "/wp-content/uploads/icons/";
						?>
					<div class="col-lg-4"></div>
					<div class="col-lg-4">
						<a href="<?php echo $siteAddress?>" class="author vnj-center">Vals Natural Journey</a>
						<div class="vnj-social-media-icons vnj-center"> 
						
							<a target="_blank" href="https://www.facebook.com/valsnaturaljourney/" >
								<img border="0" title="Facebook" src="<?php echo $iconsource . 'facebook_icon.png' ?>">
							</a>
							<a target="_blank" href="https://www.youtube.com/channel/UCDzD020Pf41D1lk_4ox_cvg" >
								<img border="0" title="Youtube" src="<?php echo $iconsource . 'youtube_icon.png' ?>">
							</a>
							<a target="_blank" href="https://www.instagram.com/valerie_hackbarth/" >
								<img border="0" title="Instagram" src="<?php echo $iconsource . 'instagram_icon.png' ?>">
							</a>
							</a>
							<a target="_blank" href="<?php echo $siteAddress . '/contact' ?>" >
								<img border="0" title="Contact" src="<?php echo $iconsource . 'mail_icon.png' ?>">
							</a>
						</div>
						
						<div class="vnj-center">		
							<a href="<?php echo $siteAddress . '/mein-konto' ?>">Mon compte</a> | 
							<a href="<?php echo $siteAddress . '/donner' ?>">Soutenez-moi</a> 
							
						</div>
						<div class="vnj-center">
							<a href="<?php echo $siteAddress . '/politique-modele-de-confidentialite' ?>">Politique modèle de confidentialité </a> 
							(<a href="<?php echo $siteAddress . '/datenschutzerklaerung' ?>">Datenschutzerklärung</a>)
						</div>
						<div class="vnj-center">	
							<a href="<?php echo $siteAddress . '/agb' ?>">AGB</a> |					
							<a href="<?php echo $siteAddress . '/impressum' ?>">Impressum</a> 
						</div>
						<div class="vnj-center">	
							<a class="gaoo-opt-out google-analytics-opt-out" href="javascript:gaoop_analytics_optout();">Cliquez ici pour optout google analytics</a>
						</div>
						
					</div>  
                </div>
            </div>
        </div>    
    </div>
</footer>





<!--End of Footer Area-->