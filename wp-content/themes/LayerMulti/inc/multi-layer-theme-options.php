<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "multi_layer";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Multi Layer Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Multi Layer Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
   /* Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework-demo' ),
                'desc'     => __( 'Example description.', 'redux-framework-demo' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'redux-framework-demo' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );*/

    Redux::setSection($opt_name,array(
        'id' => 'header_options',
        'title' => 'Header Options',
        'desc' =>'This is header options',
        'icon' => 'el el-home-alt'
    ));

    Redux::setSection($opt_name,array(
        'id' => 'header_sub_options',
        'title' => 'Site Logo',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'site_logo',
            'title' => 'Site  Logo',
            'url'=>true,
            'desc' => 'Upload Your Logo',
            'type' => 'media',
            'default' => array(
                'url'=> get_template_directory_uri().'/images/templatemo_logo.png'
                )
            ),
        array(
            'id' => 'title_description',
            'title' => 'Logo Description',
            'type' => 'text',
            'default' => 'free website templates',
            
            )
        )
    ));


    Redux::setSection($opt_name,array(
        'id' => 'footer_options',
        'title' => 'Footer Options',
        'desc' =>'This is footer options',
        'icon' => 'el el-folder-close'
    ));
    
    Redux::setSection($opt_name,array(
        'id' => 'footer_sub_options',
        'title' => 'Copywrite Options',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'copy_txtd',
            'title' => 'Copywrite Text',
            'type' => 'editor',
            'default' => 'Copyright © 2048 Your Company Name | Website Templates by Free CSS Templates',
            'args' => array(
                'wpautop' => false
                )
            )
        )
    ));


    Redux::setSection($opt_name,array(
        'id' => 'footer_sub_options_col_1',
        'title' => 'Column one',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'col_1_title',
            'title' => 'Title',
            'type' => 'text',
            'default' => 'Contacts',
            
            ),
        array(
            'id' => 'col_1_icon',
            'title' => 'icon',
            'type' => 'text',
            'default' => 'fa-map-marker',
            
            ),
            array(
            'id' => 'col_1_txtd',
            'title' => 'Column One Text',
            'type' => 'editor',
            'default' => '<p class="footer-contact">
                        Via Ludovisi 39-45, Rome, 54267, Italy<br>
                        Phone: 1.800.245.356 Fax: 1.800.245.357<br>
                        Email: hello@LawOffice.org<br>
                    </p>',
            
            )
        
        )
    ));

     Redux::setSection($opt_name,array(
        'id' => 'social_icons',
        'title' => 'Social Icons',
        'desc' =>'This is social icon options',
        'icon' => 'el el-folder-close'
    ));

      Redux::setSection($opt_name,array(
        'id' => 'social_icon_1',
        'title' => 'Social Icon 1',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'text_1',
            'title' => 'Follow',
            'type' => 'text',
            'default' => 'FOLLOW US',
            
            ),
        array(
            'id' => 'text_2',
            'title' => 'On',
            'type' => 'text',
            'default' => 'on Twitter',
            
            ),        
        array(
            'id' => 'text_3',
            'title' => 'Link',
            'type' => 'text',
            'default' => '//www.templatemo.com',
            
            ),
        array(
            'id' => 'text_4',
            'title' => 'Target',
            'type' => 'text',
            'default' => '_parent',
            
            ),
         array(
            'id' => 'social_icon_up',
            'title' => 'Social Icon 1',
            'url'=>true,
            'desc' => 'Upload Your Icon',
            'type' => 'media',
            'default' => array(
                'url'=> get_template_directory_uri().'/images/twitter.png'
                )
            )
        
        )
    ));

      Redux::setSection($opt_name,array(
        'id' => 'social_icon_2',
        'title' => 'Social Icon 2',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'text_1_2',
            'title' => 'Follow',
            'type' => 'text',
            'default' => 'SUBSCRIBE',
            
            ),
        array(
            'id' => 'text_2_2',
            'title' => 'On',
            'type' => 'text',
            'default' => 'rss feeds',
            
            ),
         array(
            'id' => 'text_3_3',
            'title' => 'Link',
            'type' => 'text',
            'default' => '#',
            
            ),
         array(
            'id' => 'social_icon_up_2',
            'title' => 'Social Icon 2',
            'url'=>true,
            'desc' => 'Upload Your Icon',
            'type' => 'media',
            'default' => array(
                'url'=> get_template_directory_uri().'/images/rss.png'
                )
            )
        
        )
    ));

      Redux::setSection($opt_name,array(
        'id' => 'contact_page_options',
        'title' => 'Contact Page',
        'desc' =>'This is contact page options',
        'icon' => 'el el-folder-close'
    ));


       Redux::setSection($opt_name,array(
        'id' => 'contact_page',
        'title' => 'Contact Page',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'contact_title',
            'title' => 'Contact Title',
            'type' => 'text',
            'default' => 'Company Name',
            
            ),
        array(
            'id' => 'contact_description',
            'title' => 'Contact Description',
            'type' => 'editor',
            'default' => '    120-240 Quisque odio quam, <br />
        Pulvinar sit amet convallis eget, 10980<br />
        Venenatis ut turpis<br /><br />
        <strong>Email:</strong> info@yourcompany.com  
        
        <br />
        Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.<div class="cleaner_h40"></div>',
             'args' => array(
                'wpautop' => false
                )
            ),  
        array(
            'id' => 'send_us',
            'title' => 'Send Us Message title',
            'type' => 'text',
            'default' => 'Send us a message now!',
            
            ),             
        )
    ));


    Redux::setSection($opt_name,array(
        'id' => 'home_page_options',
        'title' => 'Home Page',
        'desc' =>'This is home page options',
        'icon' => 'el el-folder-close'
    ));

      Redux::setSection($opt_name,array(
        'id' => 'page_titles',
        'title' => 'Page Titles',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'home_title_1',
            'title' => 'Home Title 1',
            'type' => 'text',
            'default' => 'Multi Layer Website',
            
            ),
        array(
            'id' => 'home_description_1',
            'title' => 'Home Description 1',
            'type' => 'editor',
            'default' => 'Multi Layer is a full-site <a href="http://www.templatemo.com/page/1" target="_parent">free website template</a> with total 5 different pages. You may download, modify and apply this template for your websites. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Credit goes to <a href="http://www.softfacade.com" target="_blank">Soft Facade</a> for icons. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. <a href="#">Nam et tellus libero</a>.
<div class="cleaner_h40"></div>',
            
            ),
        array(
            'id' => 'home_title_2',
            'title' => 'Home Title 2',
            'type' => 'text',
            'default' => 'Testimonials',
            
            ),
        array(
            'id' => 'home_description_2',
            'title' => 'Home Description 2',
            'type' => 'editor',
            'default' => '<blockquote>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor.

<cite>Web Designer - <a href="http://www.templatemo.com" target="_parent">templatemo.com</a></cite></blockquote>',
            
            ),
        array(
            'id' => 'product_title',
            'title' => 'Product Title',
            'type' => 'text',
            'default' => 'Quality Products',
            
            ),
        array(
            'id' => 'product_description',
            'title' => 'Product Description',
            'type' => 'editor',
            'default' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquam velit a magna sodales quis elementum ipsum auctor. Quisque sem orci, malesuada eu blandit et, bibendum facilisis mi. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.',
            
            ),
        array(
            'id' => 'gallery_title',
            'title' => 'Gallery TItle',
            'type' => 'text',
            'default' => 'Website Templates Gallery',
            
            ),
        array(
            'id' => 'gallery_description',
            'title' => 'Gallery Description',
            'type' => 'editor',
            'default' => 'Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero.',
            
            ),
        
        
        )
    ));

      Redux::setSection($opt_name,array(
        'id' => 'section_sorter',
        'title' => 'Section sorter',
        'icon' => 'el el-certificate'
    ));

      Redux::setSection($opt_name,array(
        'id' => 'section_sorter_sub',
        'title' => 'Section Sorter Options',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'sorter_options',
            'title' => 'Set Your sort',         
            'type'=>'sorter',
            'options' => array(
                'Active' => array(
                        'sidebar'=> 'Home  sidebar'
                    ),
                'Deactive' => array(
                
                )
                )
            )
        )
    ));

    Redux::setSection($opt_name,array(
        'id' => 'appearance_options',
        'title' => 'Appearance',
        'icon' => 'el el-certificate'
    ));
    
        Redux::setSection($opt_name,array(
        'id' => 'change_h2_and_p_color',
        'title' => 'Color Options',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'h2_color_typo',
            'title' => 'h2 color Typography',            
            'type'=>'typography',
            'output'=>array(
                'h2'
            )
            ),
        array(
            'id' => 'p_color_typo',
            'title' => 'p color Typography',            
            'type'=>'typography',
            'output'=>array(
                'p'
            )
            ),
            )
        )
    );
    /*
     * <--- END SECTIONS
     */
