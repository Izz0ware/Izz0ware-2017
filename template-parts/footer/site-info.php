<?php
/**
* Displays footer site info
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?>
  <div class="site-info">
    Proudly powered by
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>">
      <?php printf( __( '%s', 'twentyseventeen' ), 'WordPress' ); ?>
    </a> and
    <a href="<?php echo esc_url( __( 'https://wordpress.org/themes/twentyseventeen/', 'twentyseventeen' ) ); ?>">
      <?php printf( __( '%s', 'twentyseventeen' ), 'Twenty Seventeen' ); ?>
    </a> (slightly modified).
    </br>
    Proudly ran on a
    <a href="<?php echo esc_url( __( 'https://www.raspberrypi.org/products/raspberry-pi-3-model-b/', 'twentyseventeen' ) ); ?>">
      <?php printf( __( '%s', 'twentyseventeen' ), 'Raspberry Pi 3 Model B' ); ?>
    </a>
  </div>
  <!-- .site-info -->