<?php
/**
 * Foundation Theme Customizer
 *
 * @package foundation
 */

/**


/*
	Register our customizer options
*/
function foundation_customize_register( $wp_customize ) {

	/*
		Settings for the three pane descriptions
	*/
	$wp_customize->add_section( 'foundation_highlight_panel' , array(
    		'title'      => __( 'Three Pane Panel', 'foundation' ),
    		'priority'   => 30,
	) );

	$wp_customize->add_setting( 'header_panel_1' , array(
    		'default'     => 'Text #1',
    		'transport'   => 'refresh',
	) );

	$wp_customize->add_setting( 'header_panel_2' , array(
    		'default'     => 'Text #2',
    		'transport'   => 'refresh',
	) );

	$wp_customize->add_setting( 'header_panel_3' , array(
    		'default'     => 'Text #3',
    		'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'        => __( 'Header Color', 'foundation' ),
		'section'    => 'foundation_highlight_panel',
		'settings'   => 'header_panel_1',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'        => __( 'Header Color', 'foundation' ),
		'section'    => 'foundation_highlight_panel',
		'settings'   => 'header_panel_2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'        => __( 'Header Color', 'foundation' ),
		'section'    => 'foundation_highlight_panel',
		'settings'   => 'header_panel_3',
	) ) );



	/*
		Featured Property Setting
	*/
	$wp_customize->add_section( 'foundation_featured_property' , array(
    		'title'      => __( 'Featured Properties', 'foundation' ),
    		'priority'   => 30,
	) );


Color Settings
/*********************************************************/

$colors = array();
$colors[] = array(
  'slug'=>'body_background_color', 
  'default' => '#eee',
  'label' => __('Body Background Color', 'foundation')
);
$colors[] = array(
  'slug'=>'body_text_color', 
  'default' => '#000',
  'label' => __('Body Text Color', 'foundation')
);
$colors[] = array(
  'slug'=>'body_link_color', 
  'default' => '#E85302',
  'label' => __('Body Link/Button Color', 'foundation')
);
$colors[] = array(
  'slug'=>'body_link__hover_color', 
  'default' => '#FEBD00',
  'label' => __('Body Link/Button Hover Color', 'foundation')
);
foreach( $colors as $color ) {
  // SETTINGS
  $wp_customize->add_setting(
    $color['slug'], array(
      'default' => $color['default'],
      'type' => 'option', 
      'capability' => 
      'edit_theme_options'
    )
  );
  // CONTROLS
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      $color['slug'], 
      array('label' => $color['label'], 
      'section' => 'colors',
      'settings' => $color['slug'])
    )
  );
}


}
add_action( 'customize_register', 'foundation_customize_register' );