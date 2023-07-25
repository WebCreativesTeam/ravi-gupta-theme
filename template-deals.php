<?php /* Template Name: Deals */ ?>
<?php get_header(); ?> 

<section class="flex justify-center pt-28">
    <div id="courses" class="w-[80%] pt-10">
        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
            Today's Popular Deals By Ravi Gupta
        </h2>
        <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
            <?php 
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'deal',
                    'posts_per_page' => 3,
                    'paged' => $paged
                );
                $query = new WP_Query($args);
                while($query->have_posts()) : $query->the_post();
            ?>
            <div class="overflow-hidden bg-white rounded shadow">
                <div class="p-5">
                    <div class="relative">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="block aspect-w-4 aspect-h-3">
                            <?php the_post_thumbnail('full', ['class' => 'object-cover w-full h-full']); ?>
                        </a>
                    </div>
                    <p class="mt-5 text-2xl font-semibold">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-black">
                            <?php the_title(); ?>
                        </a>
                    </p>
                    <div class="flex flex-row justify-between">
                        <button type="submit" class="inline-flex items-center justify-center px-3 py-2 mt-3 font-semibold text-white transition-all duration-200 bg-[#ee4a03] rounded-md hover:bg-[#ee4a03] focus:bg-[#ee4a03]">
                            Get It Now
                        </button>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-[#ee4a03] transition-all duration-200 border-b-2 border-transparent hover:border-[#ee4a03] focus:border-[#ee4a03]">
                            Read More
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="flex justify-center py-10">
          <div class="w-[120px] flex justify-around gap-5">
        
          <?php ravig_pagination($query);?>


          </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
