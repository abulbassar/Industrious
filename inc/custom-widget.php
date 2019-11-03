<?php

class wp_custom_social extends WP_Widget{
	
	function __construct(){
		parent::__construct(
			'wp_custom_social',
			__('Social Widget'),
			array(
				'description'=> __('This is social wodget','industries'),
			)
		);
	}
	
	public function widget($args,$instance){
		
		?>
			<h4><?php echo esc_attr($instance['title']);?></h4>
			<ul class="plain">
			
				<?php if($instance['tw_link']):?>
					<li><a href="<?php echo esc_attr($instance['tw_link']);?>"><i class="icon fa-twitter">&nbsp;</i><?php echo esc_html('Twitter','industries')?></a></li>
				<?php endif;?>
				
				<?php if($instance['fb_link']):?>
					<li><a href="<?php echo esc_attr($instance['fb_link']);?>"><i class="icon fa-facebook">&nbsp;</i><?php echo esc_html('Facebook','industries')?></a></li>
				<?php endif;?>
				<?php if($instance['inst_link']):?>
					<li><a href="<?php echo esc_attr($instance['inst_link']);?>"><i class="icon fa-instagram">&nbsp;</i><?php echo esc_html('Instagram','industries')?></a></li>
				<?php endif;?>
				
				<?php if($instance['git_link']):?>
					<li><a href="<?php echo esc_attr($instance['git_link']);?>"><i class="icon fa-github">&nbsp;</i><?php echo esc_html('Github','industries')?></a></li>
				<?php endif;?>
			</ul>
		
		<?php
		
	}
	
	public function form($instance){
	$title= !empty($instance['title']) ? $instance['title']:'';
	$tw_link = !empty($instance['tw_link']) ? $instance['tw_link']:'';
	$fb_link = !empty($instance['fb_link']) ? $instance['fb_link']:'';
	$inst_link = !empty($instance['inst_link']) ? $instance['inst_link']:'';
	$git_link = !empty($instance['git_link']) ? $instance['git_link']:'';
		
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php echo esc_attr_e('Social Link Title','industrious');?></label>
		
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" value="<?php echo esc_attr($title);?>" />
		</p>
		
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tw_link'));?>"><?php echo esc_attr_e('Twitter Link','industrious');?></label>
		
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('tw_link'));?>" name="<?php echo esc_attr($this->get_field_name('tw_link'));?>" value="<?php echo esc_attr($tw_link);?>"/>
		</p>
		
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('fb_link'));?>"><?php echo esc_attr_e('Facebook Link','industrious');?></label>	
		
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('fb_link'));?>" name="<?php echo esc_attr($this->get_field_name('fb_link'));?>" value="<?php echo esc_attr($fb_link);?>"/>
		</p>
		
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('inst_link'));?>"><?php echo esc_attr_e('Instagram Link','industrious');?></label>
		
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('inst_link'));?>" name="<?php echo esc_attr($this->get_field_name('inst_link'));?>" value="<?php echo esc_attr($inst_link);?>"/>
		</p>
		
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('git_link'));?>"><?php echo esc_attr_e('Github Link','industrious');?></label>
		
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('git_link'));?>" name="<?php echo esc_attr($this->get_field_name('git_link'));?>" value="<?php echo esc_attr($git_link);?>"/>
		</p>
		
		<?php
	}
	public function update($new_instance, $old_instance ){
		$instance = array();
		$instance['title']= (!empty($new_instance['title']))? strip_tags($new_instance['title']):'';
		$instance['tw_link']= (!empty($new_instance['tw_link'])) ? strip_tags($new_instance['tw_link']):'';
		$instance['fb_link']= (!empty($new_instance['fb_link'])) ? strip_tags($new_instance['fb_link']):'';
		$instance['inst_link']= (!empty($new_instance['inst_link'])) ? strip_tags($new_instance['inst_link']):'';
		$instance['git_link']= (!empty($new_instance['git_link'])) ? strip_tags($new_instance['git_link']):'';
		
		return $instance;
		
	}
	
}


function wp_load_widget(){
	register_widget('wp_custom_social');
}

add_action('widgets_init','wp_load_widget');

?>