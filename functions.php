<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function my_login_page_remove_back_to_link() {

	$options = get_option( 'custom_css_for_login_settings' );

	$hex1 = $options['custom_css_for_login_color_field_1'];
	list($r1, $g1, $b1) = sscanf($hex1, "#%02x%02x%02x");

	if ( get_option( 'eigenes_logo_verwenden' ) == 1): ?>
	<style type="text/css">
		.login h1 a{
			background-image: url('<?php echo get_option( 'grafik' ) ?>') !important;
			background-size: 100% !important;
			<?php if (empty(get_option( 'logo_breite' ))): ?>
			width: 84px;
			<?php endif ?>
			<?php if (empty(get_option( 'logo_hoehe' ))): ?>
			height: 84px;
			<?php endif ?>
			width: <?php echo get_option( 'logo_breite' ) ?> !important;
			height: <?php echo get_option( 'logo_hoehe' ) ?>  !important;
			<?php if (get_option( 'logo_abrunden' ) == 1): ?>
			border-radius: 50%;
			<?php endif ?>
			<?php if (get_option( 'eigene_farben_verwenden' ) == 1): ?>
			filter: none !important;
			<?php endif ?>
		}
	</style>
	<?php endif ?> 

	<?php if (get_option( 'eigene_farben_verwenden' ) == 1): ?>
	<style type="text/css">
    	    #wp-submit {
    	    	background-color: <?php echo get_option( 'akzentfarbe' ) ?>;
				border-color: <?php echo get_option( 'akzentfarbe' ) ?>;
				transition: 0.1s;
				<?php if ($options['custom_css_for_login_checkbox_field_5'] == 1): ?>
				color: black !important;
				<?php endif ?>
    	    }
			#wp-submit:hover, #wp-submit:active{
				border: 1px solid black;
				box-shadow: 0 0 79px -24px black inset;
				transition: 0.1s;
				<?php if ($options['custom_css_for_login_checkbox_field_5'] == 1): ?>
				color: white !important;
				<?php endif ?>
			}
			#wp-submit:focus{
				box-shadow: 0 0 0 1px #fff, 0 0 0 3px <?php echo get_option( 'akzentfarbe' ) ?>;
			}
			.dashicons-visibility{
				color: <?php echo get_option( 'akzentfarbe' ) ?>;
			}
			.dashicons-hidden{
				color: <?php echo get_option( 'akzentfarbe' ) ?>;
			}
			.input:focus{
				border-color: <?php echo get_option( 'akzentfarbe' ) ?> !important;
				box-shadow: 0 0 0 1px <?php echo get_option( 'akzentfarbe' ) ?> !important;
			}
			a{
				color: <?php echo get_option( 'akzentfarbe' ) ?> !important;
			}
			a:hover{
				filter: brightness(0.5);
			}
			.login .message, .login .success{
				border-left: 4px solid <?php echo get_option( 'akzentfarbe' ) ?> !important;
			}
			.forgetmenot input[type=checkbox]:checked::before{
				content: url(data:image/svg+xml;utf8,<svg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%2020%2020%27><path%20d%3D%27M14.83%204.89l1.34.94-5.81%208.38H9.02L5.78%209.67l1.34-1.25%202.57%202.4z%27%2F><%2Fsvg>) !important;
			}
			#rememberme:focus{
			border-color: <?php echo get_option( 'akzentfarbe' ) ?>;
    		box-shadow: 0 0 0 1px <?php echo get_option( 'akzentfarbe' ) ?>;
			}
			body{
				background: whitesmoke !important;
			}
    	</style>
	<?php endif ?>
	<?php if (empty(get_option( 'eigenes_css' ))): ?>
	<?php else: ?>
		<style type="text/css">
			<?php echo get_option( 'eigenes_css' ) ?>
		</style>
	<?php endif ?>

	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_page_remove_back_to_link' );
