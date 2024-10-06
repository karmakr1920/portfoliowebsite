<?php get_header(); ?>
<!-- ABOUT -->
<section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
  <div class="container">
    <div class="row">

      <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
        <div class="about-text">
          <small class="small-text"><?php echo get_field('breadcrumb_title'); ?></small>
          <h1 class="animated animated-text">
            <span class="mr-2">Hey folks, I'm</span>
            <div class="animated-info">
              <span class="animated-item"><?php echo get_field('author_name'); ?></span>
              <span class="animated-item"><?php echo get_field('job_profile'); ?></span>
            </div>
          </h1>

          <p><?php echo get_field('short_description'); ?></p>

          <div class="custom-btn-group mt-4">
            <a href="<?php echo get_field('download_resume')['url']; ?>" download class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
            <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12 col-12">
        <div class="about-image svg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/undraw/portfolio_banner.png" class="img-fluid" alt="svg image">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROJECTS -->
<section class="project py-5" id="project">
  <div class="container">

    <div class="row">
      <div class="col-lg-11 text-center mx-auto col-12">

        <div class="col-lg-8 mx-auto">
          <h2>Things I have developed for digital media agencies</h2>
        </div>
        <?php $add_projects = get_field('add_projects');
        if(!empty($add_projects)){?>
        <div class="owl-carousel owl-theme">
          <?php foreach($add_projects as $project){?>
          <div class="item">
            <div class="project-info">
              <a href="<?php echo $project['project_url'];?>" target="_blank"><img src="<?php echo $project['project_screenshot']['url'];?>" class="img-fluid" alt="<?php echo $project['project_screenshot']['alt'];?>"></a>
            </div>
          </div>
          <?php }?>
        </div>
        <?php }?>

      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
  <div class="container">
    <div class="row">
      <?php $experiences = get_field('work_experience');
      if (!empty($experiences)) { ?>
        <div class="col-lg-6 col-12">
          <h2 class="mb-4">Experiences</h2>

          <div class="timeline">
            <?php foreach ($experiences as $experience) { ?>
              <div class="timeline-wrapper">
                <div class="timeline-yr">
                  <span><?php echo $experience['working_year']; ?></span>
                </div>
                <div class="timeline-info">
                  <h3><span><?php echo $experience['designation']; ?></span><small><?php echo $experience['company_name']; ?></small></h3>
                  <p><?php echo $experience['short_work_description']; ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } ?>

      <?php $educations = get_field('add_education');
      if (!empty($educations)) { ?>
        <div class="col-lg-6 col-12">
          <h2 class="mb-4 mobile-mt-2">Educations</h2>

          <div class="timeline">
            <?php foreach ($educations as $education) { ?>
              <div class="timeline-wrapper">
                <div class="timeline-yr">
                  <span><?php echo $education['year']; ?></span>
                </div>
                <div class="timeline-info">
                  <h3><span><?php echo $education['education_name']; ?></span><small><?php echo $education['institution_name']; ?></small></h3>
                  <p><?php echo $education['short_description_of_learning']; ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact py-5" id="contact">
  <div class="container">
    <div class="row">

      <div class="col-lg-5 mr-lg-5 col-12">
        <div class="google-map w-100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.563051929484!2d72.5050285744493!3d23.076475614316156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9cb822589293%3A0xf0d461fa72c1c793!2sScience%20City%20Rd%2C%20Sola%2C%20Ahmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1728147866706!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
          <div class="contact-info-item">
            <h3 class="mb-3 text-white">Say hello</h3>
            <p class="footer-text mb-0"><a href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a></p>
            <p><a href="mailto:<?php echo get_field('email_address', 'option'); ?>"><?php echo get_field('email_address', 'option'); ?></a></p>
          </div>

          <ul class="social-links">
            <li><a href="<?php echo get_field('facebook_profile', 'option'); ?>" class="fab fa-facebook" data-toggle="tooltip" data-placement="left" title="Facebook"></a></li>

            <li><a href="<?php echo get_field('linkedin_profile', 'option'); ?>" class="fab fa-linkedin" data-toggle="tooltip" data-placement="left" title="LinkedIn"></a></li>

          </ul>
        </div>
      </div>

      <div class="col-lg-6 col-12">
        <div class="contact-form">
          <h2 class="mb-4">Interested to work together? Let's talk</h2>

          <?php echo do_shortcode('[contact-form-7 id="4c95360" title="Let\'s Talk"]'); ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>