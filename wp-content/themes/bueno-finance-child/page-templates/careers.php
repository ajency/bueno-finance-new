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
if( have_rows('job_categories') ):
    ?>
    <section class="alignfull opportunities-section">
        <div class="alignwide opportunities-wrapper">
        <h2 class="section-heading">Opportunities</h2>
        <!-- tabs -->
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <!-- all category -->
            <?php
                $numjobs = 0;
                while(have_rows('job_categories')): the_row();
                    if( have_rows('job_post') ):
                        while(have_rows('job_post')): the_row();
                        $numjobs++;
                        endwhile;
                    endif;
                endwhile; 
            ?>
            <li class="nav-item">
                <a id="tab-all" href="#pane-all" class="nav-link" data-toggle="tab" role="tab">All<?php echo "(".$numjobs.")"; ?></a>
            </li>
            <!-- all category end -->
            <?php
                $cat_counter_base = 1;?>
                <!-- loop start -->
                <?php
                while( have_rows('job_categories') ) : the_row();
                // Get parent title value.
                $cat_counter = $cat_counter_base++;
                $parent_title = get_sub_field('job_category_title');
                $numjobs = 0;
                $jobs = get_sub_field( 'job_post' );
                if (is_array($jobs)) {
                $numjobs = count($jobs);
                }
                if ( have_rows('job_post') ):
                ?>
                <li class="nav-item">
                    <a id="tab-<?php echo $cat_counter; ?>" href="#pane-<?php echo $cat_counter; ?>" class="nav-link" data-toggle="tab" role="tab"><?php echo $parent_title; ?><?php echo "(".$numjobs.")" ?></a>
                </li>
                <?php
                endif;
                endwhile;
            ?>
            <!-- loop end -->
        </ul>
        <!-- mobile tabs -->
        <div id="content" class="tab-content" role="tablist">
            <!-- all category -->
            <?php
                $numjobs = 0;
                while(have_rows('job_categories')): the_row();
                    if( have_rows('job_post') ):
                        while(have_rows('job_post')): the_row();
                        $numjobs++;
                        endwhile;
                    endif;
                endwhile; 
            ?>
            <div id="pane-all" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-all">
                <div class="card-header" role="tab" id="heading-all">
                    <h5 class="mb-0">
                        <!-- Note: `data-parent` removed from here -->
                        <a data-toggle="collapse" href="#collapse-all" aria-expanded="true" aria-controls="collapse-all">
                        All<?php echo "(".$numjobs.")" ?>
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="12" viewBox="0 0 22 12" fill="none">
                                <path d="M21 11L11.7071 1.70711C11.3166 1.31658 10.6834 1.31658 10.2929 1.70711L1 11" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </i>
                        </a>
                    </h5>
                </div>
                <div id="collapse-all" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-all">
                    <div class="card-body new-card-body">
                        <?php
                            $all_jobs_base = 'AB';
                            if(have_rows('job_categories')):
                                while(have_rows('job_categories')): the_row();
                                    $parent_title = get_sub_field('job_category_title');
                                    if(have_rows('job_post')):?>
                                        <!-- accordion start -->
                                        <div class="acco-container">
                                            <div class="panel-group" id="accordion" role="tablist">
                                                <?php while(have_rows('job_post')): the_row();
                                                $child_title = get_sub_field('job_title');
                                                $job_type = get_sub_field('job_type');
                                                $job_location = get_sub_field('job_location');
                                                $requirements = get_sub_field_object('requirements');
                                                $requirements_value = get_sub_field('requirements');
                                                $what_youll_be_doing = get_sub_field_object('what_youll_be_doing');
                                                $what_youll_be_doing_value = get_sub_field('what_youll_be_doing');
                                                $behavioural_skills= get_sub_field_object('behavioural_skills');
                                                $behavioural_skills_value= get_sub_field('behavioural_skills');
                                                $so_what_do_we_offer= get_sub_field_object('so_what_do_we_offer');
                                                $so_what_do_we_offer_value= get_sub_field('so_what_do_we_offer');
                                                $apply_via_form= get_sub_field_object('apply_via_form');
                                                $apply_on_linkedIn= get_sub_field_object('apply_on_linkedIn');
                                                $apply_on_linkedIn_value = get_sub_field('apply_on_linkedIn');
                                                $all_jobs = $all_jobs_base++;?>
                                                    <!-- loop start -->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="heading-<?php echo $all_jobs; ?>">
                                                            <a class="main-toggler collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $all_jobs; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $all_jobs; ?>">
                                                                <div class="header-content">
                                                                    <h4 class="panel-title"><?php echo $child_title; ?></h4>
                                                                    <ul>
                                                                        <li class="job-category"><i class="icon"></i><?php echo $parent_title; ?></li>
                                                                        <li class="job-type"><i class="icon"></i><?php echo $job_type; ?></li>
                                                                        <li class="job-location"><i class="icon"></i><?php echo $job_location; ?></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="toggler">
                                                                    <p>Show more</p>
                                                                    <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 1L11.7071 10.2929C11.3166 10.6834 10.6834 10.6834 10.2929 10.2929L1 0.999999" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div id="collapse-<?php echo $all_jobs; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $all_jobs; ?>">
                                                            <div class="panel-body">
                                                                <?php if($what_youll_be_doing_value): ?>
                                                                <h6 class="title"><?php echo $what_youll_be_doing['label']; ?></h6>
                                                                <div class="editor-content">
                                                                    <?php echo $what_youll_be_doing['value']; ?>
                                                                </div>
                                                                <?php endif ?>
                                                                <?php if($requirements_value): ?>
                                                                <h6 class="title"><?php echo $requirements['label']; ?></h6>
                                                                <p><?php echo $requirements['value']; ?></p>
                                                                <?php endif ?>
                                                                <?php if($behavioural_skills_value): ?>
                                                                <h6 class="title"><?php echo $behavioural_skills['label']; ?></h6>
                                                                <div class="editor-content">
                                                                    <?php echo $behavioural_skills['value']; ?>
                                                                </div>
                                                                <?php endif ?>
                                                                <?php if($so_what_do_we_offer_value): ?>
                                                                <h6 class="title"><?php echo $so_what_do_we_offer['label']; ?></h6>
                                                                <div class="editor-content">
                                                                    <?php echo $so_what_do_we_offer['value']; ?>
                                                                </div>
                                                                <?php endif ?>
                                                                <div class="buttons">
                                                                <a data-toggle="modal" data-target="#careersModal" data-position="<?php echo $child_title ?>" class="gb-button form-toggler"><?php echo $apply_via_form['label']; ?></a>
                                                                    <?php if(!empty($apply_on_linkedIn_value)): ?>
                                                                    <a href="<?php echo $apply_on_linkedIn_value; ?>" class="gb-button gb-button--bordered gb-button--bordered-icon">
                                                                    <span class="icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.22594e-07 1.50382C2.22594e-07 1.10498 0.158438 0.722481 0.440458 0.44046C0.722479 0.158439 1.10498 2.0048e-06 1.50382 2.0048e-06H16.4945C16.6922 -0.00032081 16.888 0.0383444 17.0707 0.113784C17.2533 0.189223 17.4194 0.299955 17.5592 0.439641C17.699 0.579326 17.81 0.745221 17.8856 0.927828C17.9612 1.11044 18.0001 1.30617 18 1.50382V16.4945C18.0002 16.6922 17.9614 16.888 17.8859 17.0707C17.8104 17.2534 17.6996 17.4194 17.5598 17.5593C17.4201 17.6991 17.2541 17.81 17.0715 17.8856C16.8888 17.9612 16.6931 18.0001 16.4954 18H1.50382C1.30627 18 1.11065 17.9611 0.928143 17.8855C0.745638 17.8098 0.579822 17.699 0.440169 17.5593C0.300516 17.4195 0.189762 17.2536 0.114237 17.0711C0.0387109 16.8886 -0.00010726 16.6929 2.22594e-07 16.4954V1.50382ZM7.12473 6.86291H9.56209V8.08691C9.91391 7.38327 10.8139 6.75 12.1664 6.75C14.7592 6.75 15.3736 8.15155 15.3736 10.7231V15.4865H12.7497V11.3089C12.7497 9.84437 12.3979 9.018 11.5045 9.018C10.2649 9.018 9.74945 9.909 9.74945 11.3089V15.4865H7.12473V6.86291ZM2.62473 15.3745H5.24945V6.75H2.62473V15.3736V15.3745ZM5.625 3.93709C5.62995 4.16182 5.58996 4.38528 5.50738 4.59435C5.4248 4.80342 5.30129 4.99389 5.1441 5.15457C4.98691 5.31526 4.79921 5.44293 4.59201 5.5301C4.38481 5.61726 4.16229 5.66216 3.9375 5.66216C3.71271 5.66216 3.49019 5.61726 3.28299 5.5301C3.07579 5.44293 2.88809 5.31526 2.7309 5.15457C2.57371 4.99389 2.4502 4.80342 2.36762 4.59435C2.28504 4.38528 2.24505 4.16182 2.25 3.93709C2.25971 3.49597 2.44177 3.07619 2.75718 2.76765C3.07259 2.45911 3.49627 2.28634 3.9375 2.28634C4.37873 2.28634 4.80241 2.45911 5.11782 2.76765C5.43323 3.07619 5.61529 3.49597 5.625 3.93709Z" fill="white"></path>
                                                                        </svg>
                                                                    </span><?php echo $apply_on_linkedIn['label']; ?></a>
                                                                    <?php endif ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- loop end -->
                                        <?php endwhile;?>
                                                </div>
                                            </div>
                                        <!-- accordion end -->
                                    <?php endif;
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <!-- all category end -->
            <!-- loop start -->
            <?php
                $cat_counter_base = 1;
                $job_post_base = 'A';?>
                <?php
                while( have_rows('job_categories') ) : the_row();
                $cat_counter = $cat_counter_base++;
                $parent_title = get_sub_field('job_category_title');
                $jobs = get_sub_field( 'job_post' );
                if (is_array($jobs)) {
                $numjobs = count($jobs);
                }
                ?>
                <?php if ( have_rows('job_post') ): ?>
                <div id="pane-<?php echo $cat_counter; ?>" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-<?php echo $cat_counter; ?>">
                    <div class="card-header" role="tab" id="heading-<?php echo $cat_counter; ?>">
                        <h5 class="mb-0">
                            <!-- Note: `data-parent` removed from here -->
                            <a data-toggle="collapse" href="#collapse-<?php echo $cat_counter; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $cat_counter; ?>">
                            <?php echo $parent_title; ?><?php echo "(".$numjobs.")" ?>
                            <i><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/accordion-arrow.svg" alt="arrow"></i>
                            </a>
                        </h5>
                    </div>

                    <!-- Note: New place of `data-parent` -->
                    <div id="collapse-<?php echo $cat_counter; ?>" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $cat_counter; ?>">
                        <div class="card-body new-card-body">
                            <!-- accordions start -->
                            <?php if( have_rows('job_post') ): ?>
                                <div class="acco-container">
                                    <div class="panel-group" id="accordion" role="tablist">
                                        <?php 
                                        while( have_rows('job_post') ) : the_row();
                                        $job_post_index = $job_post_base++;
                                        $child_title = get_sub_field('job_title');
                                        $job_type = get_sub_field('job_type');
                                        $job_location = get_sub_field('job_location');
                                        $requirements = get_sub_field_object('requirements');
                                        $requirements_value = get_sub_field('requirements');
                                        $what_youll_be_doing = get_sub_field_object('what_youll_be_doing');
                                        $what_youll_be_doing_value = get_sub_field('what_youll_be_doing');
                                        $behavioural_skills= get_sub_field_object('behavioural_skills');
                                        $behavioural_skills_value= get_sub_field('behavioural_skills');
                                        $so_what_do_we_offer= get_sub_field_object('so_what_do_we_offer');
                                        $so_what_do_we_offer_value= get_sub_field('so_what_do_we_offer');
                                        $apply_via_form= get_sub_field_object('apply_via_form');
                                        $apply_on_linkedIn= get_sub_field_object('apply_on_linkedIn');
                                        $apply_on_linkedIn_value = get_sub_field('apply_on_linkedIn');
                                        ?>
                                        <!-- loop start -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading-<?php echo $job_post_index; ?>">
                                                <a class="main-toggler collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $job_post_index; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $job_post_index; ?>">
                                                    <div class="header-content">
                                                        <h4 class="panel-title"><?php echo $child_title; ?></h4>
                                                        <ul>
                                                            <li class="job-category"><i class="icon"></i><?php echo $parent_title; ?></li>
                                                            <li class="job-type"><i class="icon"></i><?php echo $job_type; ?></li>
                                                            <li class="job-location"><i class="icon"></i><?php echo $job_location; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="toggler">
                                                        <p>Show more</p>
                                                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 1L11.7071 10.2929C11.3166 10.6834 10.6834 10.6834 10.2929 10.2929L1 0.999999" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-<?php echo $job_post_index; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $job_post_index; ?>">
                                                <div class="panel-body">
                                                    <?php if($what_youll_be_doing_value): ?>
                                                    <h6 class="title"><?php echo $what_youll_be_doing['label']; ?></h6>
                                                    <div class="editor-content">
                                                        <?php echo $what_youll_be_doing['value']; ?>
                                                    </div>
                                                    <?php endif ?>
                                                    <?php if($requirements_value): ?>
                                                    <h6 class="title"><?php echo $requirements['label']; ?></h6>
                                                    <div class="editor-content">
                                                    <?php echo $requirements['value']; ?>
                                                    </div>
                                                    <?php endif ?>
                                                    <?php if($behavioural_skills_value): ?>
                                                    <h6 class="title"><?php echo $behavioural_skills['label']; ?></h6>
                                                    <div class="editor-content">
                                                        <?php echo $behavioural_skills['value']; ?>
                                                    </div>
                                                    <?php endif ?>
                                                    <?php if($so_what_do_we_offer_value): ?>
                                                    <h6 class="title"><?php echo $so_what_do_we_offer['label']; ?></h6>
                                                    <div class="editor-content">
                                                        <?php echo $so_what_do_we_offer['value']; ?>
                                                    </div>
                                                    <?php endif ?>
                                                    <div class="buttons">
                                                    <a data-toggle="modal" data-target="#careersModal" data-position="<?php echo $child_title ?>" class="gb-button form-toggler"><?php echo $apply_via_form['label']; ?></a>
                                                        <?php if(!empty($apply_on_linkedIn_value)): ?>
                                                        <a href="<?php echo $apply_on_linkedIn_value; ?>" class="gb-button gb-button--bordered gb-button--bordered-icon">
                                                        <span class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.22594e-07 1.50382C2.22594e-07 1.10498 0.158438 0.722481 0.440458 0.44046C0.722479 0.158439 1.10498 2.0048e-06 1.50382 2.0048e-06H16.4945C16.6922 -0.00032081 16.888 0.0383444 17.0707 0.113784C17.2533 0.189223 17.4194 0.299955 17.5592 0.439641C17.699 0.579326 17.81 0.745221 17.8856 0.927828C17.9612 1.11044 18.0001 1.30617 18 1.50382V16.4945C18.0002 16.6922 17.9614 16.888 17.8859 17.0707C17.8104 17.2534 17.6996 17.4194 17.5598 17.5593C17.4201 17.6991 17.2541 17.81 17.0715 17.8856C16.8888 17.9612 16.6931 18.0001 16.4954 18H1.50382C1.30627 18 1.11065 17.9611 0.928143 17.8855C0.745638 17.8098 0.579822 17.699 0.440169 17.5593C0.300516 17.4195 0.189762 17.2536 0.114237 17.0711C0.0387109 16.8886 -0.00010726 16.6929 2.22594e-07 16.4954V1.50382ZM7.12473 6.86291H9.56209V8.08691C9.91391 7.38327 10.8139 6.75 12.1664 6.75C14.7592 6.75 15.3736 8.15155 15.3736 10.7231V15.4865H12.7497V11.3089C12.7497 9.84437 12.3979 9.018 11.5045 9.018C10.2649 9.018 9.74945 9.909 9.74945 11.3089V15.4865H7.12473V6.86291ZM2.62473 15.3745H5.24945V6.75H2.62473V15.3736V15.3745ZM5.625 3.93709C5.62995 4.16182 5.58996 4.38528 5.50738 4.59435C5.4248 4.80342 5.30129 4.99389 5.1441 5.15457C4.98691 5.31526 4.79921 5.44293 4.59201 5.5301C4.38481 5.61726 4.16229 5.66216 3.9375 5.66216C3.71271 5.66216 3.49019 5.61726 3.28299 5.5301C3.07579 5.44293 2.88809 5.31526 2.7309 5.15457C2.57371 4.99389 2.4502 4.80342 2.36762 4.59435C2.28504 4.38528 2.24505 4.16182 2.25 3.93709C2.25971 3.49597 2.44177 3.07619 2.75718 2.76765C3.07259 2.45911 3.49627 2.28634 3.9375 2.28634C4.37873 2.28634 4.80241 2.45911 5.11782 2.76765C5.43323 3.07619 5.61529 3.49597 5.625 3.93709Z" fill="white"></path>
                                                            </svg>
                                                        </span><?php echo $apply_on_linkedIn['label']; ?></a>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile ?>
                                        <!-- loop end -->
                                    </div>
                                </div>
                            <?php endif ?>
                            <!-- accordions end -->
                        </div>
                    </div>
                </div>
                <?php endif ?>
                <?php endwhile ?>
            <!-- loop end -->

        </div>

        </div>
    </section>
    <?php
endif;
?>

<!-- Modal -->
<div class="modal fade" id="careersModal" tabindex="-1" role="dialog" aria-labelledby="careersModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="careersModalLongTitle">Submit Your Application</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M17 17L1 1M17 1L1 17" stroke="black" stroke-width="2" stroke-linecap="round"></path>
                </svg>
            </span>
        </button>
      </div>
      <div class="modal-body">
        <p class="position-description">Applying for the poistion of <span class="modalPosition">Senior Software Engineer</span></p>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 'careersform', 'title' => false, 'description' => false ) ); ?>
      </div>
    </div>
  </div>
</div>

<!-- <div class="d-none">
<a data-position="Web Developer" class="gb-button jobform-toggle">Apply Via Form</a>
<div class="jobsModal" id="jobsModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="careersModalLongTitle">Submit Your Application</h5>
        <button type="button" class="close">
            <span aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M17 17L1 1M17 1L1 17" stroke="black" stroke-width="2" stroke-linecap="round"></path>
                </svg>
            </span>
        </button>
      </div>
      <div class="modal-body">
        <p class="position-description">Applying for the poistion of <span class="modalPosition">Senior Software Engineer</span></p>
      </div>
    </div>
  </div>
</div>
</div> -->

<?php
get_footer();