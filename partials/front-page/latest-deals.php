<!-- Latest Deals STARTS -->
<section class="py-10 bg-bl sm:py-16 lg:py-18">
  <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
    <div class="flex items-end justify-between">
      <div class="flex-1 text-center lg:text-left">
        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
          Today's Popular Deals By Ravi Gupta
        </h2>
      </div>

      <div class="hidden lg:flex lg:items-center lg:space-x-3">
        <a href="<?php echo home_url('/todays-deal'); ?>"
          class="invisible h-12 px-8 py-2 text-xl font-medium bg-transparent border border-gray-900 rounded-lg lg:visible lg:mt-10 hover:bg-[#ee4a03] hover:text-white hover:border-[#ee4a03]">View
          All Deals
        </a>
      </div>
    </div>

    <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
      <?php
      $args = array(
        'post_type' => 'tool',
        'posts_per_page' => 3,
        'meta_query' => array(
          array(
            'key' => 'tool_on_deal',
            'value' => 'yes',
            'compare' => '='
          )
        )
      );
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $affiliate_link = get_post_meta(get_the_ID(), 'affiliate_link', true);
      ?>
      <div class="overflow-hidden bg-white rounded shadow">
        <div class="p-5">
          <div class="relative">
            <a href="<?php echo $affiliate_link ? $affiliate_link : get_the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="block aspect-w-4 aspect-h-3">
              <?php the_post_thumbnail('full', ['class' => 'object-cover w-full h-full']); ?>
            </a>
          </div>
          <p class="mt-5 text-2xl font-semibold">
          <?php
          // Get the deal_title custom field
          $deal_title = get_post_meta(get_the_ID(), 'deal_title', true);

          // Check if the deal_title is defined
          if (!empty($deal_title)) {
              // If deal_title is defined, use it
              $title = $deal_title;
          } else {
              // Otherwise, use the post title
              $title = get_the_title();
          }
          ?>
            <a href="<?php echo $affiliate_link ? $affiliate_link : get_the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-black">
              <?php echo $deal_title; ?>
            </a>
          </p>
          <div class="flex flex-row justify-between">
            <a href="<?php echo $affiliate_link ? $affiliate_link : get_the_permalink(); ?>"
              class="inline-flex items-center justify-center px-3 py-2 mt-3 font-semibold text-white transition-all duration-200 bg-[#ee4a03] rounded-md hover:bg-[#ee4a03] focus:bg-[#ee4a03]">
              Read More
            </a>

          </div>
        </div>
      </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>

    <div class="flex items-center justify-center mt-8 space-x-3 lg:hidden">
      <button type="button"
        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-[#ee4a03] hover:text-white focus:bg-[#ee4a03] focus:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <button type="button"
        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-[#ee4a03] hover:text-white focus:bg-[#ee4a03] focus:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
</section>
<!-- Latest Deals ENDS -->
