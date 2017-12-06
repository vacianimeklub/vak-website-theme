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
            'type' => 'option'
        ));

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
        ));
     }

     add_action( 'customize_register', 'vacianimeklub_customize_register' );
