<?php get_header(); ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php 
                              if(get_theme_mod('hs_slider1_image')){
                                  echo wp_get_attachment_url(get_theme_mod('hs_slider1_image'));
                              }
                              else{
                                  echo get_template_directory_uri('/inc/assets/img/slider.png');
                              }
                              ?>" alt="slider1_image">
                    <div class="carousel-caption">
                        <h1>  <?php if(get_theme_mod( 'hs_slider1_headline' )){
                        echo esc_attr( get_theme_mod( 'hs_slider1_headline' ) );
                    }else{
                        echo 'Default Headline!';
                    }?></h1>
                        <p><?php if(get_theme_mod( 'hs_slider1_description' )){
                        echo esc_attr( get_theme_mod( 'hs_slider1_description' ) );
                    }else{
                        echo 'Default Description!';
                    }?></p>
                    <a href="<?php if(get_theme_mod( 'hs_slider1_btn_link' )){
                        echo esc_attr( get_theme_mod( 'hs_slider1_btn_link' ) );
                    }else{
                        echo '#';
                    }?>"><?php if(get_theme_mod( 'hs_slider1_btn_des' )){
                        echo esc_attr( get_theme_mod( 'hs_slider1_btn_des' ) );
                    }else{
                        echo 'Default button!';
                    }?></a>
                    </div>
                    
                </div>
                
                <div class="carousel-item">
                    <img src="<?php 
                              if(get_theme_mod('hs_slider2_image')){
                                  echo wp_get_attachment_url(get_theme_mod('hs_slider2_image'));
                              }
                              else{
                                  echo get_template_directory_uri('').'/inc/assets/img/slider.png';
                              }
                              ?>" alt="slider2_image">
                    <div class="carousel-caption">
                        <h1>  <?php if(get_theme_mod( 'hs_slider2_headline' )){
                        echo esc_attr( get_theme_mod( 'hs_slider2_headline' ) );
                    }else{
                        echo 'Default Headline!';
                    }?></h1>
                        <p><?php if(get_theme_mod( 'hs_slider2_description' )){
                        echo esc_attr( get_theme_mod( 'hs_slider2_description' ) );
                    }else{
                        echo 'Default Description!';
                    }?></p>
                        <a href="<?php if(get_theme_mod( 'hs_slider2_btn_link' )){
                        echo esc_attr( get_theme_mod( 'hs_slider2_btn_link' ) );
                    }else{
                        echo '#';
                    }?>"><?php if(get_theme_mod( 'hs_slider2_btn_des' )){
                        echo esc_attr( get_theme_mod( 'hs_slider2_btn_des' ) );
                    }else{
                        echo 'Default button!';
                    }?></a>
                    </div>
                    
                </div>
                
                <div class="carousel-item">
                    <img src="<?php 
                              if(get_theme_mod('hs_slider3_image')){
                                  echo wp_get_attachment_url(get_theme_mod('hs_slider3_image'));
                              }
                              else{
                                  echo get_template_directory_uri('').'/inc/assets/img/slider.png';
                              }
                              ?>" alt="slider3_image">
                    <div class="carousel-caption">
                        <h1>  <?php if(get_theme_mod( 'hs_slider3_headline' )){
                        echo esc_attr( get_theme_mod( 'hs_slider3_headline' ) );
                    }else{
                        echo 'Default Headline!';
                    }?></h1>
                        <p><?php if(get_theme_mod( 'hs_slider3_description' )){
                        echo esc_attr( get_theme_mod( 'hs_slider3_description' ) );
                    }else{
                        echo 'Default Description!';
                    }?></p>
                        <a href="<?php if(get_theme_mod( 'hs_slider3_btn_link' )){
                        echo esc_attr( get_theme_mod( 'hs_slider3_btn_link' ) );
                    }else{
                        echo '#';
                    }?>"><?php if(get_theme_mod( 'hs_slider3_btn_des' )){
                        echo esc_attr( get_theme_mod( 'hs_slider3_btn_des' ) );
                    }else{
                        echo 'Default button!';
                    }?></a>
                    </div>
                    
                </div>
                
                <div class="carousel-item">
                    <img src="<?php 
                              if(get_theme_mod('hs_slider4_image')){
                                  echo wp_get_attachment_url(get_theme_mod('hs_slider4_image'));
                              }
                              else{
                                  echo get_template_directory_uri('').'/inc/assets/img/slider.png';
                              }
                              ?>" alt="slider4_image">
                    <div class="carousel-caption">
                        <h1>  <?php if(get_theme_mod( 'hs_slider4_headline' )){
                        echo esc_attr( get_theme_mod( 'hs_slider4_headline' ) );
                    }else{
                        echo 'Default Headline!';
                    }?></h1>
                        <p><?php if(get_theme_mod( 'hs_slider4_description' )){
                        echo esc_attr( get_theme_mod( 'hs_slider4_description' ) );
                    }else{
                        echo 'Default Description!';
                    }?></p>
                        <a href="<?php if(get_theme_mod( 'hs_slider4_btn_link' )){
                        echo esc_attr( get_theme_mod( 'hs_slider4_btn_link' ) );
                    }else{
                        echo '#';
                    }?>"><?php if(get_theme_mod( 'hs_slider4_btn_des' )){
                        echo esc_attr( get_theme_mod( 'hs_slider4_btn_des' ) );
                    }else{
                        echo 'Default button!';
                    }?></a>
                    </div>
                    
                </div>
                
                <ul class="social-links">
                    <li><a href="<?php if(get_theme_mod( 'social-link-instagram' )){
                        echo esc_attr( get_theme_mod( 'social-link-instagram' ) );
                    }else{
                        echo '#';
                    }?>"> <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/instagram.png';?>"></a></li>
                
                    <li><a href="<?php if(get_theme_mod( 'social-link-twitter' )){
                        echo esc_attr( get_theme_mod( 'social-link-twitter' ) );
                    }else{
                        echo '#';
                    }?>"> <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/twitter.png';?>"></a></li>
                    
                    <li><a href="<?php if(get_theme_mod( 'social-link-facebook' )){
                        echo esc_attr( get_theme_mod( 'social-link-facebook' ) );
                    }else{
                        echo '#';
                    }?>"> <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/facebook.png';?>"></a></li>                    
                    
                    <li><a href="<?php if(get_theme_mod( 'social-link-custom' )){
                        echo esc_attr( get_theme_mod( 'social-link-custom' ) );
                    }else{
                        echo '#';
                    }?>"> <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/custom.png';?>"></a></li>                    
                    
                </ul>
                
                <a href="#about-us" class="triangle-scroll-down">></a>
                
            </div>
</div>
<div class="about-us" id="about-us">

    <div class="row">
    
        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12">
        
                <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/about-us.png';?>"/>
            
        </div>
        
        <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12">
        
                <div class="about-us-text">
            
                    <h1><?php if(get_theme_mod( 'about-us-title' )){
                        echo esc_attr( get_theme_mod( 'about-us-title' ) );
                    }else{
                        echo 'O nas';
                    }?></h1>
                    <p class="col-8"><?php echo get_theme_mod('about-us-des');?></p>
                </div>
            
        </div>
        
    </div>
    
</div>
<div class="offer">

    <div class="container">
    
        <h1>OFERTA</h1>
        
        <div id="offermultiitemslider">
        
            <div class="slider-items">
            
                <div class="item float-left active">
                
                    <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/icon1.svg'?>"/>
                    <h2>Lorem ipsum</h2>
                    
                </div>

                <div class="item float-left active">
                
                    <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/icon2.svg'?>"/>
                    <h2>Lorem ipsum</h2>
                    
                </div>
                
                <div class="item float-left active">
                
                    <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/icon3.svg'?>"/>
                    <h2>Lorem ipsum</h2>
                    
                </div>
                
                <div class="item float-left active">
                
                    <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/icon4.svg'?>"/>
                    <h2>Lorem ipsum</h2>
                    
                </div>
                
                <div class="item float-left active">
                
                    <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/icon5.svg'?>"/>
                    <h2>Lorem ipsum</h2>
                    
                </div>
                
                <div style="clear:both"></div>
                
            </div>
            
        </div>
        
    </div>
</div>
<div class="after_offer">

    <img src="<?php echo get_template_directory_uri('').'/inc/assets/img/after_offer.png';?>"/>
    
</div>
<div class="news">


    <div class="row">
    
        <div class="container">
        
            <h1>AKTUALNOŚCI</h1>
            
            <?php $news = new Wp_Query('type=post&posts_per_page=4');
            
            if( $news->have_posts() ):
                while($news->have_posts()) : $news->the_post();
            ?>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 float-left">
            
                <div class="card">
                    <?php the_post_thumbnail(array('class' => 'card-img-top'));?>
                    <div class="card-body">
                        <p class="card-text"><?php echo mb_strimwidth( get_the_content(), 0, 70, '..' ); ?>.</p>
                        <a href="<?php the_permalink();?>" class="btn">Lorem</a>
                    </div>
                </div>
                <div class="triangle"></div>
                <div style="clear:both"></div>
            </div>
            
            <?php
            
            
                endwhile;
                endif;
                wp_reset_postdata();
            
            ?>
            
            <a href="<?php echo get_permalink('all');?>" class="btn more-link">Pokaż więcej</a>
            
        </div>
        
    </div>
    
    
</div>

<?php get_footer();?>