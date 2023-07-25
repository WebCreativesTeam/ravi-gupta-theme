
<?php /* Template Name: Courses */ ?>
<?php get_header(); ?> 

<section class="flex justify-center pt-10">
  <div id="courses" class="w-[80%] pt-10">
    <h2 class="text-3xl font-bold leading-tight text-center text-black sm:text-4xl lg:text-5xl ltr">
      Courses
    </h2>

    <div class="justify-items-center">
      <div id="blog1" class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">

        <?php
          // Query arguments for the course post type loop
          $args = array(
            'post_type' => 'course',
            'posts_per_page' => 12,
            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
          );

          $courses_query = new WP_Query($args);

          if ($courses_query->have_posts()) :
            while ($courses_query->have_posts()) : $courses_query->the_post();
        ?>

        <div>
          <div class="overflow-hidden bg-white border rounded-md shadow hover:shadow-2xl">
            <div class="relative">
              <a href="<?php the_permalink(); ?>" title="" class="block aspect-w-4 aspect-h-3">
                <?php the_post_thumbnail('medium', array('class' => 'object-cover w-full h-full')); ?>
              </a>
            </div>
          </div>
          <p class="mt-5 text-xl font-semibold">
            <a href="<?php the_permalink(); ?>" title="" class="text-black hover:text-red-500">
              <?php the_title(); ?>
            </a>
          </p>
        </div>

        <?php
            endwhile;
            wp_reset_postdata();
          else:
            echo '<p>No courses found.</p>';
          endif;
        ?>

      </div>

      <div class="flex justify-center py-10">
        <div class="w-[120px] flex justify-around gap-5">
       
        <?php ravig_pagination($courses_query);?>


        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>