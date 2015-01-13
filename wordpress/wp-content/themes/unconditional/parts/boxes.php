<?php $service1_icon  = esc_html(get_theme_mod( 'unconditional_service1_icon' )); ?>
<?php $service2_icon  = esc_html(get_theme_mod( 'unconditional_service2_icon' )); ?>
<?php $service3_icon  = esc_html(get_theme_mod( 'unconditional_service3_icon' )); ?>
<?php $service1_url   = esc_url(get_theme_mod( 'unconditional_service1_url' )); ?>
<?php $service2_url   = esc_url(get_theme_mod( 'unconditional_service2_url' )); ?>
<?php $service3_url   = esc_url(get_theme_mod( 'unconditional_service3_url' )); ?>
<?php $service1_title = esc_html(get_theme_mod( 'unconditional_service1_title' )); ?>
<?php $service2_title = esc_html(get_theme_mod( 'unconditional_service2_title' )); ?>
<?php $service3_title = esc_html(get_theme_mod( 'unconditional_service3_title' )); ?>
<?php $service1_text  = esc_html(get_theme_mod( 'unconditional_service1_text' )); ?>
<?php $service2_text  = esc_html(get_theme_mod( 'unconditional_service2_text' )); ?>
<?php $service3_text  = esc_html(get_theme_mod( 'unconditional_service3_text' )); ?>

<div class="container">
	<div class="row">
        <!-- Service Boxes -->
    	<div class="col-sm-4 col-sm-6 col-xs-12">
			<div class="box">							
				<div class="icon">
					<?php if (get_theme_mod( 'unconditional_service1_icon' )) { ?>
					<div class="image"><i class="fa fa-<?php echo $service1_icon ?>"></i></div>
					<?php } else { ?>
					<div class="image"><i class="fa fa-thumbs-o-up"></i></div>
					<?php } ?>
					<div class="info">
						<?php if (get_theme_mod( 'unconditional_service1_title' )) { ?>
						<h3 class="title"><?php echo $service1_title ?></h3>
						<?php } else { ?>
						<h3 class="title"><?php printf( __( 'Made with Bootstrap', 'unconditional' ) ); ?></h3>
						<?php } ?>
						
						<?php if (get_theme_mod( 'unconditional_service1_text' )) { ?>
						<p><?php echo $service1_text ?></p>
						<?php } else { ?>
						<p>
							<?php printf( __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.', 'unconditional' ) ); ?>
						</p>
						<?php } ?>
						<div class="more">
							<?php if (get_theme_mod( 'unconditional_service1_url' )) { ?>
							<a href="<?php echo $service1_url ?>" title="<?php echo $service1_title ?>">
								<?php printf( __( 'Read More', 'unconditional' ) ); ?> <i class="fa fa-angle-double-right"></i>
							</a>
							<?php } else { ?>
							<a href="#" title="Service Title Link">
								<?php printf( __( 'Read More', 'unconditional' ) ); ?> <i class="fa fa-angle-double-right"></i>
							</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-sm-4 col-sm-6 col-xs-12">
			<div class="box">							
				<div class="icon">
					<?php if (get_theme_mod( 'unconditional_service2_icon' )) { ?>
					<div class="image"><i class="fa fa-<?php echo $service2_icon ?>"></i></div>
					<?php } else { ?>
					<div class="image"><i class="fa fa-flag"></i></div>
					<?php } ?>
					
					<div class="info">
						<?php if (get_theme_mod( 'unconditional_service2_title' )) { ?>
						<h3 class="title"><?php echo $service2_title ?></h3>
						<?php } else { ?>
						<h3 class="title"><?php printf( __( 'Icons by Font Awesome', 'unconditional' ) ); ?></h3>
						<?php } ?>
						
    					<?php if (get_theme_mod( 'unconditional_service2_text' )) { ?>
						<p><?php echo $service2_text ?></p>
						<?php } else { ?>
						<p>
							<?php printf( __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.', 'unconditional' ) ); ?>
						</p>
						<?php } ?>
						<div class="more">
							<?php if (get_theme_mod( 'unconditional_service2_url' )) { ?>
							<a href="<?php echo $service2_url ?>" title="<?php echo $service2_title ?>">
								<?php printf( __( 'Read More', 'unconditional' ) ); ?> <i class="fa fa-angle-double-right"></i>
							</a>
							<?php } else { ?>
							<a href="#" title="Service Title Link">
								<?php printf( __( 'Read More', 'unconditional' ) ); ?> <i class="fa fa-angle-double-right"></i>
							</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-sm-4 col-sm-6 col-xs-12">
			<div class="box">							
				<div class="icon">
					<?php if (get_theme_mod( 'unconditional_service3_icon' )) { ?>
					<div class="image"><i class="fa fa-<?php echo $service3_icon ?>"></i></div>
					<?php } else { ?>
					<div class="image"><i class="fa fa-desktop"></i></div>
					<?php } ?>
					
					<div class="info">
						<?php if (get_theme_mod( 'unconditional_service3_title' )) { ?>
						<h3 class="title"><?php echo $service3_title ?></h3>
						<?php } else { ?>
						<h3 class="title"><?php printf( __( 'Mobile First & Desktop Friendly', 'unconditional' ) ); ?></h3>
						<?php } ?>
						
    					<?php if (get_theme_mod( 'unconditional_service3_text' )) { ?>
						<p><?php echo $service3_text ?></p>
						<?php } else { ?>
						<p>
							<?php printf( __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.', 'unconditional' ) ); ?>
						</p>
						<?php } ?>
						<div class="more">
							<?php if (get_theme_mod( 'unconditional_service3_url' )) { ?>							
							<a href="<?php echo $service3_url ?>" title="<?php echo $service3_title ?>">
								<?php printf( __( 'Read More', 'unconditional' ) ); ?> <i class="fa fa-angle-double-right"></i>
							</a>
							<?php } else { ?>
							<a href="#" title="Service Title Link">
								<?php printf( __( 'Read More', 'unconditional' ) ); ?> <i class="fa fa-angle-double-right"></i>
							</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Service Boxes -->
	</div>
</div>	