	<div style="background-size: 100% 100%; background-repeat: no-repeat; background-image:url('<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/fundo.jpg');">
	<?php 
	if('page' == get_option('show_on_front')){ 
		get_template_part('index');
	}else {
		
		
		get_header();
		
		
		?>
		<!--style="padding-left:30px;padding-right:30px;" -->

		<div class="row" style="padding-left:30px;padding-right:30px; padding-bottom:30px;"></br>
			<div class="col-md-6">
			
				<?php
					get_template_part('index', 'slider');
				?>
			</div>
			<div class="col-md-6">
				<?php
				?></br>
				<div style="background-color:#000;padding:26px; background-color: #ffffff;opacity: 0.8;filter: alpha(opacity=60);border-radius:5px;">
				<img class="img-responsive" src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/logo.png">
				</div>
			
			</div>
		</div>
		<?php  ?>
		
	</div>
		
		<?php
		get_sidebar('orange');
		
		//****** get index service  ********				
		get_template_part('index', 'service');		

		//****** get Home call out
		get_template_part('index','home-callout'); 	

		//****** Orange Sidebar Area ********
		

		//****** get contatos  ***************
		get_template_part('index','contato-send');

		//****** get index News  ********
		get_template_part('index', 'news');
				
		get_footer();	
	}
?>