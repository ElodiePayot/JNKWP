<?php
/*
  Template Name: project_details
*/
 ?>

<?php get_header(); ?>

  <section class="project__heading --redspher section__after">
    <div class="container">
      <a href="index.html" class="home-link"><img src="img/JNK_arrow.svg" class="mr-2"/> Back to home</a>

      <?php $the_query = new WP_Query(
        array(
          'post_type' => 'project_heading',
          'post_status'=>'publish',
          'posts_per_page' => -1
        ));
      ?>

      <?php if( $the_query->have_posts() ): ?>
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <h1 class="projects-page"><?php echo str_replace(' / ', '<br />', get_the_title()); ?></h1>
      <div class="row">
        <div class="col-12">
          <img src="img/JNK_bluemap.svg" alt="Redspher" />
          <p><?php the_field('project_name') ?></p>
          <img src="img/JNK_bluecalendar.svg" alt="Calendar" class="pl-5"/>
          <p><?php the_field('project_date') ?></p>
        </div>
      </div>

    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>
  </section>

  <section class="project-redspher__section1 section__after">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>
            Lorem Ipsum is an agency specialized in web accessibility and adapted tourism, it's also a partner. As part of the launch of its activities, blabla wanted to offer a showcase to highlight its skills and services.
          </p>
          <p>
            Accessibility is at the heart of their strategy, so it was essential that the site respond as best as possible to the rules and criteria in effect. txt to be done
          </p>
        </div>
        <div class="col-md-6">
          <img src="img/JNK_redsphermobile1.png" alt="Redspher application" class="project-redspher__section1--img"/>
        </div>
      </div>
    </div>
  </section>

  <section class="project-redspher__section2 section__after">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/JNK_redsphermobile2.png" alt="Redspher application" class="project-redspher__section2--img"/>
        </div>
        <div class="col-md-6">
          <p>
          Lorem Ipsum is an agency specialized in web accessibility and adapted tourism, it's also a partner
          </p>
          <blockquote>
          ”As part of the launch of its activities, blabla wanted to offer a showcase to highlight its skills and services.”
          </blockquote>
          <p>
          Accessibility is at the heart of their strategy, so it was essential that the site respond as best as possible to the rules and criteria in effect. txt to be done
          </p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
