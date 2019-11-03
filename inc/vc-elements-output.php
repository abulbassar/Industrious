<?php
// for Industries Theme
?>


<?php

function sec_one_iconbox($sec_one_iconbox){
	$atts=shortcode_atts(
		array(
			'sec_one_heading'=>'',
			'sec_one_head_desc'=>'',
			'sec_one_group'	=> '',
		'sec_one_icon'	=>'',
		'sec_one_box_head' 	=>'',
		'sec_one_box_desc'	=>'',
		),$sec_one_iconbox
	);
	ob_start();
	
?>

		<section class="wrapper">
			<div class="inner">
				<header class="special">
					<h2><?php echo esc_attr($atts['sec_one_heading']);?></h2>
					<p><?php echo esc_attr($atts['sec_one_head_desc']);?></p>
				</header>
				<div class="highlights">
				<?php 
				$sec_one_group_keys = vc_param_group_parse_atts($atts['sec_one_group']);
				// echo '<pre>';
				// print_r($sec_one_group_keys);
				// echo '</pre>';
				if(is_array($sec_one_group_keys)):
				foreach($sec_one_group_keys as $sec_one_group_key){
					?>
					<section>
						<div class="content">
							<header>
								<a href="#" class="icon <?php echo esc_attr($sec_one_group_key['sec_one_icon']);?>"><span class="label">Icon</span></a>
								<h3><?php echo esc_attr($sec_one_group_key['sec_one_box_head']);?></h3>
							</header>
							<p><?php echo esc_attr($sec_one_group_key['sec_one_box_desc']);?></p>
						</div>
					</section>
					
					<?php
				}
				endif;
				
				?>
				
				</div>
			</div>
		</section>
		
	

<?php 
return ob_get_clean();
}
add_shortcode('sec_one','sec_one_iconbox');

// heading
function industries_head($industries_head){
	$atts=shortcode_atts(
		array(
		'industries_head'	=>'',
		'industries_head_desc' 	=>'',
		),$industries_head
	);
	ob_start();
	
?>

		<div class="inner">
			<h2><?php echo esc_attr($atts['industries_head']);?></h2>
			<p><?php echo esc_attr($atts['industries_head_desc']);?></p>
		</div>
		
<?php 
return ob_get_clean();
}
add_shortcode('industries_heading','industries_head');

// team
function industries_testimonial_info($industries_testimonial_info){
	$atts=shortcode_atts(
		array(
		'industries_testi_head'	=> '',
		'industries_testi_head_desc'	=> '',
		'industries_testi_qty'	=>'',
		),$industries_testimonial_info
	);
	ob_start();
	
?>
<?php 
	$args = array(
		'post_type'	=> 'team',
		'posts_per_page'	=>$atts['industries_testi_qty'],
	);
	$testi_query = new WP_Query($args);
?>
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo esc_attr($atts['industries_testi_head']);?></h2>
						<p><?php echo esc_attr($atts['industries_testi_head_desc']);?></p>
					</header>
					<div class="testimonials">
					<?php while($testi_query->have_posts()):
						$testi_query->the_post();
					?>
						<section>
							<div class="content">
								<blockquote>
									<p><?php the_content();?></p>
								</blockquote>
								<div class="author">
									<div class="image">
										<?php the_post_thumbnail( array(50,50) );?>
									</div>
									<p class="credit">- <strong><?php the_title();?></strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<?php endwhile;?>
					</div>
				</div>
			</section>
		
<?php 
return ob_get_clean();
}
add_shortcode('industries_testimonial','industries_testimonial_info');



?>



