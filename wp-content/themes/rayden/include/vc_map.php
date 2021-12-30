<?php

if ( function_exists( 'vc_map' ) ) {
	
vc_map( array(
	'name' => 'Title',
	'base' => 'title',
	'icon' => 'icon-vc-clapat-rayden',
	'is_container' => 'true',
	'category' => esc_html__('Rayden - Typo Elements', 'rayden'),
	'description' => esc_html__('Title', 'rayden'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/include/vc-extend.css' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'heading' => esc_html__('Title Size', 'rayden'),
			'description' => '',
			'param_name' => 'size',
			'value' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
		),
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'heading' => esc_html__('Has Underline?', 'rayden'),
			'description' => esc_html__('If the title is displayed underlined or without underline', 'rayden'),
			'param_name' => 'underline',
			'value' => array( 'no', 'yes'),
		),
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'heading' => esc_html__('Big Title?', 'rayden'),
			'description' => esc_html__('This parameter applies only for H1 headings. If the title is normal or bigger title font size.', 'rayden'),
			'param_name' => 'big',
			'value' => array( 'no', 'yes'),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => esc_html__('Content', 'rayden'),
			'param_name' => 'content',
			'value' => esc_html__('Content goes here', 'rayden'),
		),
	)
) );

vc_map( array(
	'name' => 'Button',
	'base' => 'button',
	'icon' => 'icon-vc-clapat-rayden',
	'is_container' => 'true',
	'category' => esc_html__('Rayden - Typo Elements', 'rayden'),
	'description' => esc_html__('Button', 'rayden'),
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Button Link', 'rayden'),
			'description' => esc_html__('URL for the button', 'rayden'),
			'param_name' => 'link',
			'value' => 'http://',
		),
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'heading' => esc_html__('Target Window', 'rayden'),
			'description' => esc_html__('Button link opens in a new or current window', 'rayden'),
			'param_name' => 'target',
			'value' => array( '_blank', '_self'),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Hover Caption', 'rayden'),
			'description' => esc_html__('Caption when hovering the button', 'rayden'),
			'param_name' => 'hover_caption',
			'value' => esc_html__('Hover Caption', 'rayden'),
		),
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'heading' => esc_html__('Button type', 'rayden'),
			'description' => '',
			'param_name' => 'type',
			'value' => array( 'normal', 'outline'),
		),
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'heading' => esc_html__('Rounded border', 'rayden'),
			'description' => '',
			'param_name' => 'rounded',
			'value' => array( 'yes', 'no'),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => esc_html__('Caption', 'rayden'),
			'param_name' => 'content',
			'value' => esc_html__('Caption goes here', 'rayden'),
		),
		)
) );

vc_map( array(
	'name' => 'Space Between Buttons',
	'base' => 'space_between_buttons',
	'icon' => 'icon-vc-clapat-rayden',
	'category' => esc_html__('Rayden - Typo Elements', 'rayden'),
	'description' => esc_html__('Adds a space between two button shortcodes', 'rayden'),
	'show_settings_on_create' => false
) );

vc_map( array(
	'name' => 'Text Link',
	'base' => 'text_link',
	'icon' => 'icon-vc-clapat-rayden',
	'is_container' => 'false',
	'category' => esc_html__('Rayden - Typo Elements', 'rayden'),
	'description' => esc_html__('Text Link', 'rayden'),
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Link', 'rayden'),
			'description' => esc_html__('URL for the link', 'rayden'),
			'param_name' => 'link',
			'value' => 'http://',
		),
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'heading' => esc_html__('Target Window', 'rayden'),
			'description' => esc_html__('Link opens in a new or current window', 'rayden'),
			'param_name' => 'target',
			'value' => array( '_blank', '_self'),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Caption', 'rayden'),
			'description' => esc_html__('Caption displayed over the link', 'rayden'),
			'param_name' => 'caption',
			'value' => esc_html__('Read More', 'rayden'),
		)
		)
) );

vc_map( array(
	'name' => 'Marquee Content',
	'base' => 'marquee_content',
	'icon' => 'icon-vc-clapat-rayden',
	'is_container' => 'true',
	'category' => esc_html__('Rayden - Typo Elements', 'rayden'),
	'description' => esc_html__('Marquee Content', 'rayden'),
	'params' => array(
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => esc_html__('Content', 'rayden'),
			'param_name' => 'content',
			'value' => esc_html__('Content goes here', 'rayden'),
		),
	)
) );

vc_map( array(
	'name' => 'Accordion',
	'base' => 'accordion',
	'icon' => 'icon-vc-clapat-rayden',
	'as_parent' => array('only' => 'accordion_item'),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Accordion', 'rayden'),
	'content_element' => true,
	'show_settings_on_create' => false,
	"params" => array(
        // add params same as with any other content element
        array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
    ),
	'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_accordion extends WPBakeryShortCodesContainer {}}

vc_map( array(
	'name' => 'Accordion Item',
	'base' => 'accordion_item',
	'icon' => 'icon-vc-clapat-rayden',
	'as_child' => array('only' => 'accordion' ),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Accordion Item', 'rayden'),
	'content_element' => true,
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Title', 'rayden'),
			'description' => '',
			'param_name' => 'title',
			'value' => 'Accordion Item Title',
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => esc_html__('Content', 'rayden'),
			'param_name' => 'content',
			'value' => esc_html__('Content goes here', 'rayden'),
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_accordion_item extends WPBakeryShortCode {}}

vc_map( array(
	'name' => 'Icon Service',
	'base' => 'service',
	'icon' => 'icon-vc-clapat-rayden',
	'is_container' => 'true',
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Service Box', 'rayden'),
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Icon', 'rayden'),
			'description' => esc_html__('Icon displayed within service box. Type in the class of the icon in this edit box. The complete and latest list: http://fortawesome.github.io/Font-Awesome/icons/', 'rayden'),
			'param_name' => 'icon',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Service Title', 'rayden'),
			'description' => esc_html__('Title of the service', 'rayden'),
			'param_name' => 'title',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => esc_html__('Content', 'rayden'),
			'param_name' => 'content',
			'value' => esc_html__('Content goes here', 'rayden'),
		),
	)
) );

vc_map( array(
	'name' => 'Contact Info Box',
	'base' => 'contact_box',
	'icon' => 'icon-vc-clapat-rayden',
	'is_container' => 'true',
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Contact Info  Box', 'rayden'),
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Icon', 'rayden'),
			'description' => esc_html__('Icon displayed within contact info box. Type in the class of the icon in this edit box. The complete and latest list: http://fortawesome.github.io/Font-Awesome/icons/', 'rayden'),
			'param_name' => 'icon',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Title', 'rayden'),
			'description' => esc_html__('Title or header of the contact info box', 'rayden'),
			'param_name' => 'title',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => esc_html__('Contact Info', 'rayden'),
			'param_name' => 'content',
			'value' => esc_html__('Contact info goes here', 'rayden'),
		),
	)
) );

vc_map( array(
	'name' => 'Map',
	'base' => 'rayden_map',
	'icon' => 'icon-vc-clapat-rayden',
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Adds a google map with settings from theme options.', 'rayden'),
	'show_settings_on_create' => false
) );

vc_map( array(
	'name' => 'Normal Image Slider',
	'base' => 'general_slider',
	'icon' => 'icon-vc-clapat-rayden',
	'as_parent' => array('only' => 'general_slide'),'category' => esc_html__('Rayden - Sliders', 'rayden'),
	'description' => esc_html__('Normal Image Slider', 'rayden'),
	'content_element' => true,
	'show_settings_on_create' =>true,
	"params" => array(
        array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
    ),
	'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_general_slider extends WPBakeryShortCodesContainer {}}

vc_map( array(
	'name' => 'Slide',
	'base' => 'general_slide',
	'icon' => 'icon-vc-clapat-rayden',
	'as_child' => array('only' => 'general_slider' ),'category' => esc_html__('Rayden - Sliders', 'rayden'),
	'description' => esc_html__('Slide', 'rayden'),
	'params' => array(
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Slider Image', 'rayden'),
			'description' => esc_html__('Image representing this slide', 'rayden'),
			'param_name' => 'img_id',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Image ALT', 'rayden'),
			'description' => esc_html__('The ALT attribute specifies an alternate text for an image, if the image cannot be displayed', 'rayden'),
			'param_name' => 'alt',
			'value' => '',
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_general_slide extends WPBakeryShortCode {}}


vc_map( array(
	'name' => 'Carousel Image Slider',
	'base' => 'carousel_slider',
	'icon' => 'icon-vc-clapat-rayden',
	'as_parent' => array('only' => 'carousel_slide'),'category' => esc_html__('Rayden - Sliders', 'rayden'),
	'description' => esc_html__('Carousel Image Slider', 'rayden'),
	'content_element' => true,
	'show_settings_on_create' =>true,
	"params" => array(
        array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
    ),
	'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_carousel_slider extends WPBakeryShortCodesContainer {}}

vc_map( array(
	'name' => 'Carousel Slide',
	'base' => 'carousel_slide',
	'icon' => 'icon-vc-clapat-rayden',
	'as_child' => array('only' => 'carousel_slider' ),
	'category' => esc_html__('Rayden - Sliders', 'rayden'),
	'description' => esc_html__('Carousel Slide', 'rayden'),
	'params' => array(
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Slider Image', 'rayden'),
			'description' => esc_html__('Image representing this slide', 'rayden'),
			'param_name' => 'img_id',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Image ALT', 'rayden'),
			'description' => esc_html__('The ALT attribute specifies an alternate text for an image, if the image cannot be displayed', 'rayden'),
			'param_name' => 'alt',
			'value' => '',
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_carousel_slide extends WPBakeryShortCode {}}


vc_map( array(
	'name' => 'Image Collage',
	'base' => 'clapat_collage',
	'icon' => 'icon-vc-clapat-rayden',
	'as_parent' => array('only' => 'clapat_collage_image'),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Collage with image popup', 'rayden'),
	'content_element' => true,
	'show_settings_on_create' => true,
	"params" => array(
        array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
    ),
	'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_clapat_collage extends WPBakeryShortCodesContainer {}}

vc_map( array(
	'name' => 'Collage Image',
	'base' => 'clapat_collage_image',
	'icon' => 'icon-vc-clapat-rayden',
	'as_child' => array('only' => 'clapat_collage' ),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Collage Image', 'rayden'),
	'params' => array(
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Collage Image Thumbnail', 'rayden'),
			'description' => esc_html__('Thumbnail image representing this ollage item, included in carousel and linking a high res version.', 'rayden'),
			'param_name' => 'thumb_img_id',
			'value' => '',
		),
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Collage Image', 'rayden'),
			'description' => esc_html__('Image representing this collage item opening in a popup', 'rayden'),
			'param_name' => 'img_id',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Image ALT', 'rayden'),
			'description' => esc_html__('The ALT attribute specifies an alternate text for an image, if the image cannot be displayed', 'rayden'),
			'param_name' => 'alt',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Collage Image Caption', 'rayden'),
			'description' => esc_html__('The caption of this collage item', 'rayden'),
			'param_name' => 'info',
			'value' => '',
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_clapat_collage_image extends WPBakeryShortCode {}}


vc_map( array(
	'name' => 'Popup Image',
	'base' => 'clapat_popup_image',
	'icon' => 'icon-vc-clapat-rayden',
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Image Popup', 'rayden'),
	'params' => array(
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Zoomed Image', 'rayden'),
			'description' => esc_html__('Zoomed image - usually a higher res image', 'rayden'),
			'param_name' => 'img_id',
			'value' => '',
		),
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Thumbnail Image', 'rayden'),
			'description' => esc_html__('The thumbnail', 'rayden'),
			'param_name' => 'thumb_id',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_clapat_popup_image extends WPBakeryShortCode {}}


vc_map( array(
	'name' => 'Captioned Image',
	'base' => 'clapat_captioned_image',
	'icon' => 'icon-vc-clapat-rayden',
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Captioned Image', 'rayden'),
	'params' => array(
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Image', 'rayden'),
			'description' => esc_html__('The image', 'rayden'),
			'param_name' => 'img_id',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('ALT', 'rayden'),
			'description' => esc_html__('ALT attribute.', 'rayden'),
			'param_name' => 'alt',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Caption', 'rayden'),
			'description' => esc_html__('Image caption.', 'rayden'),
			'param_name' => 'caption',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_clapat_captioned_image extends WPBakeryShortCode {}}


vc_map( array(
	'name' => 'Testimonials',
	'base' => 'testimonials',
	'icon' => 'icon-vc-clapat-rayden',
	'as_parent' => array('only' => 'testimonial'),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Testimonials Carousel', 'rayden'),
	'content_element' => true,
	'show_settings_on_create' => true,
	"params" => array(
        // add params same as with any other content element
        array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
    ),
	'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_testimonials extends WPBakeryShortCodesContainer {}}

vc_map( array(
	'name' => 'Testimonial',
	'base' => 'testimonial',
	'icon' => 'icon-vc-clapat-rayden',
	'as_child' => array('only' => 'testimonials' ),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Testimonial', 'rayden'),
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Name', 'rayden'),
			'description' => esc_html__('Name of the person or company this testimonial belongs to.', 'rayden'),
			'param_name' => 'name',
			'value' => '',
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => __('Content', 'rayden'),
			'param_name' => 'content',
			'value' => __('Content goes here', 'rayden'),
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_testimonial extends WPBakeryShortCode {}}


vc_map( array(
	'name' => 'Clients',
	'base' => 'clients',
	'icon' => 'icon-vc-clapat-rayden',
	'as_parent' => array('only' => 'client_item'),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Clients List', 'rayden'),
	'content_element' => true,
	'show_settings_on_create' => true,
	"params" => array(
        // add params same as with any other content element
        array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
    ),
	'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_clients extends WPBakeryShortCodesContainer {}}

vc_map( array(
	'name' => 'Client',
	'base' => 'client_item',
	'icon' => 'icon-vc-clapat-rayden',
	'as_child' => array('only' => 'clients' ),
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Client Logo or Image', 'rayden'),
	'params' => array(
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Client Logo or Image', 'rayden'),
			'description' => esc_html__('The client logo', 'rayden'),
			'param_name' => 'img_id',
			'value' => '',
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_client_item extends WPBakeryShortCode {}}

vc_map( array(
	'name' => 'Video Hosted',
	'base' => 'rayden_video',
	'icon' => 'icon-vc-clapat-rayden',
	'category' => esc_html__('Rayden - Elements', 'rayden'),
	'description' => esc_html__('Self hosted video', 'rayden'),
	'params' => array(
		array(
			'type' => 'attach_image',
			'holder' => 'div',
			'heading' => esc_html__('Cover Image', 'rayden'),
			'description' => esc_html__('Cover image for still video', 'rayden'),
			'param_name' => 'cover_img_id',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Webm URL', 'rayden'),
			'description' => esc_html__('URL of the self hosted video in webm format', 'rayden'),
			'param_name' => 'webm_url',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Mp4 URL', 'rayden'),
			'description' => esc_html__('URL of the self hosted video in mp4 format', 'rayden'),
			'param_name' => 'mp4_url',
			'value' => '',
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__('Extra Class Name', 'rayden'),
			'description' => esc_html__('Add here any extra CSS class name(s). Separate multiple classes with space.', 'rayden'),
			'param_name' => 'extra_class_name',
			'value' => '',
		),
	)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_rayden_video extends WPBakeryShortCode {}}

} // if vc_map function exists
?>