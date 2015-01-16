<div class="FAageSocialIcons">
<?php

$twitter = get_option('path_twitter');
$easyFundraising = get_option('path_easy_fundraising');
?>
	
	<ul>
		<li id="contrast" class="social">
			<a href="#" title="Change Contrast" id="contrastLink">A</a>
		</li>

		<?php wp_fontsize::html(); ?>

		<?php if($twitter): ?>
	    <li class="twitter social">
	        <a href="<?php print $twitter; ?>" title="Find PATH on Twitter" target="_blank">
	            <i class="social_icon fa fa-twitter"></i></a>
	    </li>
	    <?php 
	    endif;
	    if($easyFundraising): ?>
	    <li class="easyFundraising social">
	    	<a href="<?php print $easyFundraising; ?>" title="Easy Fundraising" target="_blank">
	    	ef</a>
	    </li>
	    <?php endif; ?>
	</ul>

</div>