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
		'slug'=>'body_link_hover_color', 
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
  'description' => __('Allows you to modify the contact information for the top bar of the website. Leave fields blank if no link exists.', 'foundation'),
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
  'description' => __('Allows you to customize the highlight panes on the front page (template Home). Icons use the Font Awesome format. For example, to show the house icon, one would use "fa-home". You can refer to the available icons here: http://fontawesome.io/icons/', 'foundation'),
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

$wp_customize->add_setting('pane_header_1', array('default' => 'Our Homes'));

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

$wp_customize->add_setting('pane_text_1', array('default' => 'We are a small family-owned company. We own all of the homes we offer for rent.'));

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



/*
	Index Featured Listings Section
*/
$wp_customize->add_section('featured_listings_section' , array(
  'title' => __('Featured Listings Section','foundation'), 'description' => 'Settings for the featured images section on the home page.',
  'description' => __('Allows you to add up to three featured properties on the Home page template.', 'foundation'),
));

$wp_customize->add_setting('show_featured_listings', array('default' => '1'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'show_featured_listings',
        array(
            'label'          => __( 'Number Of Feature Panes', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'show_featured_listings',
		'type'       => 'radio',
		'choices'    => array(
            		'0' => 'Hide',
            		'1' => 'Show',
        	),
            )
        )
    );

$wp_customize->add_setting('featured_listing_1_title', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_1_title',
        array(
            'label'          => __( '#1 Featured Listing: Title', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_1_title',
            'type'           => 'text'
            )
        )
    );



$wp_customize->add_setting('featured_listing_1_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_1_url',
        array(
            'label'          => __( '#1 Featured Listing: Listing URL', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_1_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_1_image_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_1_image_url',
        array(
            'label'          => __( '#1 Featured Listing: Image URL', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_1_image_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_1_num_bedrooms', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_1_num_bedrooms',
        array(
            'label'          => __( '#1 Featured Listing: Number of Bedrooms', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_1_num_bedrooms',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_1_num_bathrooms', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_1_num_bathrooms',
        array(
            'label'          => __( '#1 Featured Listing: Number of Bathrooms', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_1_num_bathrooms',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_1_num_cars', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_1_num_cars',
        array(
            'label'          => __( '#1 Featured Listing: Number of Cars', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_1_num_cars',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_1_description', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_1_description',
        array(
            'label'          => __( '#1 Featured Listing: Description', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_1_description',
            'type'           => 'textarea'
            )
        )
    );

/*****/

$wp_customize->add_setting('featured_listing_2_title', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_2_title',
        array(
            'label'          => __( '#2 Featured Listing: Title', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_2_title',
            'type'           => 'text'
            )
        )
    );



$wp_customize->add_setting('featured_listing_2_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_2_url',
        array(
            'label'          => __( '#2 Featured Listing: Listing URL', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_2_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_2_image_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_2_image_url',
        array(
            'label'          => __( '#2 Featured Listing: Image URL', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_2_image_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_2_num_bedrooms', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_2_num_bedrooms',
        array(
            'label'          => __( '#2 Featured Listing: Number of Bedrooms', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_2_num_bedrooms',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_2_num_bathrooms', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_2_num_bathrooms',
        array(
            'label'          => __( '#2 Featured Listing: Number of Bathrooms', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_2_num_bathrooms',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_2_num_cars', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_2_num_cars',
        array(
            'label'          => __( '#2 Featured Listing: Number of Cars', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_2_num_cars',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_2_description', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_2_description',
        array(
            'label'          => __( '#2 Featured Listing: Description', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_2_description',
            'type'           => 'textarea'
            )
        )
    );

/**********/

$wp_customize->add_setting('featured_listing_3_title', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_3_title',
        array(
            'label'          => __( '#3 Featured Listing: Title', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_3_title',
            'type'           => 'text'
            )
        )
    );



$wp_customize->add_setting('featured_listing_3_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_3_url',
        array(
            'label'          => __( '#3 Featured Listing: Listing URL', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_3_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_3_image_url', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_3_image_url',
        array(
            'label'          => __( '#3 Featured Listing: Image URL', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_3_image_url',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_3_num_bedrooms', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_3_num_bedrooms',
        array(
            'label'          => __( '#3 Featured Listing: Number of Bedrooms', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_3_num_bedrooms',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_3_num_bathrooms', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_3_num_bathrooms',
        array(
            'label'          => __( '#3 Featured Listing: Number of Bathrooms', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_3_num_bathrooms',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_3_num_cars', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_3_num_cars',
        array(
            'label'          => __( '#3 Featured Listing: Number of Cars', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_3_num_cars',
            'type'           => 'text'
            )
        )
    );

$wp_customize->add_setting('featured_listing_3_description', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_listing_3_description',
        array(
            'label'          => __( '#3 Featured Listing: Description', 'foundation' ),
            'section'        => 'featured_listings_section',
            'settings'       => 'featured_listing_3_description',
            'type'           => 'textarea'
            )
        )
    );


/*
	Placeholder Images
*/
$wp_customize->add_section('placeholder_images' , array(
  'title' => __('Placeholder Image Section','foundation'), 'description' => 'Add placeholder images where featured images unavailable.',
  'description' => __('Add placeholder images where featured images unavailable.', 'foundation'),
));

$wp_customize->add_setting('listing_placeholder_image', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'listing_placeholder_image',
        array(
            'label'          => __( 'Listing Placeholder Image', 'foundation' ),
            'section'        => 'placeholder_images',
            'settings'       => 'listing_placeholder_image',
		    'type'       => 'text',
            )
        )
    );
    
$wp_customize->add_setting('blog_placeholder_image', array('default' => ''));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'blog_placeholder_image',
        array(
            'label'          => __( 'Blog Placeholder Image', 'foundation' ),
            'section'        => 'placeholder_images',
            'settings'       => 'blog_placeholder_image',
		    'type'       => 'text',
            )
        )
    );
    
    
/*
	Featured Property Header
*/
$wp_customize->add_section('featured_property_header' , array(
  'title' => __('Featured Property Header','foundation'), 'description' => 'Add property information for featured property background header.',
  'description' => __('Add property information for featured property background header. This is used with the custom header image.', 'foundation'),
));

$wp_customize->add_setting('featured_property_pre_text', array('default' => 'Featured Property'));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_property_pre_text',
        array(
            'label'          => __( 'Featured Property: Previous Text', 'foundation' ),
            'section'        => 'featured_property_header',
            'settings'       => 'featured_property_pre_text',
		    'type'       => 'text',
            )
        )
    );
    
$wp_customize->add_setting('featured_property_property_header', array('default' => ''));

   $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_property_property_header',
        array(
            'label'          => __( 'Featured Property: Property Name', 'foundation' ),
            'section'        => 'featured_property_header',
            'settings'       => 'featured_property_property_header',
		    'type'       => 'text',
            )
        )
    );
    
  $wp_customize->add_setting('featured_property_number_bedrooms', array('default' => ''));  
  
  
   $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_property_number_bedrooms',
        array(
            'label'          => __( 'Featured Property: Number Of Bedrooms', 'foundation' ),
            'section'        => 'featured_property_header',
            'settings'       => 'featured_property_number_bedrooms',
		    'type'       => 'text',
            )
        )
    );
    
    
    $wp_customize->add_setting('featured_property_number_bathrooms', array('default' => ''));  
  
  
   $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_property_number_bathrooms',
        array(
            'label'          => __( 'Featured Property: Number of Bathrooms', 'foundation' ),
            'section'        => 'featured_property_header',
            'settings'       => 'featured_property_number_bathrooms',
		    'type'       => 'text',
            )
        )
    );
    
       $wp_customize->add_setting('featured_property_number_cars', array('default' => ''));  
  
  
   $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_property_number_cars',
        array(
            'label'          => __( 'Featured Property: Number of Cars', 'foundation' ),
            'section'        => 'featured_property_header',
            'settings'       => 'featured_property_number_cars',
		    'type'       => 'text',
            )
        )
    ); 
    
    
           $wp_customize->add_setting('featured_property_listing_url', array('default' => ''));  
  
  
   $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        	'featured_property_listing_url',
        array(
            'label'          => __( 'Featured Property: Listing URL', 'foundation' ),
            'section'        => 'featured_property_header',
            'settings'       => 'featured_property_listing_url',
		    'type'       => 'text',
            )
        )
    );   

}
add_action( 'customize_register', 'foundation_customize_register' );