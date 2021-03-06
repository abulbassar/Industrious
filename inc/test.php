<?php
/* This is footer widget /

/**
* Adds simple_widget widget.
*/
class social_widget extends WP_Widget{

/**
* Register widget with WordPress.
*/
function __construct(){
parent::__construct(
'social', // Base ID
esc_html__('Social Widget', 'industrious'), // Name
array('description' => esc_html__('This is social widget', 'industrious'),) // Args
);
}

/**
* Front-end display of widget.
*
* @see WP_Widget::widget()
*
* @param array $args Widget arguments.
* @param array $instance Saved values from database.
*/
public function widget($args, $instance){
echo $args['before_widget'];
if (!empty($instance['titlee'])) {
//echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
} ?>
<section>
<h4><?php echo $instance['titlee']; ?></h4>
<ul class="plain">
<li><a href="#"><i class="icon <?php echo $instance['f_icon_class']; ?>">&nbsp;</i><?php echo $instance['f_icon_name']; ?></a></li>
<li><a href="#"><i class="icon <?php echo $instance['s_icon_class']; ?>">&nbsp;</i><?php echo $instance['s_icon_name']; ?></a></li>
<li><a href="#"><i class="icon <?php echo $instance['t_icon_class']; ?>">&nbsp;</i><?php echo $instance['t_icon_name']; ?></a></li>
</ul>
</section> 
<?php
}

/**
* Back-end widget form.
*
* @see WP_Widget::form()
*
* @param array $instance Previously saved values from database.
*/
public function form($instance){
$titlee = !empty($instance['titlee']) ? $instance['titlee'] : esc_html__('Title Name', 'industrious');
$f_icon_name = !empty($instance['f_icon_name']) ? $instance['f_icon_name'] : esc_html__('First Icon Name', 'industrious');
$f_icon_class = !empty($instance['f_icon_class']) ? $instance['f_icon_class'] : esc_html__('First Icon Class', 'industrious');
$s_icon_name = !empty($instance['s_icon_name']) ? $instance['s_icon_name'] : esc_html__('Second Icon Name', 'industrious');
$s_icon_class = !empty($instance['s_icon_class']) ? $instance['s_icon_class'] : esc_html__('Second Icon Class', 'industrious');
$t_icon_name = !empty($instance['t_icon_name']) ? $instance['t_icon_name'] : esc_html__('Third Icon Name', 'industrious');
$t_icon_class = !empty($instance['t_icon_class']) ? $instance['t_icon_class'] : esc_html__('Third Icon Class', 'industrious');
?>
<p>
<label for="<?php echo esc_attr($this->get_field_id('titlee')); ?>"><?php esc_attr_e('Title:', 'industrious'); ?></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('titlee')); ?>" name="<?php echo esc_attr($this->get_field_name('titlee')); ?>" type="text" value="<?php echo esc_attr($titlee); ?>">
</p>

<p>
<label for="<?php echo esc_attr($this->get_field_id('f_icon_name')); ?>"><?php esc_attr_e('First Icon Name:', 'industrious'); ?></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('f_icon_name')); ?>" name="<?php echo esc_attr($this->get_field_name('f_icon_name')); ?>" type="text" value="<?php echo esc_attr($f_icon_name); ?>">
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id('f_icon_class')); ?>"><?php esc_attr_e('First Icon Class:', 'industrious'); ?></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('f_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('f_icon_class')); ?>" type="text" value="<?php echo esc_attr($f_icon_class); ?>">
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id('s_icon_name')); ?>"><?php esc_attr_e('Second Icon Name:', 'industrious'); ?></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('s_icon_name')); ?>" name="<?php echo esc_attr($this->get_field_name('s_icon_name')); ?>" type="text" value="<?php echo esc_attr($s_icon_name); ?>">
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id('s_icon_class')); ?>"><?php esc_attr_e('Second Icon Class:', 'industrious'); ?></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('s_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('s_icon_class')); ?>" type="text" value="<?php echo esc_attr($s_icon_class); ?>">
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id('t_icon_name')); ?>"><?php esc_attr_e('Third Icon Name:', 'industrious'); ?></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('t_icon_name')); ?>" name="<?php echo esc_attr($this->get_field_name('t_icon_name')); ?>" type="text" value="<?php echo esc_attr($t_icon_name); ?>">
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id('t_icon_class')); ?>"><?php esc_attr_e('Third Icon Class:', 'industrious'); ?></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('t_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('t_icon_class')); ?>" type="text" value="<?php echo esc_attr($t_icon_class); ?>">
</p>
<?php
}
/**
* Sanitize widget form values as they are saved.
*
* @see WP_Widget::update()
*
* @param array $new_instance Values just sent to be saved.
* @param array $old_instance Previously saved values from database.
*
* @return array Updated safe values to be saved.
*/
public function update($new_instance, $old_instance){
$instance = array();
$instance['titlee'] = (!empty($new_instance['titlee'])) ? strip_tags($new_instance['titlee']) : '';
$instance['f_icon_name'] = (!empty($new_instance['f_icon_name'])) ? strip_tags($new_instance['f_icon_name']) : '';
$instance['f_icon_class'] = (!empty($new_instance['f_icon_class'])) ? strip_tags($new_instance['f_icon_class']) : '';
$instance['s_icon_name'] = (!empty($new_instance['s_icon_name'])) ? strip_tags($new_instance['s_icon_name']) : '';
$instance['s_icon_class'] = (!empty($new_instance['s_icon_class'])) ? strip_tags($new_instance['s_icon_class']) : '';
$instance['t_icon_name'] = (!empty($new_instance['t_icon_name'])) ? strip_tags($new_instance['t_icon_name']) : '';
$instance['t_icon_class'] = (!empty($new_instance['t_icon_class'])) ? strip_tags($new_instance['t_icon_class']) : '';

return $instance;
}
}

function register_social_widget(){
register_widget('social_widget');
}
add_action('widgets_init', 'register_social_widget');