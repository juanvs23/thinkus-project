<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$footer_config_info = unserialize(get_option('footer_config'));
$is_hide_footer = $footer_config_info[3];
$show_copyright_footer = $footer_config_info[3] =='true'? false: true;
$footer_template_id = $footer_config_info[1];
$page_footer = get_field('footer_personalizado_para_la_pagina');
$hide_copyrigth_by_page = get_field('ocultar_copyright');

if($page_footer){
 
  echo do_shortcode( '[elementor-template id="'.$page_footer.'"]' );
}else{
	echo do_shortcode( '[elementor-template id="'.$footer_template_id.'"]' );
}

if($show_copyright_footer && !$hide_copyrigth_by_page): ?>
<footer id="site-footer" class="thinkus-footer" role="contentinfo">
	
	<p class="text-copyright">
		<?php printf(__('© Copyright Conocimiento Corporativo %d. All rights reserved', 'Thinkus-child'),THINKUS_THEME_DATE['year']); ?>
	</p>
</footer>
<?php endif; ?>