			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row">
		            <?php echo do_shortcode('[google-translator]'); ?>
		          </div>
					
					<p class="pull-right">Developed by Team W.A.D</p>
			
					<p class="attribution">&copy; P.A.T.H <?php 
					$path_footer_text = get_option('path_footer_text');
					if($path_footer_text){ 
						print $path_footer_text;
					} 
					?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>