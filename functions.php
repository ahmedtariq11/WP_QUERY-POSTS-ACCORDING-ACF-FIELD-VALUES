<?php 
    $args = array(
        'post_type'         => 'property',
        'posts_per_page'    => -1,
        'meta_key'          => 'property_status',//acf field name
        'meta_value'        => 'For Sale'//acf field value
    );
    $query = new WP_Query($args);
?>
<?php if( $query->have_posts() ): ?>
    <ul>
        <?php while( $query->have_posts() ): $query->the_post(); ?>
            <li><?php get_field('town'); ?></li>
        <?php endwhile; ?>
    </ul>
<?php wp_reset_query(); ?>
<?php endif; ?>
