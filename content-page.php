<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>
    <article style="margin-bottom:0;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (is_home()==true):?>
            <header>
                <h1 class="page-title"><?php the_title(); ?></h1> </header>
            <!-- .entry-header -->
            <?php endif; ?>
                <div class="entry-content">
                    <div class="entry-content-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <?php the_content(); ?>
                        <?php _tk_link_pages(); ?>
                </div>
                <!-- .entry-content -->
                <?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    </article>
    <!-- #post-## -->