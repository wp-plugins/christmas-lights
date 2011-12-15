<?php
/*
Plugin Name: Christmas Lights
Plugin URI: http://www.webdev3000.com/christmas-lights-wp-plugin/
Description: Add nice looking animated Christmas lights to the top of your WP site and enjoy winter.
Author: Csaba Kissi
Version: 0.8.0
Author URI: http://www.webdev3000.com/
*/

function chl_scripts() {
   wp_enqueue_script('chl-christmaslights', plugins_url('js/christmaslights_min.js', __FILE__));
}

function chl_script() {
?>
<script type="text/javascript">
  var light_src="<?php echo  plugins_url('img/lights.gif', __FILE__); ?>";
</script>
<?
}
add_action('wp_print_scripts','chl_script');
add_action('wp_enqueue_scripts', 'chl_scripts');

?>