<?php
/* 
* Template Name: Careers
 */
get_header();

the_content();
/**
 * Field Structure:
 *
 * - job_categories (Parent Repeater)
 *   - job_category_title (Title Text) +
 *   - job_post (Child Repeater)
 *     - job_title (Title Text) +
 */
/* if( have_rows('job_categories') ):
    ?>
    <section class="alignfull opportunities-section">
        <div class="alignwide opportunities-wrapper">
        <!-- tabs -->
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <!-- loop start -->
            <?php
                $cat_counter_base = 1;
                while( have_rows('job_categories') ) : the_row();
                // Get parent title value.
                $cat_counter = $cat_counter_base++;
                $parent_title = get_sub_field('job_category_title'); ?>
                <li class="nav-item">
                    <a id="tab-<?php echo $cat_counter; ?>" href="#pane-<?php echo $cat_counter; ?>" class="nav-link" data-toggle="tab" role="tab"><?php echo $parent_title; ?></a>
                </li>
                <?php endwhile;
            ?>
            <!-- loop end -->
        </ul>
        <!-- mobile tabs -->
        <div id="content" class="tab-content" role="tablist">
            <!-- loop start -->
            <?php
                $cat_counter_base = 1;
                while( have_rows('job_categories') ) : the_row();
                $cat_counter = $cat_counter_base++;
                $parent_title = get_sub_field('job_category_title'); ?>
                <div id="pane-<?php echo $cat_counter; ?>" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-<?php echo $cat_counter; ?>">
                    <div class="card-header" role="tab" id="heading-<?php echo $cat_counter; ?>">
                        <h5 class="mb-0">
                            <!-- Note: `data-parent` removed from here -->
                            <a data-toggle="collapse" href="#collapse-<?php echo $cat_counter; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $cat_counter; ?>">
                            <?php echo $parent_title; ?>
                            <i class="fa fa-plus"></i>
                            </a>
                        </h5>
                    </div>

                    <!-- Note: New place of `data-parent` -->
                    <div id="collapse-<?php echo $cat_counter; ?>" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $cat_counter; ?>">
                    <div class="card-body new-card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><?php echo $cat_counter; ?> Lorem ipsum dolor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatibus ipsa cupiditate accusamus, praesentium atque id eius explicabo omnis earum qui quos fuga, odit sed possimus, facere fugit excepturi nihil!</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <?php endwhile ?>
            <!-- loop end -->

        </div>

        </div>
    </section>
    <?php
endif; */
?>
<?php
get_footer();