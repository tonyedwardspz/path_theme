<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

    <div class="container top-row">

    	<div class="clearfix row">

    		<div class="col-md-12">
    			<h1>Supporting people in housing need</h1>
    		</div>

    	</div>



    	<div class="clearfix row jumbo-message">

    		<div class="col-md-6">
	            <p>PATH is an independent charity, supporting people who are vulnerable to homelessness in Plymouth and Teignbridge.</p>
	            <p><a class="btn btn-primary btn-lg" href="#" role="button">More about Path &raquo;</a></p>
    		</div>

    		<div class="col-md-6">
    			<?php $homepageImage = get_option('path_homepage_image'); ?>

				<img class="img_middle" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">

    		</div>

    	</div>



        <!-- Example row of columns -->
        <div class="clearfix row">
            <div class="col-md-3">
                <h2>Clients</h2>
                <?php $homepageImage = get_option('path_clients_image'); ?>

				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                <button class="btn btn-default" href="#" role="button">Help with housing &raquo;</button>
            </div>
            <div class="col-md-3">
                <h2>Agencies</h2>
                <?php $homepageImage = get_option('path_agencies_image'); ?>

				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                <button class="btn btn-default" href="#" role="button">Agencies / Refferers &raquo;</button>
            </div>
            <div class="col-md-3">
                <h2>Landlords</h2>
                <?php $homepageImage = get_option('path_landlords_image'); ?>

				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                <button class="btn btn-default" href="#" role="button">Landloards / Agents &raquo;</button>
            </div>
            <div class="col-md-3">
                <h2>Volunteers</h2>
                <?php $homepageImage = get_option('path_volunteers_image'); ?>

				<img class="homepageCategoryImage" src='<?php print $homepageImage; ?>' alt="<?php bloginfo('name'); ?>">
                <button class="btn btn-default" href="#" role="button">Donate &raquo;</button>

                <button class="btn btn-default" href="#" role="button">Get Involved &raquo;</button>
            </div>
        </div>
        
    </div> <!-- /container -->

<?php get_footer(); ?>