<?php /*Template Name: Noticías*/ ?>

<?php get_header(); ?>

<div class="post-section">
    <?php $args = [
        'post_type'           => 'post',
        'posts_per_page'      => 4,
        'ignore_sticky_posts' => 1,
    ];

    $posts = new WP_Query( $args );

    if ( $posts->have_posts() ) {
        while ( $posts->have_posts() ) {
            $posts->the_post();

            ?>
            <a href="<?= get_permalink() ?>" class="post">
                <?= get_the_post_thumbnail() ?>
                <h1>
                    <?= get_the_title() ?>
                </h1>

                <span class="content">
                                    <?= get_the_content() ?>
                                </span>
            </a>
            <?php
        }
    }
    ?>
</div>
<?php get_footer(); ?>