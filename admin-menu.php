<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_menu', 'custom_css_for_login_add_admin_menu' );
add_action( 'admin_init', 'custom_css_for_login_settings_init' );


function custom_css_for_login_add_admin_menu(  ) { 

	add_options_page( 'Custom Login', 'Custom Login', 'manage_options', 'custom_css_for_login', 'custom_css_for_login_options_page' );

}


function custom_css_for_login_settings_init(  ) { 

	register_setting( 'pluginPage', 'custom_css_for_login_settings' );

	add_settings_section(
		'custom_css_for_login_pluginPage_section', 
		__( 'Logo', 'custom-login' ), 
		'custom_css_for_login_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'custom_css_for_login_checkbox_field_1', 
		__( 'Use your own logo', 'custom-login' ), 
		'custom_css_for_login_checkbox_field_1_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section' 
	);
	
	add_settings_field( 
		'custom_css_for_login_text_field_0', 
		__( 'Link to the graphic', 'custom-login' ), 
		'custom_css_for_login_text_field_0_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section' 
	);
	
	add_settings_field( 
		'custom_css_for_login_text_field_1', 
		__( 'Logo height', 'custom-login' ), 
		'custom_css_for_login_text_field_1_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section' 
	);
	
	add_settings_field( 
		'custom_css_for_login_text_field_2', 
		__( 'Logo width', 'custom-login' ), 
		'custom_css_for_login_text_field_2_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section' 
	);

	add_settings_field( 
		'custom_css_for_login_checkbox_field_2', 
		__( 'Logo round off', 'custom-login' ), 
		'custom_css_for_login_checkbox_field_2_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section' 
	);

	add_settings_field( 
		'custom_css_for_login_checkbox_field_4', 
		__( 'Logo hover off', 'custom-login' ), 
		'custom_css_for_login_checkbox_field_4_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section' 
	);
	
	add_settings_section(
		'custom_css_for_login_pluginPage_section-2', 
		__( 'Colours', 'custom-login' ), 
		'custom_css_for_login_settings_section_2_callback', 
		'pluginPage'
	);
	
	add_settings_field( 
		'custom_css_for_login_checkbox_field_3', 
		__( 'Use own colours', 'custom-login' ), 
		'custom_css_for_login_checkbox_field_3_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section-2' 
	);
	
	add_settings_field( 
		'custom_css_for_login_color_field_1', 
		__( 'Accent colour', 'custom-login' ), 
		'custom_css_for_login_color_field_1_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section-2' 
	);

	add_settings_field( 
		'custom_css_for_login_checkbox_field_5', 
		__( 'Button color black', 'custom-login' ), 
		'custom_css_for_login_checkbox_field_5_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section-2' 
	);
	
	add_settings_section(
		'custom_css_for_login_pluginPage_section-3', 
		__( 'Other', 'custom-login' ), 
		'custom_css_for_login_settings_section_3_callback', 
		'pluginPage'
	);
	
	add_settings_field( 
		'custom_css_for_login_textarea_1', 
		__( 'Own CSS', 'custom-login' ), 
		'custom_css_for_login_textarea_1_render', 
		'pluginPage', 
		'custom_css_for_login_pluginPage_section-3' 
	);
	
}
//Eigenes Logo verwenden
function custom_css_for_login_checkbox_field_1_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='checkbox' name='custom_css_for_login_settings[custom_css_for_login_checkbox_field_1]' <?php checked( $options['custom_css_for_login_checkbox_field_1'], 1 ); ?> value='1'>
	<?php

}
//Grafik Link
function custom_css_for_login_text_field_0_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='url' name='custom_css_for_login_settings[custom_css_for_login_text_field_0]' value='<?php echo $options['custom_css_for_login_text_field_0']; ?>' placeholder="https://...">
	<?php

}
//Lögo Höhe
function custom_css_for_login_text_field_1_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='text' name='custom_css_for_login_settings[custom_css_for_login_text_field_1]' value='<?php echo $options['custom_css_for_login_text_field_1'];  ?>' placeholder="84px">
	<?php

}
//Logo Breite
function custom_css_for_login_text_field_2_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='text' name='custom_css_for_login_settings[custom_css_for_login_text_field_2]' value='<?php echo $options['custom_css_for_login_text_field_2']; ?>' placeholder="84px">
	<?php

}
//Logo abrunden
function custom_css_for_login_checkbox_field_4_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='checkbox' name='custom_css_for_login_settings[custom_css_for_login_checkbox_field_4]' <?php checked( $options['custom_css_for_login_checkbox_field_4'], 1 ); ?> value='1'>
	<?php

}
//Logo-Hover off
function custom_css_for_login_checkbox_field_2_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='checkbox' name='custom_css_for_login_settings[custom_css_for_login_checkbox_field_2]' <?php checked( $options['custom_css_for_login_checkbox_field_2'], 1 ); ?> value='1'>
	<?php

}
//Eigene Farben verwenden
function custom_css_for_login_checkbox_field_3_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='checkbox' name='custom_css_for_login_settings[custom_css_for_login_checkbox_field_3]' <?php checked( $options['custom_css_for_login_checkbox_field_3'], 1 ); ?> value='1'>
	<?php

}
//Eigene Farbe
function custom_css_for_login_color_field_1_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<style>
		input[type="color"] {
			width: 193px;
		}
	</style>
	<input type='color' name='custom_css_for_login_settings[custom_css_for_login_color_field_1]' value='<?php echo $options['custom_css_for_login_color_field_1']; ?>'>
	<?php

}
//Button Textfarbe schwarz
function custom_css_for_login_checkbox_field_5_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<input type='checkbox' name='custom_css_for_login_settings[custom_css_for_login_checkbox_field_5]' <?php checked( $options['custom_css_for_login_checkbox_field_5'], 1 ); ?> value='1'>
	<?php

}
//Eigenes CSS
function custom_css_for_login_textarea_1_render(  ) { 

	$options = get_option( 'custom_css_for_login_settings' );
	?>
	<textarea cols='40' rows='5' name='custom_css_for_login_settings[custom_css_for_login_textarea_1]'><?php echo $options['custom_css_for_login_textarea_1']; ?></textarea>
	<?php

}

//Beschreibung Absatz 1
function custom_css_for_login_settings_section_callback(  ) { 

	echo __( '', 'custom-login' );

}
//Beschreibung Absatz 2
function custom_css_for_login_settings_section_2_callback(  ) { 

	echo __( '', 'custom-login' );

}
//Beschreibung Absatz 3
function custom_css_for_login_settings_section_3_callback(  ) { 

	echo __( '', 'custom-login' );

}


function custom_css_for_login_options_page(  ) { 

		?>
		<form action='options.php' method='post'>

			<h1>Custom CSS for Login</h1>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

		</form>
		<?php

}
