<?php
/*
Template Name: Homepage
*/
?>

<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="shortcut icon" src="images/Path%20Ear.png">
        <link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>

        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>           
        <![endif]-->

        <!-- html5.js -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->    
        
        <!-- respond.js -->
        <!--[if lt IE 9]>
                  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->    
    </head>
    
    <body <?php body_class(); ?> home>
                
        <header role="banner">
                
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container header-border">
          
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" 
                            href="<?php echo home_url(); ?>">
                            <img src='<?php print IMAGES.'/lg_logo.png' ?>' alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>

                    <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                        <?php include 'social-icons.php'; ?>
                    </form>

                </div> 

                <div class="container nav-container">

                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <?php wp_bootstrap_main_nav(); ?>

                    </div>
                </div> 

            </div> 
        
        </header> 
        
    <div class="container">


    <div class="top-row">

    	<div class="clearfix row">

    		<div style="font-family: 'Patrick Hand SC', cursive;" class="col-md-12 jumbo-header">
    			<h1>Supporting people in housing need</h1>
    		</div>

    	</div>

    	<div class="clearfix row jumbo-message">

    		<div class="col-md-6">
	            <p>PATH is an independent charity, supporting people who are vulnerable to homelessness in Plymouth and Teignbridge.</p>
	            <p><a style="background-color:#8B3F9B;" class="btn btn-primary btn-lg" href="http://purelywebdesign.co.uk/sandbox/path/?page_id=56" role="button">More about Path &raquo;</a></p>
    		</div>

    		<div class="col-md-6">
    			<?php $homepageImage = get_option('path_homepage_image'); ?>

				<img class="img_middle" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">

    		</div>

    	</div>

        <div class="clearfix row">

            <div class="col-md-3 col-sm-6 col-xs-6">
                <h2 style="font-family: 'Patrick Hand SC', cursive;">Clients</h2>
                <?php $homepageImage = get_option('path_clients_image'); ?>
                <div class="imageWrap">
    				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                </div>
                <button class="btn btn-default" href="#" role="button">Help with housing &raquo;</button>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6">
                <h2 style="font-family: 'Patrick Hand SC', cursive;">Agencies</h2>
                <?php $homepageImage = get_option('path_agencies_image'); ?>
                <div class="imageWrap">
    				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                </div>
                <button class="btn btn-default" href="#" role="button">Agencies / Referers &raquo;</button>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6">
                <h2 style="font-family: 'Patrick Hand SC', cursive;">Landlords</h2>
                <?php $homepageImage = get_option('path_landlords_image'); ?>
                <div class="imageWrap">
    				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                </div>
                <button class="btn btn-default" href="#" role="button">Landlords / Agents &raquo;</button>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6">
                <h2 style="font-family: 'Patrick Hand SC', cursive;">Support Us</h2>
                <?php $homepageImage = get_option('path_volunteers_image'); ?>
                <div class="imageWrap">
    				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                </div>
                <button class="btn btn-default" href="#" role="button">Donate &raquo;</button>
                <button class="btn btn-default" href="#" role="button">Get Involved &raquo;</button>
            </div>

        </div>

        <div class="clearfix row">

            <div class="col-md-8">
                <h2 style="font-family: 'Patrick Hand SC', cursive;">Path News</h2>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        
                        <header>
                        
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
                            
                            <div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" style="color:#8B3F9B;" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
                            
                            <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?></p>
                        
                        </header>
                    
                        <section class="post_content clearfix">
                            <?php the_excerpt( __("Read more &raquo;","wpbootstrap") ); ?>
                        </section>
                    
                    </article>
                    
                <?php endwhile; 
                      endif; ?> 

            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="font-family: 'Patrick Hand SC', cursive;">Path Twitter Feed</h2>
                        <a class="twitter-timeline" href="https://twitter.com/PathDevon" data-widget-id="586131227045924864">Tweets by @PathDevon</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>

                    <div class="col-md-12">
                        <h2 style="font-family: 'Patrick Hand SC', cursive;">Housing Feed</h2>
                        <a class="twitter-timeline" href="https://twitter.com/GuardianHousing" data-widget-id="586119675030990848">Tweets by @GuardianHousing</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </div>
                </div>
            </div>

        </div>

    </div>
<?php get_footer(); ?>
