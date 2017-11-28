<?php
    function modify_read_more_link() {
        return '<a class="more-link" href="' . get_permalink() . '">' . __( 'Read more', 'foundationpress' ) . '</a>';
    }
    add_filter( 'the_content_more_link', 'modify_read_more_link' );