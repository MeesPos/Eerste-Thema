<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 container p-4">
            <h2 class="p-4">De berichten in: <em class="text-primary">
                    <?php echo single_cat_title(); ?>
                </em></h2>
            <div class="row">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="col-md-6">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <div><?php the_excerpt() ?></div>
                            <div class="text-center p-4">
                                <a href="<?php the_permalink() ?>" class="btn btn-outline-primary">Lees Meer</a>
                            </div>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p class="p-4">Geen berichten gevonden voor</p> <em class="text-primary">in deze categorie</em>
                <?php endif;
                ?>
            </div>
        </main>

        <aside class="col-md-3 bg-light p-4">
            <?php dynamic_sidebar('aside'); ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>