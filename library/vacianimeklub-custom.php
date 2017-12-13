<?php
    function modify_read_more_link() {
        return '<a class="more-link" href="' . get_permalink() . '">' . __( 'Read more', 'foundationpress' ) . '</a>';
    }
    add_filter( 'the_content_more_link', 'modify_read_more_link' );

    function vacianimeklub_customize_register( $wp_customize ) {
        $wp_customize->add_section( 'vacianimeklub_section' , array(
            'title'      => 'Váci Anime Klub',
            'priority'   => 30,
        ) );

        $wp_customize->add_setting( 'facebook_app_id' , array(
            'default' => '',
            'type' => 'option',
        ) );

        $wp_customize->add_setting( 'hotjar_site_id' , array(
            'default' => '',
            'type' => 'option',
        ) );

        $wp_customize->add_setting( 'ga_property' , array(
            'default' => '',
            'type' => 'option',
        ) );

        $wp_customize->add_control( new WP_Customize_Control( 
            $wp_customize, 
            'facebook_app_id', 
            array(
                'label'      => 'Facebook app id',
                'section'    => 'vacianimeklub_section',
                'settings'   => 'facebook_app_id',
                'type'       => 'number',
                'priority'   => 1
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Control( 
            $wp_customize, 
            'hotjar_site_id', 
            array(
                'label'      => 'Hotjar site id',
                'section'    => 'vacianimeklub_section',
                'settings'   => 'hotjar_site_id',
                'type'       => 'number',
                'priority'   => 1
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Control( 
            $wp_customize, 
            'ga_property', 
            array(
                'label'      => 'Google site property id',
                'section'    => 'vacianimeklub_section',
                'settings'   => 'ga_property',
                'priority'   => 1
            )
        ) );
     }

     add_action( 'customize_register', 'vacianimeklub_customize_register' );

     add_filter( 'get_comments_number', 'get_comment_count_without_trackbacks', 0 );
     function get_comment_count_without_trackbacks( $count ) {
        if ( ! is_admin() ) {
            global $id;
            $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
            return count($comments_by_type['comment']);
        } 
        else {
            return $count;
        }
     }