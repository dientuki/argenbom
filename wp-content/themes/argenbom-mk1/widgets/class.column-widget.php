<?php

class column_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
      // Base ID of your widget
      'column_widget', 
      // Widget name will appear in UI
      'Nosecomollamarloaca', 
      // Widget description
      array( 'description' => "Muestra los servicios") 
    );
  }

  public function widget($args, $instance) {
    extract( $args );
    $posts = array();
    foreach ($instance as $key => $value) {
      $posts[] = get_post($value);
    }
    set_query_var('posts', $posts);
    get_template_part('widgets/column', 'widget');
  }

	public function form( $instance ) {
    //Defaults
		$instance = wp_parse_args(
			(array) $instance,
			array(
        'item1'   => '',
        'item2'   => '',
			)
		);
    ?>
    <?php foreach ($instance as $key => $value): ?>
      <p>
        <label for="<?php echo $this->get_field_id( $key ); ?>">Pagina <?php echo $key ?>:</label>
        <select name="<?php echo $this->get_field_name( $key ); ?>" id="<?php echo $this->get_field_id( $key ); ?>" class="widefat">
          <?php 
            $pages = get_pages(array('parent' => 0)); 
            foreach ( $pages as $page ) {
              $option = '<option value="' . $page->ID . '" '. $this->selected($instance[$key], $page->ID) . '>';
              $option .= $page->post_title;
              $option .= '</option>';
              echo $option;
            }
          ?>
        </select>
      </p>
    <?php endforeach; ?>
		<?php
	}

  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['item1'] = ( ! empty( $new_instance['item1'] ) ) ? strip_tags( $new_instance['item1'] ) : '';
    $instance['item2'] = ( ! empty( $new_instance['item2'] ) ) ? strip_tags( $new_instance['item2'] ) : '';
    return $instance;
  }

  private function selected($ins, $id) {
    if ($ins == $id) {
      return 'selected="selected"';
    }
  }

}
//registering my widget so its available in the back-end
add_action('widgets_init', function() {
    register_widget('column_widget');
});