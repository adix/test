<!DOCTYPE html>
<html>
    <head>
        <!--This is a comment. Comments are not displayed in the browser-->
        <title>    
            <?php
            wp_title('|', true, 'right');   //seperator, echo - yes,  title to the right of the seperator  
            bloginfo('name');   // grab name of the website
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skeleton.css">
        <?php wp_head(); ?>  <!-- checks if theme supports hook and bring in a lot of information -->
    </head>


    <body>
        <div class="container">
            <header>    <!-- HTML5 tag for any header -->
                <div class="five columns clearfix"> 
                    <a href="<?php echo get_option('home'); ?>"><img src ="<?php bloginfo('template_url'); ?>/img/logo.png" title="bloginfo('title')"></a>
                </div>
            </header>
            <div class="sixteen columns nav-bar"> <!-- how does this work -->
                <?php wp_nav_menu( array( 'container-class' => 'main-nav', 'container' => 'nav') ); ?>   
            </div>               
        </div>        
    </body>
</html>
