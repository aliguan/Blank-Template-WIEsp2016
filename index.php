<?php get_header(); ?>

        <section class="row">
            <div class="three columns">
                <h4>Side Bar</h4>
            </div>
            <div class="nine columns">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                    <h3><?php the_title();?></h3>
                    <?php the_content();
                    }// end of while
                }//end if
                ?>
            </div>
        </section>

<?php get_footer(); ?>
