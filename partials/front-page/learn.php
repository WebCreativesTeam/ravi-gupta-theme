<!-- Learn STARTS -->
<section class="py-10 bg-gray-50 sm:py-16 lg:py-14">
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold leading-tight text-center text-black sm:text-4xl lg:text-5xl ltr">
      Learn to be a Pro Digital Marketer
    </h2>
    <h2 class="text-3xl font-bold leading-tight text-center text-black sm:text-4xl lg:text-5xl ltr">
      with Ravi Gupta
    </h2>
    <div class="flex flex-col justify-center">
      <div class="flex justify-center pt-10">
        <div class="p-2 border border-gray-900 rounded-lg lg:visible">
          <button id="ebookbtn" onclick="showebook()"
            class="h-12 px-8 py-2 text-xl font-medium border rounded-lg bg-[#ee4a03] text-white border-[#ee4a03]">
            eBooks
          </button>
          <button id="coursesbtn" onclick="showcourses()"
            class="h-12 px-8 py-2 text-xl font-medium bg-transparent border border-black rounded-lg"> Courses
          </button>
        </div>
      </div>

      <div id="ebook">
        <div id="ebook" class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
          <?php
          $args = array(
            'post_type' => 'course',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
          <div>
            <div class="overflow-hidden bg-white border rounded-md shadow hover:shadow-2xl">
              <div class="relative">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="block aspect-w-4 aspect-h-3">
                  <?php the_post_thumbnail('full', ['class' => 'object-cover w-full h-full']); ?>
                </a>
              </div>
            </div>
            <p class="mt-5 text-xl font-semibold">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-black hover:text-[#ee4a03]">
                <?php the_title(); ?>
              </a>
            </p>
          </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>

        <div class="flex items-center lg:space-x-3">
          <button onclick="window.location.href='/ebooks.html'"
            class="h-12 px-8 py-2 mx-auto mt-10 text-xl font-medium bg-transparent border border-gray-900 rounded-lg hover:bg-[#ee4a03] hover:text-white hover:border-red-500">View
            All Deals
          </button>
        </div>
      </div>

      <div id="courses" class="hidden">
        <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
          <?php
          $args = array(
            'post_type' => 'course',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
          <div>
            <div class="overflow-hidden bg-white border rounded-md shadow hover:shadow-2xl">
              <div class="relative">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="block aspect-w-4 aspect-h-3">
                  <?php the_post_thumbnail('full', ['class' => 'object-cover w-full h-full']); ?>
                </a>
              </div>
            </div>
            <p class="mt-5 text-xl font-semibold">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-black hover:text-red-500">
                <?php the_title(); ?>
              </a>
            </p>
          </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>

        <div class="flex items-center lg:space-x-3">
          <a href="<?php echo home_url('/todays-deals'); ?>"
            class="h-12 px-8 py-2 mx-auto mt-10 text-xl font-medium bg-transparent border border-gray-900 rounded-lg hover:bg-red-500 hover:text-white hover:border-red-500">View
            All Deals
          </a>
        </div>
      </div>

    </div>


  </div>
</section>
<!-- Learn ENDS -->
