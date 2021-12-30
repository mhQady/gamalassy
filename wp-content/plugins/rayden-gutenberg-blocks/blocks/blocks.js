/**
 * Rayden Shortcodes Gutenberg Blocks
 *
 */
( function( blocks, blockEditor, i18n, element, components ) {
	var el = element.createElement;
	var __ = i18n.__;
	var RichText = blockEditor.RichText;
	var PlainText = blockEditor.PlainText;
	var MediaPlaceHolder = blockEditor.MediaPlaceHolder;
	var TextControl = components.TextControl;
	var TextareaControl = components.TextareaControl;
	var RangeControl = components.RangeControl;
	var ColorPaletteControl = components.ColorPalette;
	var SelectControl = components.SelectControl;
	var InspectorControls = blockEditor.InspectorControls;
	var MediaUpload = blockEditor.MediaUpload;
	var InnerBlocks = blockEditor.InnerBlocks;
	var AlignmentToolbar = blockEditor.AlignmentToolbar;
	var BlockControls = blockEditor.BlockControls;
 	
	/** Utils **/
	function normalizeUndef( x ){
		
		if (typeof x === 'undefined'){
			
			 return '';
		}
		else{
			
			return x;
		}
	}
	
	/** Container **/
	blocks.registerBlockType( 'rayden-gutenberg/container', {
		title: __( 'Rayden: Container', 'rayden-gutenberg' ),
		icon: 'analytics',
		category: 'rayden-block-category',
		attributes: {
			background_color: {
				type: 'string',
				default: '#f2f2f2'
			},
			padding_top: {
				type: 'number',
				default: 0
			},
			padding_bottom: {
				type: 'number',
				default: 0
			},
			padding_left: {
				type: 'number',
				default: 0
			},
			padding_right: {
				type: 'number',
				default: 0
			},
			alignment: {
				type: 'string',
				default: 'left'
			},
		}, 
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'container', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			const colors = [ 
				{ name: 'Default', color: '#f2f2f2' }, 
				{ name: 'White', color: '#ffffff' }, 
				{ name: 'Light Grey', color: '#bbbbbb' }, 
				{ name: 'Dark Grey', color: '#555555' }, 
				{ name: 'Black', color: '#000' },
			];
			
			function onChangeAlignment( newAlignment ) {
				props.setAttributes( { alignment: newAlignment === undefined ? 'none' : newAlignment } );
			}
			
			return	[ el( BlockControls,
							{ key: 'controls' },
							el(
								AlignmentToolbar,
								{
									value: props.attributes.alignment,
									onChange: onChangeAlignment,
								}
							)
						),
						el( 'div', { className: 'clapat-editor-block-wrapper clapat-editor-container'},
							el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Container', 'rayden-gutenberg' )),
							el( InnerBlocks, {} ),
							/*
							 * InspectorControls lets you add controls to the Block sidebar.
							 */
							el( InspectorControls, {},
								el( 'div', { className: 'components-panel__body is-opened' }, 
									el( 'strong', {}, __('Select Background Color:',  'rayden-gutenberg') ),
									el( 'div', { className : 'clapat-color-palette' },
										el( ColorPaletteControl, {
											colors: colors,
											value: props.attributes.background_color,
											onChange: ( value ) => { 
												props.setAttributes( { background_color: value === undefined ? 'transparent' : value } ); 
											},
										} )
									),
									el( 'div', { className : 'clapat-range-control' }, 
										el( RangeControl, {
											label: __('Padding Top (in pixels)',  'rayden-gutenberg'),
											value: props.attributes.padding_top,
											onChange: ( value ) => { 
												if (typeof value === "undefined") return;
												props.setAttributes( { padding_top: value } ); 
											},
											type: 'number',
											step: 10,
											min: 0,
											max: 100
										} ) ),
									el( 'div', { className : 'clapat-range-control' }, 
										el( RangeControl, {
											label: __('Padding Bottom (in pixels)',  'rayden-gutenberg'),
											value: props.attributes.padding_bottom,
											onChange: ( value ) => {
												if (typeof value === "undefined") return;
												props.setAttributes( { padding_bottom: value } ); 
											},
											type: 'number',
											step: 10,
											min: 0,
											max: 100
										} ) ),
									el( 'div', { className : 'clapat-range-control' }, 
										el( RangeControl, {
											label: __('Padding Left (in pixels)',  'rayden-gutenberg'),
											value: props.attributes.padding_left,
											onChange: ( value ) => {
												if (typeof value === "undefined") return;
												props.setAttributes( { padding_left: value } );
											},
											type: 'number',
											step: 10,
											min: 0,
											max: 100
										} ) ),
									el( 'div', { className : 'clapat-range-control' }, 
										el( RangeControl, {
											label: __('Padding Right (in pixels)',  'rayden-gutenberg'),
											value: props.attributes.padding_right,
											onChange: ( value ) => {
												if (typeof value === "undefined") return;
												props.setAttributes( { padding_right: value } );
											},
											type: 'number',
											step: 10,
											min: 0,
											max: 100
										} ) )
									)
								)
							) ];
		},

		save: function( props ) {
			
			return el( 'div', 
							{ 
								className: props.className,
								style : {
									'background-color': props.attributes.background_color,
									'padding-top': (props.attributes.padding_top !== 0) ? props.attributes.padding_top + 'px' : null,
									'padding-bottom': (props.attributes.padding_bottom !== 0) ? props.attributes.padding_bottom + 'px' : null,
									'padding-left': (props.attributes.padding_left !== 0) ? props.attributes.padding_left + 'px' : null,
									'padding-right': (props.attributes.padding_right !== 0) ? props.attributes.padding_right + 'px' : null,
									'text-align': props.attributes.alignment
								}
							}, InnerBlocks.Content() );
	
		},
	} );
	
	/** Half Background Container **/
	blocks.registerBlockType( 'rayden-gutenberg/half-background-container', {
		title: __( 'Rayden: Half Background Container', 'rayden-gutenberg' ),
		icon: 'analytics',
		category: 'rayden-block-category',
		attributes: {
			background_color: {
				type: 'string',
				default: '#141414'
			},
			background_type: {
				type: 'string',
				default: 'half-dark-section'
			},
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'container', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			const colors = [ 
				{ name: 'Default', color: '#f2f2f2' }, 
				{ name: 'White', color: '#ffffff' }, 
		
			];
			return	[ el( 'div', { className: 'clapat-editor-block-wrapper clapat-editor-container'},
							el( 'h4', { className: 'clapat-editor-block-title' }, __('Half Background Container', 'rayden-gutenberg' )),
							el( InnerBlocks, {} ),
							/*
							 * InspectorControls lets you add controls to the Block sidebar.
							 */
							el( InspectorControls, {},
								el( 'div', { className: 'components-panel__body is-opened' }, 
									el( 'strong', {}, __('Select Background Color:',  'rayden-gutenberg') ),
									el( 'div', { className : 'clapat-color-palette' },
										el( ColorPaletteControl, {
											colors: colors,
											value: props.attributes.background_color,
											onChange: ( value ) => { 
												props.setAttributes( { background_color: value === undefined ? 'transparent' : value } ); 
											},
										} )
									),
									el( SelectControl, {
										label: __('Background Type', 'rayden-gutenberg'),
										value: props.attributes.background_type,
										options : [
											{ label: __('Dark', 'rayden-gutenberg'), value: 'half-dark-section' },
											{ label: __('White',  'rayden-gutenberg'), value: 'half-white-section' },
										],
										onChange: ( value ) => { props.setAttributes( { background_type: value } ); },
									} ),
								)
							)
						) ];
		},
		save: function( props ) {
		
			return el( 'div', 
							{ 
								className: 'row-half-color ' + props.attributes.background_type + ' ' + props.className,
								'data-bgcolor' : props.attributes.background_color
							}, InnerBlocks.Content() );
		},
	} );
	
	/** Button **/
	blocks.registerBlockType( 'rayden-gutenberg/button', {
		title: __( 'Rayden: Button', 'rayden-gutenberg' ),
		icon: 'editor-removeformatting',
		category: 'rayden-block-category',
		attributes: {
			caption: {
				type: 'string',
				default: __( 'Caption', 'rayden-gutenberg' )
			},
			hover_caption: {
				type: 'string',
				default: __( 'Hover Caption', 'rayden-gutenberg' )
			},
			link: {
				type: 'string',
				default: 'http://'
			},
			target: {
				type: 'string',
				default: '_blank'
			},
			type: {
				type: 'string',
				default: 'normal'
			},
			rounded: {
				type: 'string',
				default: 'yes'
			},
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'button', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return [
				
				 el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
						el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Button', 'rayden-gutenberg' )),
						
						el( PlainText,
						{
							className: 'clapat-inline-caption',
							value: props.attributes.caption,
							onChange: ( value ) => { props.setAttributes( { caption: value } ); },
						}),
						el( PlainText,
						{
							className: 'clapat-inline-caption',
							value: props.attributes.hover_caption,
							onChange: ( value ) => { props.setAttributes( { hover_caption: value } ); },
						}),
						el( PlainText,
						{
							className: 'clapat-inline-content',
							value: props.attributes.link,
							onChange: ( value ) => { props.setAttributes( { link: value } ); },
						}),
						
						/*
						 * InspectorControls lets you add controls to the Block sidebar.
						 */
						el( InspectorControls, {},
							el( 'div', { className: 'components-panel__body is-opened' }, 
								el( SelectControl, {
									label: __('Type', 'rayden-gutenberg'),
									value: props.attributes.type,
									options : [
										{ label: __('Normal', 'rayden-gutenberg'), value: 'normal' },
										{ label: __('Outline',  'rayden-gutenberg'), value: 'outline' },
									],
									onChange: ( value ) => { props.setAttributes( { type: value } ); },
								} ),
								el( SelectControl, {
									label: __('Rounded', 'rayden-gutenberg'),
									value: props.attributes.rounded,
									options : [
										{ label: __('Yes', 'rayden-gutenberg'), value: 'yes' },
										{ label: __('No',  'rayden-gutenberg'), value: 'no' },
									],
									onChange: ( value ) => { props.setAttributes( { rounded: value } ); },
								} ),
								el( SelectControl, {
									label: __('Link Target', 'rayden-gutenberg'),
									value: props.attributes.target,
									options: [
										{ label: 'Blank', value: '_blank' },
										{ label: 'Self', value: '_self' },
									],
									onChange: ( value ) => { props.setAttributes( { target: value } ); },
								} ),
							),
						),
					)
			]
		},
		save: function( props ) {
		
			return '[button link="' + props.attributes.link + '" target="' + props.attributes.target + '" hover_caption="' + props.attributes.hover_caption + '" type="' + props.attributes.type + '" rounded="' + props.attributes.rounded + '" extra_class_name=""]' + props.attributes.caption + '[/button]'; 
		},
	} );
	
	/** Text Link **/
	blocks.registerBlockType( 'rayden-gutenberg/text-link', {
		title: __( 'Rayden: Text Link', 'rayden-gutenberg' ),
		icon: 'admin-links',
		category: 'rayden-block-category',
		attributes: {
			caption: {
				type: 'string',
				default: __( 'Read More', 'rayden-gutenberg' )
			},
			link: {
				type: 'string',
				default: 'http://'
			},
			target: {
				type: 'string',
				default: '_blank'
			}
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'text', 'rayden-gutenberg' ), __( 'link', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return [
				
				 el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
						el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Text Link', 'rayden-gutenberg' )),
						
						el( PlainText,
						{
							className: 'clapat-inline-caption',
							value: props.attributes.caption,
							onChange: ( value ) => { props.setAttributes( { caption: value } ); },
						}),
						el( PlainText,
						{
							className: 'clapat-inline-content',
							value: props.attributes.link,
							onChange: ( value ) => { props.setAttributes( { link: value } ); },
						}),
						
						/*
						 * InspectorControls lets you add controls to the Block sidebar.
						 */
						el( InspectorControls, {},
							el( 'div', { className: 'components-panel__body is-opened' }, 
								el( SelectControl, {
									label: __('Link Target', 'rayden-gutenberg'),
									value: props.attributes.target,
									options: [
										{ label: 'Blank', value: '_blank' },
										{ label: 'Self', value: '_self' },
									],
									onChange: ( value ) => { props.setAttributes( { target: value } ); },
								} ),
							),
						),
					)
			]
		},
		save: function( props ) {
		
			return '[text_link link="' + props.attributes.link + '" target="' + props.attributes.target + '" caption="' + props.attributes.caption + '" extra_class_name=""][/text_link]'; 
		},
	} );
	
	/** Title **/
	blocks.registerBlockType( 'rayden-gutenberg/title', {
		title: __( 'Rayden: Title', 'rayden-gutenberg' ),
		icon: 'editor-textcolor',
		category: 'rayden-block-category',
		attributes: {
			caption: {
				type: 'string',
				default: 'Title'
			},
			size: {
				type: 'string',
				default: 'h1'
			},
			underline: {
				type: 'string',
				default: 'no'
			},
			big: {
				type: 'string',
				default: 'no'
			}
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'title', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			if( props.attributes.underline == 'yes'){
				
				props.className = 'title-has-line';
			}
			if( props.attributes.big == 'yes'){
				
				props.className += ' big-title';
			}
			
			return [
				
				 el(  props.attributes.size, { className: props.className }, props.attributes.caption ),
				 
				/*
				 * InspectorControls lets you add controls to the Block sidebar.
				 */
				el( InspectorControls, {},
					el( 'div', { className: 'components-panel__body is-opened' }, 
						el( TextControl, {
							label: __('Caption', 'rayden-gutenberg'),
							value: props.attributes.caption,
							onChange: ( value ) => { props.setAttributes( { caption: value } ); },
						} ),
						el( SelectControl, {
							label: __('Size', 'rayden-gutenberg'),
							value: props.attributes.size,
							options: [
								{ label: 'H1', value: 'h1' },
								{ label: 'H2', value: 'h2' },
								{ label: 'H3', value: 'h3' },
								{ label: 'H4', value: 'h4' },
								{ label: 'H5', value: 'h5' },
								{ label: 'H6', value: 'h6' },
							],
							onChange: ( value ) => { props.setAttributes( { size: value } ); },
						} ),
						el( SelectControl, {
							label: __('Underline',  'rayden-gutenberg'),
							value: props.attributes.underline,
							options : [
								{ label: __('Yes',  'rayden-gutenberg'), value: 'yes' },
								{ label: __('No',  'rayden-gutenberg'), value: 'no' },
							],
							onChange: ( value ) => { props.setAttributes( { underline: value } ); },
						} ),
						el( SelectControl, {
							label: __('Big', 'rayden-gutenberg'),
							value: props.attributes.big,
							options: [
								{ label: __('Yes',  'rayden-gutenberg'), value: 'yes' },
								{ label: __('No',  'rayden-gutenberg'), value: 'no' },
							],
							onChange: ( value ) => { props.setAttributes( { big: value } ); },
						} ),
					),
				),
			]
		},
		save: function( props ) {
			
			if( props.attributes.underline == 'yes'){
				
				props.className = 'title-has-line';
			}
			if( props.attributes.big == 'yes'){
				
				props.className += ' big-title';
			}
			
			return el(  props.attributes.size, { className: props.className }, props.attributes.caption );
		},
	} );
	
	/** Marquee Content **/
	blocks.registerBlockType( 'rayden-gutenberg/marquee-content', {
		title: __( 'Rayden: Marquee Content', 'rayden-gutenberg' ),
		icon: 'editor-textcolor',
		category: 'rayden-block-category',
		attributes: {
			caption: {
				type: 'string',
				default: 'Content'
			},
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'marquee content', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return [
			
					el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
						el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Marquee Content', 'rayden-gutenberg' )),
						
						el( PlainText,
						{
							className: 'clapat-inline-caption',
							value: props.attributes.content,
							onChange: ( value ) => { props.setAttributes( { content: value } ); },
						}),
					
					)
			]
		},
		save: function( props ) {
		
			return '[marquee_content extra_class_name=""]' + props.attributes.content + '[/marquee_content]'; 
		},			
			
	} );

	/** Accordion **/
	const template_clapat_accordion = [
	  [ 'rayden-gutenberg/accordion-item', {} ], // [ blockName, attributes ]
	];
	
	blocks.registerBlockType( 'rayden-gutenberg/accordion', {
		title: __( 'Rayden: Accordion', 'rayden-gutenberg' ),
		icon: 'editor-justify',
		category: 'rayden-block-category',
		allowedBlocks: ['rayden-gutenberg/accordion-item'],

		keywords: [ __( 'clapat', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'accordion', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return	el( 'div', { className: 'clapat-editor-block-wrapper'},
							el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Accordion', 'clapat-blog-gutenberg' )),
							el( InnerBlocks, {allowedBlocks: ['rayden-gutenberg/accordion-item'], template: template_clapat_accordion} )
						);

		},

		save: function( props ) {
			
			return el( 'dl', { className: 'accordion ' + props.className }, InnerBlocks.Content() );
	
		},
	} );
	
	blocks.registerBlockType( 'rayden-gutenberg/accordion-item', {
		title: __( 'Rayden: Accordion Item', 'rayden-gutenberg' ),
		icon: 'editor-justify',
		category: 'rayden-block-category',
		parent: [ 'rayden-gutenberg/accordion' ],

		attributes: {
			title: {
				type: 'string',
				default: __( 'Accordion Title. Click to edit it.', 'rayden-gutenberg')
			},
			content: {
				type: 'string',
				default: __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non est nec orci ultricies fringilla. Nam ultrices sem in odio scelerisque, sed mollis magna tincidunt.', 'rayden-gutenberg')
			}
		},

		edit: function( props ) {
			
			return [
			
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( PlainText,
					{
						className: 'clapat-inline-caption',
						value: props.attributes.title,
						onChange: ( value ) => { props.setAttributes( { title: value } ); },
					}),
					
					el( PlainText, {
						className: 'clapat-inline-content',
						value: props.attributes.content,
						onChange: ( value ) => { props.setAttributes( { content: value } ); },
					} ),
				),
				
			];
		},

		save: function( props ) {
			
			return '[accordion_item title="' + props.attributes.title + '"]' + props.attributes.content + '[/accordion_item]'; 

		},
	} );
	
	/** Icon Service **/
	blocks.registerBlockType( 'rayden-gutenberg/icon-service', {
		title: __( 'Rayden: Icon Service', 'rayden-gutenberg' ),
		icon: 'editor-justify',
		category: 'rayden-block-category',
		attributes: {
			icon: {
				type: 'string',
				default: __( 'fa fa-cogs', 'rayden-gutenberg')
			},
			title: {
				type: 'string',
				default: __( 'Icon Service Title. Click to edit it.', 'rayden-gutenberg')
			},
			content: {
				type: 'string',
				default: __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non est nec orci ultricies fringilla. Nam ultrices sem in odio scelerisque, sed mollis magna tincidunt.', 'rayden-gutenberg')
			},
			
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ),  __( 'icon', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return [
				
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'h4', { className: 'clapat-editor-block-title' }, __( 'Rayden Icon Box', 'rayden-gutenberg' ) ),
					
					el( PlainText,
					{
						className: 'clapat-inline-caption',
						value: props.attributes.icon,
						onChange: ( value ) => { props.setAttributes( { icon: value } ); },
					}),
					
					el( PlainText,
					{
						className: 'clapat-inline-caption',
						value: props.attributes.title,
						onChange: ( value ) => { props.setAttributes( { title: value } ); },
					}),
					
					el( PlainText, {
						className: 'clapat-inline-content',
						value: props.attributes.content,
						onChange: ( value ) => { props.setAttributes( { content: value } ); },
					} ),
					
				),
				 
			]
		},
		save: function( props ) {
			
			return '[service icon="' + props.attributes.icon + '" title="' + props.attributes.title + '" extra_class_name=""]' + props.attributes.content + '[/service]'; 
		},
	} );
	
	/** Contact Box **/
	blocks.registerBlockType( 'rayden-gutenberg/contact-box', {
		title: __( 'Rayden: Contact Box', 'rayden-gutenberg' ),
		icon: 'phone',
		category: 'rayden-block-category',
		attributes: {
			icon: {
				type: 'string',
				default: __( 'fa fa-envelope', 'rayden-gutenberg')
			},
			title: {
				type: 'string',
				default: __( 'Contact Box Title. Click to edit it.', 'rayden-gutenberg')
			},
			content: {
				type: 'string',
				default: __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non est nec orci ultricies fringilla. Nam ultrices sem in odio scelerisque, sed mollis magna tincidunt.', 'rayden-gutenberg')
			},
			
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ),  __( 'contact', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return [
				
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'h4', { className: 'clapat-editor-block-title' }, __( 'Rayden Icon Box', 'rayden-gutenberg' ) ),
					
					el( PlainText,
					{
						className: 'clapat-inline-caption',
						value: props.attributes.icon,
						onChange: ( value ) => { props.setAttributes( { icon: value } ); },
					}),
					
					el( PlainText,
					{
						className: 'clapat-inline-caption',
						value: props.attributes.title,
						onChange: ( value ) => { props.setAttributes( { title: value } ); },
					}),
					
					el( PlainText, {
						className: 'clapat-inline-content',
						value: props.attributes.content,
						onChange: ( value ) => { props.setAttributes( { content: value } ); },
					} ),
					
				),
				 
			]
		},
		save: function( props ) {
			
			return '[contact_box icon="' + props.attributes.icon + '" title="' + props.attributes.title + '" extra_class_name=""]' + props.attributes.content + '[/contact_box]'; 
		},
	} );
	
	/** Image Collage **/
	const template_clapat_collage = [
	  [ 'rayden-gutenberg/collage-image', {} ], // [ blockName, attributes ]
	];
	
	blocks.registerBlockType( 'rayden-gutenberg/collage', {
		title: __( 'Rayden: Collage', 'rayden-gutenberg' ),
		icon: 'layout',
		category: 'rayden-block-category',
		allowedBlocks: ['rayden-gutenberg/collage-image'],
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'collage', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return	el( 'div', { className: 'clapat-editor-block-wrapper clapat-editor-collage'},
							el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Collage', 'rayden-gutenberg' )),
							el( InnerBlocks, {allowedBlocks: ['rayden-gutenberg/collage-image'], template: template_clapat_collage} )
						);

		},

		save: function( props ) {
			
			return el( 'div', {id: 'justified-grid', className: props.className }, InnerBlocks.Content() );
	
		},
	} );
	
	blocks.registerBlockType( 'rayden-gutenberg/collage-image', {
		title: __( 'Rayden: Collage Image', 'rayden-gutenberg' ),
		icon: 'format-image',
		category: 'rayden-block-category',
		parent: [ 'rayden-gutenberg/collage' ],

		attributes: {
			thumb_image: {
				type: 'string',
				default: ''
			},
			thumb_image_id: {
				type: 'number',
			},
			full_image: {
				type: 'string',
				default: ''
			},
			full_image_id: {
				type: 'number',
			},
			alt: {
				type: 'string',
				default: ''
			},
			info: {
				type: 'string',
				default: __( 'Caption Text', 'rayden-gutenberg' )
			},
		},

		edit: function( props ) {
			
			var onSelectThumbnailImage = function( media ) {
				return props.setAttributes( {
					thumb_image: media.url,
					thumb_image_id: media.id,
				} );
			};
			var onSelectImage = function( media ) {
				return props.setAttributes( {
					full_image: media.url,
					full_image_id: media.id,
				} );
			};
			return [
			
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'div', { className: 'clapat-editor-image' },
						el( MediaUpload, {
							onSelect: onSelectThumbnailImage,
							type: 'image',
							value: props.attributes.thumb_image_id,
							render: function( obj ) {
								return el( components.Button, {
										className: props.attributes.thumb_image_id ? 'clapat-image-added' : 'button button-large',
										onClick: obj.open
									},
									! props.attributes.thumb_image_id ? i18n.__( 'Upload Collage Thumbnail Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.thumb_image } ),
									el ('p', {}, __( 'Thumb Image', 'rayden-gutenberg' ) )
								);
							}
						} )
					),
					
					el( 'div', { className: 'clapat-editor-image' },
						el( MediaUpload, {
							onSelect: onSelectImage,
							type: 'image',
							value: props.attributes.full_image_id,
							render: function( obj ) {
								return el( components.Button, {
										className: props.attributes.full_image_id ? 'clapat-image-added' : 'button button-large',
										onClick: obj.open
									},
									! props.attributes.full_image_id ? i18n.__( 'Upload Collage Full Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.full_image } ),
									el ('p', {}, __( 'Full Image', 'rayden-gutenberg' ) )
								);
							}
						} )
					),

				),
				/*
				 * InspectorControls lets you add controls to the Block sidebar.
				 */
				el( InspectorControls, {},
					el( 'div', { className: 'components-panel__body is-opened' }, 
						el( TextControl, {
							label: __( 'ALT attribute', 'rayden-gutenberg' ),
							value: props.attributes.alt,
							onChange: ( value ) => { props.setAttributes( { alt: value } ); },
						} ),
						
						el( TextControl, {
							label: __( 'Collage Image Info', 'rayden-gutenberg' ),
							value: props.attributes.info,
							onChange: ( value ) => { props.setAttributes( { info: value } ); },
						} ),
					),
				),
			];
		},

		save: function( props ) {
			
			return '[clapat_collage_image thumb_img_url="' + props.attributes.thumb_image + '" img_url="' + props.attributes.full_image + '" alt="' + props.attributes.alt + '" info="' + props.attributes.info + '"][/clapat_collage_image]'; 

		},
	} );
	
	/** Image Carousel **/
	const template_clapat_image_carousel = [
	  [ 'rayden-gutenberg/carousel-image', {} ], // [ blockName, attributes ]
	];
	
	blocks.registerBlockType( 'rayden-gutenberg/carousel', {
		title: __( 'Rayden: Image Carousel', 'rayden-gutenberg' ),
		icon: 'slides',
		category: 'rayden-block-category',
		allowedBlocks: ['rayden-gutenberg/carousel-image'],
		attributes: {
			loop: {
				type: 'string',
				default: 'no'
			}
		},
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'carousel', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return	[
							el( 'div', { className: 'clapat-editor-block-wrapper clapat-editor-carousel'},
								el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Carousel', 'rayden-gutenberg' )),
								el( InnerBlocks, {allowedBlocks: ['rayden-gutenberg/carousel-image'], template: template_clapat_image_carousel} )
							),
							/*
							 * InspectorControls lets you add controls to the Block sidebar.
							 */
							el( InspectorControls, {},
								el( 'div', { className: 'components-panel__body is-opened' }, 
									el( SelectControl, {
										label: __('Loop', 'rayden-gutenberg'),
										value: props.attributes.loop,
										options : [
											{ label: __('Yes', 'rayden-gutenberg'), value: 'yes' },
											{ label: __('No',  'rayden-gutenberg'), value: 'no' },
										],
										onChange: ( value ) => { props.setAttributes( { loop: value } ); },
									} )
								),
							),
						];
		},

		save: function( props ) {
			
			let inner_el = el( 'div', { className: 'swiper-wrapper' }, InnerBlocks.Content() );
			let carousel_class = 'content-carousel';
			if( props.attributes.loop == 'yes' ){
				
				carousel_class = 'content-looped-carousel';
			}
			return el( 'div', { className: 'swiper-container ' + carousel_class + ' disable-drag' }, inner_el  );
	
		},
	} );
	
	blocks.registerBlockType( 'rayden-gutenberg/carousel-image', {
		title: __( 'Rayden: Carousel Image', 'rayden-gutenberg' ),
		icon: 'format-image',
		category: 'rayden-block-category',
		parent: [ 'rayden-gutenberg/carousel' ],

		attributes: {
			img_url: {
				type: 'string',
				default: ''
			},
			img_id: {
				type: 'number',
			},
			alt: {
				type: 'string',
				default: ''
			},
		},

		edit: function( props ) {
			
			var onSelectImage = function( media ) {
				return props.setAttributes( {
					img_url: media.url,
					img_id: media.id,
				} );
			};
			return [
			
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'div', { className: 'clapat-editor-image' },
						el( MediaUpload, {
							onSelect: onSelectImage,
							type: 'image',
							value: props.attributes.img_id,
							render: function( obj ) {
								return el( components.Button, {
										className: props.attributes.img_id ? 'clapat-image-added' : 'button button-large',
										onClick: obj.open
									},
									! props.attributes.img_id ? i18n.__( 'Upload Carousel Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.img_url } ),
									el ('p', {}, __( 'Carousel Image', 'rayden-gutenberg' ) )
								);
							}
						} )
					),

				),
				/*
				 * InspectorControls lets you add controls to the Block sidebar.
				 */
				el( InspectorControls, {},
					el( 'div', { className: 'components-panel__body is-opened' }, 
						el( TextControl, {
							label: __( 'ALT attribute', 'rayden-gutenberg' ),
							value: props.attributes.alt,
							onChange: ( value ) => { props.setAttributes( { alt: value } ); },
						} ),
					),
				),
			];
		},

		save: function( props ) {
			
			return '[carousel_slide img_url="' + props.attributes.img_url + '" alt="' + props.attributes.alt + '"][/carousel_slide]'; 

		},
	} );
	
	/** Image Slider **/
	const template_clapat_image_slider = [
	  [ 'rayden-gutenberg/slider-image', {} ], // [ blockName, attributes ]
	];
	
	blocks.registerBlockType( 'rayden-gutenberg/slider', {
		title: __( 'Rayden: Image Slider', 'rayden-gutenberg' ),
		icon: 'images-alt2',
		category: 'rayden-block-category',
		allowedBlocks: ['rayden-gutenberg/slider-image'],
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'slider', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return	el( 'div', { className: 'clapat-editor-block-wrapper clapat-editor-slider'},
							el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Slider', 'rayden-gutenberg' )),
							el( InnerBlocks, {allowedBlocks: ['rayden-gutenberg/slider-image'], template: template_clapat_image_slider} )
						);

		},

		save: function( props ) {
			
			let inner_el = el( 'div', { className: 'swiper-wrapper' }, InnerBlocks.Content() );
			let button_next_el =  el( 'div', { className: 'slider-button-next' } );
			let button_prev_el =  el( 'div', { className: 'slider-button-prev' } );
			return el( 'div', { className: 'swiper-container content-slider disable-drag' }, inner_el, button_next_el, button_prev_el  );
	
		},
	} );
	
	blocks.registerBlockType( 'rayden-gutenberg/slider-image', {
		title: __( 'Rayden: Slider Image', 'rayden-gutenberg' ),
		icon: 'format-image',
		category: 'rayden-block-category',
		parent: [ 'rayden-gutenberg/slider' ],

		attributes: {
			img_url: {
				type: 'string',
				default: ''
			},
			img_id: {
				type: 'number',
			},
			alt: {
				type: 'string',
				default: ''
			},
		},

		edit: function( props ) {
			
			var onSelectImage = function( media ) {
				return props.setAttributes( {
					img_url: media.url,
					img_id: media.id,
				} );
			};
			return [
			
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'div', { className: 'clapat-editor-image' },
						el( MediaUpload, {
							onSelect: onSelectImage,
							type: 'image',
							value: props.attributes.img_id,
							render: function( obj ) {
								return el( components.Button, {
										className: props.attributes.img_id ? 'clapat-image-added' : 'button button-large',
										onClick: obj.open
									},
									! props.attributes.img_id ? i18n.__( 'Upload Slider Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.img_url } ),
									el ('p', {}, __( 'Slider Image', 'rayden-gutenberg' ) )
								);
							}
						} )
					),

				),
				/*
				 * InspectorControls lets you add controls to the Block sidebar.
				 */
				el( InspectorControls, {},
					el( 'div', { className: 'components-panel__body is-opened' }, 
						el( TextControl, {
							label: __( 'ALT attribute', 'rayden-gutenberg' ),
							value: props.attributes.alt,
							onChange: ( value ) => { props.setAttributes( { alt: value } ); },
						} ),
					),
				),
			];
		},

		save: function( props ) {
			
			return '[general_slide img_url="' + props.attributes.img_url + '" alt="' + props.attributes.alt + '"][/general_slide]'; 

		},
	} );
		
	/** Popup Image **/
	blocks.registerBlockType( 'rayden-gutenberg/popup-image', {
		title: __( 'Rayden: Popup Image', 'rayden-gutenberg' ),
		icon: 'format-image',
		category: 'rayden-block-category',
		
		attributes: {
			thumb_image: {
				type: 'string',
				default: ''
			},
			thumb_image_id: {
				type: 'number',
			},
			full_image: {
				type: 'string',
				default: ''
			},
			full_image_id: {
				type: 'number',
			},
			
		},

		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'popup', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			var onSelectThumbnailImage = function( media ) {
				return props.setAttributes( {
					thumb_image: media.url,
					thumb_image_id: media.id,
				} );
			};
			var onSelectImage = function( media ) {
				return props.setAttributes( {
					full_image: media.url,
					full_image_id: media.id,
				} );
			};
				
			return [
			
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'h4', { className: 'clapat-editor-block-title' }, __( 'Clapat Popup Image', 'rayden-gutenberg' )),
					
					el( 'div', { className: 'clapat-editor-image' },
						el( MediaUpload, {
							onSelect: onSelectThumbnailImage,
							type: 'image',
							value: props.attributes.thumb_image_id,
							render: function( obj ) {
								return el( components.Button, {
										className: props.attributes.thumb_image_id ? 'clapat-image-added' : 'button button-large',
										onClick: obj.open
									},
									! props.attributes.thumb_image_id ? i18n.__( 'Upload Popup Thumbnail Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.thumb_image } ),
									el ('p', {}, __( 'Thumb Image', 'rayden-gutenberg' ) )
								);
							}
						} )
					),
					
					el( 'div', { className: 'clapat-editor-image' },
						el( MediaUpload, {
							onSelect: onSelectImage,
							type: 'image',
							value: props.attributes.full_image_id,
							render: function( obj ) {
								return el( components.Button, {
										className: props.attributes.full_image_id ? 'clapat-image-added' : 'button button-large',
										onClick: obj.open
									},
									! props.attributes.full_image_id ? i18n.__( 'Upload Popup Full Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.full_image } ),
									el ('p', {}, __( 'Full Image', 'rayden-gutenberg' ) )
								);
							}
						} )
					),

				),
				
			];
		},

		save: function( props ) {
			
			return '[clapat_popup_image img_url="' + props.attributes.full_image + '" img_id="' + props.attributes.full_image_id + '" thumb_url="' + props.attributes.thumb_image + '" thumb_id="' + props.attributes.thumb_image_id + '" extra_class_name=""][/clapat_popup_image]'; 

		},
	} );
	
	/** Testimonials **/
	const template_clapat_testimonials = [
	  [ 'rayden-gutenberg/testimonial', {} ], // [ blockName, attributes ]
	];

	blocks.registerBlockType( 'rayden-gutenberg/testimonials', {
		title: __( 'Rayden: Testimonials', 'rayden-gutenberg' ),
		icon: 'editor-quote',
		category: 'rayden-block-category',
		allowedBlocks: ['rayden-gutenberg/testimonial'],
	
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'testimonial', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return	el( 'div', { className: 'clapat-editor-block-wrapper'},
							el( 'h3', { className: 'clapat-editor-block-title' }, __( 'Rayden Testimonials', 'rayden-gutenberg' )),
							el( InnerBlocks, {allowedBlocks: ['rayden-gutenberg/testimonial'], template: template_clapat_testimonials } )
						);

		},

		save: function( props ) {
			
			return el( 'div', { className: 'text-carousel' }, InnerBlocks.Content() );
	
		},
	} );
	
	blocks.registerBlockType( 'rayden-gutenberg/testimonial', {
		title: __( 'Rayden: Testimonial', 'rayden-gutenberg' ),
		icon: 'editor-quote',
		category: 'rayden-block-category',
		parent: [ 'rayden-gutenberg/testimonials' ],

		attributes: {
			name: {
				type: 'string',
				default: __( 'Reviewer Name. Click to edit it.', 'rayden-gutenberg' )
			},
			content: {
				type: 'string',
				default: __( 'This is a review placeholder. Click to edit it.', 'rayden-gutenberg' )
			},
		},

		edit: function( props ) {
			
			var content = props.attributes.content;
			function onChangeContent( newContent ) {
				props.setAttributes( { content: newContent } );
			}
			
			return [
			
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'h3', { className: 'clapat-editor-block-title' }, __( 'Rayden - Testimonial', 'rayden-gutenberg' )),
					
					el( PlainText,
					{
						value: props.attributes.content,
						onChange: ( value ) => { props.setAttributes( { content: value } ); },
					}),
					
					el( PlainText, {
						value: props.attributes.name,
						onChange: ( value ) => { props.setAttributes( { name: value } ); },
					} ),
					
				),
				
			];
		},

		save: function( props ) {
			
			return '[testimonial name="' + props.attributes.name + '"]' + props.attributes.content + '[/testimonial]'; 

		},
	} );
	
	/** Clients **/
	const template_clapat_clients = [
	  [ 'rayden-gutenberg/client', {} ], // [ blockName, attributes ]
	];

	blocks.registerBlockType( 'rayden-gutenberg/clients', {
		title: __( 'Rayden: Clients', 'rayden-gutenberg' ),
		icon: 'businessman',
		category: 'rayden-block-category',
		allowedBlocks: ['rayden-gutenberg/client'],
	
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'client', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return	el( 'div', { className: 'clapat-editor-block-wrapper'},
							el( 'h3', { className: 'clapat-editor-block-title' }, __( 'Rayden Clients', 'rayden-gutenberg' )),
							el( InnerBlocks, {allowedBlocks: ['rayden-gutenberg/client'], template: template_clapat_clients } )
						);

		},

		save: function( props ) {
			
			return el( 'ul', { className: 'clients-table' }, InnerBlocks.Content() );
	
		},
	} );
	
	blocks.registerBlockType( 'rayden-gutenberg/client', {
		title: __( 'Rayden: Client', 'rayden-gutenberg' ),
		icon: 'editor-quote',
		category: 'rayden-block-category',
		parent: [ 'rayden-gutenberg/clients' ],

		attributes: {
			img_url: {
				type: 'string',
				default: ''
			},
			img_id: {
				type: 'number',
			},
		},

		edit: function( props ) {
			
			var onSelectImage = function( media ) {
				return props.setAttributes( {
					img_url: media.url,
					img_id: media.id,
				} );
			};
			
			return [
			
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'div', { className: 'clapat-editor-image' },
						el( MediaUpload, {
							onSelect: onSelectImage,
							type: 'image',
							value: props.attributes.img_id,
							render: function( obj ) {
								return el( components.Button, {
										className: props.attributes.img_id ? 'clapat-image-added' : 'button button-large',
										onClick: obj.open
									},
									! props.attributes.img_id ? i18n.__( 'Upload Client Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.img_url } ),
									el ('p', {}, __( 'Client Image', 'rayden-gutenberg' ) )
								);
							}
						} )
					),
					
				),
				
			];
		},

		save: function( props ) {
			
			return '[client_item img_url="' + props.attributes.img_url + '"][/client_item]'; 

		},
	} );
	
	/** Hosted Video **/
	blocks.registerBlockType( 'rayden-gutenberg/video-hosted', {
		title: __( 'Rayden: Hosted Video', 'rayden-gutenberg' ),
		icon: 'video-alt',
		category: 'rayden-block-category',
		attributes: {
			cover_image: {
				type: 'string',
				default: ''
			},
			cover_image_id: {
				type: 'number',
			},
			webm_url: {
				type: 'string',
				default: 'http://'
			},
			mp4_url: {
				type: 'string',
				default: 'http://'
			},
			
		},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ), __( 'video', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			var onSelectImage = function( media ) {
				return props.setAttributes( {
					cover_image: media.url,
					cover_image_id: media.id,
				} );
			};
			
			return [
				
				 el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
						el( 'h4', { className: 'clapat-editor-block-title' }, __('Rayden Hosted Video', 'rayden-gutenberg' )),
						
						el( 'div', { className: 'clapat-editor-image' },
							el( MediaUpload, {
								onSelect: onSelectImage,
								type: 'image',
								value: props.attributes.cover_image_id,
								render: function( obj ) {
									return el( components.Button, {
											className: props.attributes.cover_image_id ? 'clapat-image-added' : 'button button-large',
											onClick: obj.open
										},
										! props.attributes.cover_image_id ? i18n.__( 'Upload Video Cover Image', 'rayden-gutenberg' ) : el( 'img', { src: props.attributes.cover_image } ),
										el ('p', {}, __( 'Cover Image', 'rayden-gutenberg' ) )
									);
								}
							} ),
						),
						
						el ('p', { className: 'clapat-editor-label' }, __( 'MP4 video url:', 'rayden-gutenberg' ) ),
						
						el( PlainText,
						{
							value: props.attributes.mp4_url,
							className: 'clapat-inline-content',
							onChange: ( value ) => { props.setAttributes( { mp4_url: value } ); },
						}),
						
						el ('p', { className: 'clapat-editor-label' }, __( 'Webm video url:', 'rayden-gutenberg' ) ),
						
						el( PlainText,
						{
							value: props.attributes.webm_url,
							className: 'clapat-inline-content',
							onChange: ( value ) => { props.setAttributes( { webm_url: value } ); },
						}),
					)
			]
		},
		save: function( props ) {
			
			return '[rayden_video cover_img_url="' + props.attributes.cover_image + '" mp4_url="' + props.attributes.mp4_url + '" webm_url="' + props.attributes.webm_url + '" extra_class_name=""][/rayden_video]'; 
		},
	} );
	

	/** Google Map **/
	blocks.registerBlockType( 'rayden-gutenberg/google-map', {
		title: __( 'Rayden: Google Map', 'rayden-gutenberg' ),
		icon: 'admin-site',
		category: 'rayden-block-category',
		attributes: {	},
		
		keywords: [ __( 'rayden', 'rayden-gutenberg'), __( 'shortcode', 'rayden-gutenberg' ),  __( 'map', 'rayden-gutenberg' ) ],
		
		edit: function( props ) {
			
			return [
				
				el( 'div', { className: 'clapat-editor-block-wrapper'},  
					
					el( 'h4', { className: 'clapat-editor-block-title' }, __( 'Rayden Google Map', 'rayden-gutenberg' ) ),
					
					el( 'span', { className: 'clapat-inline-caption' },  __( 'Set google map properties in theme options - map.', 'rayden-gutenberg' ) ),
				),
			]
		},
		save: function( props ) {
			
			return '[rayden_map][/rayden_map]'; 
		},
	} );
	
}(
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.i18n,
	window.wp.element,
	window.wp.components
) );
