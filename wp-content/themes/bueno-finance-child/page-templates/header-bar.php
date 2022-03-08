<?php
/* 
* Template Name: Header Bar
 */
get_header(); ?>

<?php
    $page_title = get_field('page_title');
    $last_updated = get_field('last_updated');
?>

<div class="wp-block-genesis-blocks-gb-container alignfull page-header gb-block-container">
    <div class="gb-container-inside"><div class="gb-container-content">
        <div class="wp-block-columns alignwide">
                <div class="wp-block-column">
                    <h1 class="page-title" id="frequently-asked-questions">
                        <?php
                            if(empty($page_title)):
                                echo get_the_title();
                            else:
                                echo $page_title;
                            endif;
                        ?>
                    </h1>
                    <p class="last-updated-date">
                        Last Updated: 
                        <?php
                            if(empty($last_updated)):
                                echo get_the_modified_time('F jS, Y');
                            else:
                                echo $last_updated;
                            endif;
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alignfull default-content">
    <div class="alignwide">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>