<?php /* Template Name: FAQ */ ?>
 
<?php get_header(); ?>
<?php the_content(); ?>

<!-- 
    faq (Parent Repeater)
    question (Questions)
    answer (Answers)
 -->

<?php
    if( have_rows('faq') ): ?>
    <div class="alignfull faq-section">
        <div class="alignwide faq-section-wrapper">
            <div class="faqAccordion" id="faqAccordion">
                <!-- loop start -->
                <?php while( have_rows('faq') ) : the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer'); ?>
                    <div class="card">
                        <div class="card-header" id="heading-<?php echo get_row_index(); ?>">
                            <a class="card-header-wrapper" data-toggle="collapse" data-target="#collapse-<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="collapse-<?php echo get_row_index(); ?>">
                                <p class="faq-question"><?php echo get_row_index().". "; ?><?php echo $question ?></p>
                                <div class="faq-toggler">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                        <line x1="1" y1="9.90918" x2="21" y2="9.90918" stroke="#134E19" stroke-width="2" stroke-linecap="round"></line>
                                        <line x1="10.918" y1="19" x2="10.918" y2="1" stroke="#134E19" stroke-width="2" stroke-linecap="round"></line>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <div id="collapse-<?php echo get_row_index(); ?>" class="collapse" aria-labelledby="heading-<?php echo get_row_index(); ?>" data-parent="#faqAccordion">
                            <div class="card-body">
                                <?php echo $answer ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- loop end -->
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>