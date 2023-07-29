<!-- Currently Trending STARTS -->
<section class="py-10 bg-gray-100 sm:py-16 lg:py-18">
  <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
    <div class="mb-3 md:flex md:items-end md:justify-between">
      <h1 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
        Currently trending topics
      </h1>
      <a href="<?php echo home_url('/browse-articles'); ?>"
        class="invisible h-12 px-8 py-2 text-xl font-medium bg-transparent border border-gray-900 rounded-lg lg:visible lg:mt-10 hover:bg-[#ee4a03] hover:text-white hover:border-red-500">Browse
        more
      </a>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4 justify-items-center">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $categories = get_the_category();
        $bg_image = get_the_post_thumbnail_url();
      ?>
      <div class="py-1 mt-0 lg:py-5 lg:px-1 md:mt-5">
        <div
          class="object-cover w-full h-48 rounded-2xl shaodw-lg hover:shadow-2xl" style="background-image: url('<?php echo $bg_image; ?>'); background-size: cover;">
         
            <button
              class="px-2 py-1 m-10 font-sans text-sm font-semibold text-white bg-[#ee4a03] border-r-0 rounded-lg hover:bg-[#ee4a03]">
              <a href="<?php echo get_category_link( $categories[0]->term_id ); ?>"><?php echo esc_html( $categories[0]->name ); ?></a>
            </button>
         
        </div>
        <div class="py-4">
          <h4 class="block mt-6 text-sm font-bold tracking-widest text-gray-500 uppercase">
            <?php echo get_the_date(); ?> . <?php comments_number(); ?>
          </h4>
          <p class="mt-5 text-2xl font-semibold">
            <a href="<?php the_permalink(); ?>" title="" class="text-black hover:text-[#ee4a03]">
              <?php the_title(); ?>
            </a>
          </p>
        </div>
      </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
      <a href="<?php echo home_url('/browse-articles'); ?>"
        class="visible h-12 px-6 py-2 mt-2 mb-10 text-xl font-medium bg-transparent border border-gray-900 rounded-lg md:hidden lg:invisible hover:bg-[#ee4a03] hover:text-white hover:border-[#ee4a03]">Browse
        more
      </a>
    </div>
  </div>
</section>
<!-- Currently Trending ENDS -->
