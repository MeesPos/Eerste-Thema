<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <main class="col-md-9">
            <div class="row">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <!-- De metadata van het bericht -->
                        <div class="col-md-3 p-4 text-right small bg-light">
                            Dit bericht is geplaatst door: <?php the_author(); ?><br>
                            Datum geplaatst: <?php the_time('j F Y') ?>
                            in: <?php the_category() ?>
                            met als tags: <?php
                            $voor = " ";
                            $sep = " | ";
                            $after = "";
                            $id = "";
                            $tag_list = get_the_tag_list($voor, $sep, $after, $id);
                            echo $tag_list; ?>
                            <hr>
                            <?php $vorigbericht = get_previous_post();
                            if (!empty($vorigbericht)) : ?> Vorig bericht<br>
                                <a href="<?php echo the_permalink($vorigbericht->ID); ?>">
                                    &#x25C0; <?php echo apply_filters('de_titel', $vorigbericht->post_title) ?></a>
                            <?php endif ?>

                            <hr>
                            <?php $volgendbericht = get_next_post();
                            if (!empty($volgendbericht)) : ?> Volgend bericht<br>
                                <a href="<?php echo the_permalink($volgendbericht->ID); ?>">
                                    &#x25B6; <?php echo apply_filters('de_titel', $volgendbericht->post_title) ?></a>
                            <?php endif ?>
                        </div>
                        <!-- De inhoud van de post -->
                        <div class="col-md-9">
                            <h3><?php the_title() ?></h3>
                            <div><?php the_content() ?></div>
                            <hr>
                            <div class="bg-light p-4">
                                <?php if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif; ?>
                            </div>
                        <?php endwhile;
                else : ?>
                        <p>Geen berichten gevonden!</p>
                    <?php endif; ?>
                        </div>
            </div>
        </main>

        <aside class="col-md-3 bg-light p-4">
            <?php dynamic_sidebar('aside'); ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>