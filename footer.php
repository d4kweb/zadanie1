<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <footer id="vist-footer">

        <div class="container">
        
            <div class="row">
            
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 float-left footer-col">
                
                    <img src="<?php 
                              if(get_theme_mod('footer-custom-logo-img')){
                                  echo wp_get_attachment_url(get_theme_mod('footer-custom-logo-img'));
                              }
                              else{
                                  echo get_template_directory_uri('').'/inc/assets/img/logo.png';
                              }
                              ?>" class="footer-logo"/>
                    
                    <div class="footer-phone-label">
                    
                        <img class="float-left" src="<?php echo get_template_directory_uri('').'/inc/assets/img/phone.png';?>">
                        <div class="text float-left">
                            <div class="title">ZADZWOŃ</div>
                            <div class="number"><?php if(get_theme_mod( 'footer-phone-label-number' )){
                        echo esc_attr( get_theme_mod( 'footer-phone-label-number' ) );
                    }else{
                        echo '693 097 703';
                    }?></div>
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12  float-left footer-col">
                    
                    <?php if ( is_active_sidebar( 'footer-1' ) ){
                         dynamic_sidebar( 'footer-1' );}
                    else{
                        echo '<p>This footer 1 is ready to edit</p>';}?>
    
                
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12  float-left footer-col">
                    
                   <?php if ( is_active_sidebar( 'footer-2' ) ){
                         dynamic_sidebar( 'footer-2' );}
                    else{
                        echo '<p>This footer 2 is ready to edit</p>';}?>
                
                </div>
                
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12  float-left footer-col">
                    
                   <?php if ( is_active_sidebar( 'footer-3' ) ){
                         dynamic_sidebar( 'footer-3' );}
                    else{
                        echo '<p>This footer 3 is ready to edit</p>';}?>
                
                </div>
                
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12  float-left footer-col">
                    
                   <?php if ( is_active_sidebar( 'footer-4' ) ){
                         dynamic_sidebar( 'footer-4' );}
                    else{
                        echo '<p>This footer 4 is ready to edit</p>';}?>
                
                </div>
                
            </div>
            
        </div>
        
    </footer>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info center">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                ZADANIE REKRUTACYJNE</a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>