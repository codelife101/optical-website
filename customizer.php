<?php

function wpb_customize_register($wp_customize){

    // theme colours

    $wp_customize->add_section( 'theme colours' , array(
        'title' => __('theme colours', 'optical-theme'),
        'description' => sprintf(__('Options for theme colours','optical-theme')),
        'priority' => 129
      ));

      $wp_customize->add_setting( 'banner_headings' , array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
 
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_headings_control', array(
        'label'      => __( 'Banner Headings', 'optical-theme' ),
     'description' => 'Change the of banner headings',
        'section'    => 'theme colours',
        'settings'   => 'banner_headings',
    ) ) );
 

        

    // end of theme colours

    $wp_customize->add_section( 'home page' , array(
        'title' => __('Home Page', 'optical-theme'),
        'description' => sprintf(__('Options for home page','optical-theme')),
        'priority' => 130
      ));

    $wp_customize->add_setting('home_banner_image',array(
        'default' => get_bloginfo('template_directory').'/images/homeBanner.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'home_banner_image', array(
        'label' =>__('Home banner image','optical-theme'),
        'section' => 'home page',
        'settings' => 'home_banner_image',
        'priority' =>1
    )));

    $wp_customize->add_setting('top_right_image',array(
        'default' => get_bloginfo('template_directory').'/images/skate.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'top_right_image', array(
        'label' =>__('Top right image','optical-theme'),
        'section' => 'home page',
        'settings' => 'top_right_image',
        'priority' =>4
    )));


      $wp_customize->add_setting('banner_heading',array(
          'default' => _x('OPTICAL','optical-theme'),
          'type' => 'theme_mod'
      ));

      $wp_customize->add_control('banner_heading',array(
          'label' =>__('Banner Heading','optical-theme'),
          'section' => 'home page',
          'priority' =>2
      ));

      $wp_customize->add_setting('banner_text',array(
        'default' => _x('providing oppourtunities to people with epilepsy','optical-theme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('banner_text',array(
        'label' =>__('Banner Text','optical-theme'),
        'section' => 'home page',
        'priority' =>3
    ));


    // front page body text




    $wp_customize->add_setting('what_we_do_text',array(
      'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
      Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec. Praesent eget nisi vitae diam ullamcorper 
      iaculis id sit amet lorem. Aliquam eget metus sollicitudin, maximus nisl ut, molestie lorem.','optical-theme'),
      'type' => 'theme_mod'
  ));

  $wp_customize->add_control('what_we_do_text',array(    
    'label' =>__('what we do text','optical-theme'),
    'section' => 'home page',
    'priority' =>6
));

$wp_customize->add_setting('community_text',array(
    'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
    Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec.','optical-theme'),
    'type' => 'theme_mod'
));

$wp_customize->add_control('community_text',array(    
  'label' =>__('community text','optical-theme'),
  'section' => 'home page',
  'priority' =>7
));

$wp_customize->add_setting('donate_text',array(
    'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
    Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec.','optical-theme'),
    'type' => 'theme_mod'
));

$wp_customize->add_control('donate_text',array(    
  'label' =>__('donate text','optical-theme'),
  'section' => 'home page',
  'priority' =>8
));

$wp_customize->add_setting('events_text',array(
    'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
    Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec.','optical-theme'),
    'type' => 'theme_mod'
));

$wp_customize->add_control('events_text',array(    
  'label' =>__('event text','optical-theme'),
  'section' => 'home page',
  'priority' =>9
));

// end of home page

// about page

$wp_customize->add_section( 'about page' , array(
    'title' => __('About Page', 'optical-theme'),
    'description' => sprintf(__('Options for about page','optical-theme')),
    'priority' => 131
  ));

  $wp_customize->add_setting('about_banner_image',array(
    'default' => get_bloginfo('template_directory').'/images/aboutbanner.jpg',
    'type' => 'theme_mod'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'about_banner_image', array(
    'label' =>__('about banner image','optical-theme'),
    'section' => 'about page',
    'settings' => 'about_banner_image',
    'priority' =>1
)));




$wp_customize->add_setting('banner_heading',array(
    'default' => _x('WHAT WE <br /> DO','optical-theme'),
    'type' => 'theme_mod'
));

$wp_customize->add_control('banner_heading',array(    
  'label' =>__('banner heading','optical-theme'),
  'section' => 'about page',
  'priority' =>2
));



$wp_customize->add_setting('create_oppourtunities_heading',array(
    'default' => _x('CREATE OPPORTUNITIES','optical-theme'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('create_oppourtunities_heading',array(    
  'label' =>__('create oppourtunities heading','optical-theme'),
  'section' => 'about page',
  'priority' =>3
));



$wp_customize->add_setting('create_oppourtunities_text',array(
    'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non auctor dui. Aenean elementum nisl ut libero mattis 
    suscipit.  Nunc posuere turpis mauris, vitae fringilla augue suscipit quis. Mauris auctor quis massa vitae rhoncus. Aliquam aliquet 
    euismod urna, et tincidunt ex. Nulla sodales libero libero, ut ultricies urna sollicitudin ac.','optical-theme'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('create_oppourtunities_text',array(    
  'label' =>__('create oppourtunities text','optical-theme'),
  'section' => 'about page',
  'priority' =>4
));



$wp_customize->add_setting('second_banner_heading',array(
    'default' => _x('EVERY $ GOES INTO <br /> THE CHARITY','optical-theme'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('second_banner_heading',array(    
    'label' =>__('second banner heading','optical-theme'),
    'section' => 'about page',
    'priority' =>5
  ));


$wp_customize->add_setting('second_banner_text',array(
    'default' => _x('EVERY $ GOES INTO <br /> THE CHARITY','optical-theme'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('second_banner_text',array(    
    'label' =>__('second banner text','optical-theme'),
    'section' => 'about page',
    'priority' =>6
  ));
// end of about page



// start of contact page
$wp_customize->add_section( 'contact page' , array(
    'title' => __('Contact Page', 'optical-theme'),
    'description' => sprintf(__('Options for contact page','optical-theme')),
    'priority' => 132
  ));

$wp_customize->add_setting('text_heading',array(
    'default' => _x('Lets Talk','optical-theme'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('text_heading',array(    
    'label' =>__('text heading','optical-theme'),
    'section' => 'contact page',
    'priority' =>1
  ));

$wp_customize->add_setting('paragraph_text',array(
    'default' => _x('lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
    Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec. Praesent eget nisi vitae diam ullamcorper 
    iaculis id sit amet lorem. Aliquam eget metus sollicitudin, maximus nisl ut, molestie lorem.','optical-theme'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('paragraph_text',array(    
    'label' =>__('paragraph text','optical-theme'),
    'section' => 'contact page',
    'priority' =>2
  ));

// end of contact page


// start of stories page
$wp_customize->add_section( 'stories page' , array(
    'title' => __('Stories Page', 'optical-theme'),
    'description' => sprintf(__('Options for stories/blog page','optical-theme')),
    'priority' => 133
  ));


  $wp_customize->add_setting('stories_events_banner_image',array(
    'default' => get_bloginfo('template_directory').'/images/events.jpg',
    'type' => 'theme_mod'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'story_events_banner_image', array(
    'label' =>__('stories/events banner image','optical-theme'),
    'section' => 'stories page',
    'settings' => 'stories_events_banner_image',
    'priority' =>1
)));

  $wp_customize->add_setting('banner_heading',array(
    'default' => _x('STORIES/EVENTS','optical-theme'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('banner_heading',array(    
    'label' =>__('banner heading','optical-theme'),
    'section' => 'stories page',
    'priority' =>2
  ));

// end of stories page

// start of events page
$wp_customize->add_section( 'events page' , array(
    'title' => __('Events Page', 'optical-theme'),
    'description' => sprintf(__('Options for stories/blog page','optical-theme')),
    'priority' => 134
  ));

//   $wp_customize->add_setting('banner_heading',array(
//     'default' => _x('STORIES','optical-theme'),
//     'type' => 'theme_mod'
// ));
// $wp_customize->add_control('banner_heading',array(    
//     'label' =>__('banner heading','optical-theme'),
//     'section' => 'events page',
//     'priority' =>2
//   ));
// end events page




        
    }
    add_action('customize_register', 'wpb_customize_register');

    function mytheme_customize_css(){
        ?>

        <style type="text/css">

        .bannerHeadinsCustomColour{
             color: <?php echo get_theme_mod('banner_headings', '#ffffff'); ?>!important ;
           }



    </style>
    <?php
    }
    add_action('wp_head', 'mytheme_customize_css');