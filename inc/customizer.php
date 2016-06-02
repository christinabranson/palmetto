<?php
/**
 * Foundation Theme Customizer
 *
 * @package foundation
 */


function foundation_customize_register( $wp_customize ) {

/*
	Color Settings
*/

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

/*
	Contact Header
*/
$wp_customize->add_section('contact_header' , array(
  'title' => __('Contact Header','foundation'),
));


/* Phone Number */
$wp_customize->add_setting('phone_number', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'phone_number',
        array(
            'label'          => __( 'Phone Number', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'phone_number',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('email_address', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'email_address',
        array(
            'label'          => __( 'Email', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'email_address',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('facebook_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'facebook_url',
        array(
            'label'          => __( 'Facebook URL', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'facebook_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('twitter_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'twitter_url',
        array(
            'label'          => __( 'Twitter URL', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'twitter_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('google_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'google_url',
        array(
            'label'          => __( 'Google+ URL', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'google_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('github_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'github_url',
        array(
            'label'          => __( 'GitHub URL', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'github_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('linkedin_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'linkedin_url',
        array(
            'label'          => __( 'LinkedIn URL', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'linkedin_url',
            'type'           => 'text'
            )
        )
    );
$wp_customize->add_setting('github_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'github_url',
        array(
            'label'          => __( 'GitHub URL', 'foundation' ),
            'section'        => 'contact_header',
            'settings'       => 'github_url',
            'type'           => 'text'
            )
        )
    );


/*
	Index Three Pane
*/
$wp_customize->add_section('three_pane' , array(
  'title' => __('Three Pane Featured','foundation'),
));

$wp_customize->add_setting('number_of_panes', array('default' => '3'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'number_of_panes',
        array(
            'label'          => __( 'Number Of Feature Panes', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'number_of_panes',
		'type'       => 'radio',
		'choices'    => array(
            		'0' => '0',
            		'1' => '1',
            		'2' => '2',
            		'3' => '3',
            		'4' => '4',
        	),
            )
        )
    );

$wp_customize->add_setting('pane_header_1', array('default' => 'Panel Header 1'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_header_1',
        array(
            'label'          => __( '#1 Pane Header', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_header_1',
            'type'           => 'text'
            )
        )
    );


$wp_customize->add_setting('pane_icon_1', array('default' => 'fa-home'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_icon_1',
        array(
            'label'          => __( '#1 Pane Icon', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_icon_1',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('pane_text_1', array('default' => 'Text text text'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_text_1',
        array(
            'label'          => __( '#1 Pane Text', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_text_1',
            'type'           => 'textarea'
            )
        )
    );

$wp_customize->add_setting('pane_header_2', array('default' => 'Panel Header 2'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_header_2',
        array(
            'label'          => __( '#2 Pane Header', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_header_2',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('pane_icon_2', array('default' => 'fa-home'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_icon_2',
        array(
            'label'          => __( '#2 Pane Icon', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_icon_2',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('pane_text_2', array('default' => 'Text text text'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_text_2',
        array(
            'label'          => __( '#2 Pane Text', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_text_2',
            'type'           => 'textarea'
            )
        )
    );


$wp_customize->add_setting('pane_header_3', array('default' => 'Panel Header 3'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_header_3',
        array(
            'label'          => __( '#3 Pane Header', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_header_3',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('pane_icon_3', array('default' => 'fa-home'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_icon_3',
        array(
            'label'          => __( '#3 Pane Icon', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_icon_3',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('pane_text_3', array('default' => 'Text Text Text'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_text_3',
        array(
            'label'          => __( '#3 Pane Text', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_text_3',
            'type'           => 'textarea'
            )
        )
    );


$wp_customize->add_setting('pane_header_4', array('default' => 'Header Panel 4'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_header_4',
        array(
            'label'          => __( '#4 Pane Header', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_header_4',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('pane_icon_4', array('default' => 'fa-home'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_icon_4',
        array(
            'label'          => __( '#4 Pane Icon', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_icon_4',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('pane_text_4', array('default' => 'Text text text'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'pane_text_4',
        array(
            'label'          => __( '#4 Pane Text', 'foundation' ),
            'section'        => 'three_pane',
            'settings'       => 'pane_text_4',
            'type'           => 'textarea'
            )
        )
    );





}
add_action( 'customize_register', 'foundation_customize_register' );