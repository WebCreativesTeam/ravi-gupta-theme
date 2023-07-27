<?php /* Template Name: Detailed Blogging */ ?>
<?php get_header(); ?> 

<!-- Latest Articles -->
<section class="flex justify-center ">
    <div id="courses" class="w-[80%] pt-10">
        <h2 class="text-3xl font-bold leading-tight text-center text-black sm:text-4xl lg:text-5xl">
            Latest Articles
        </h2>
        <div class="justify-items-center">
            <div id="blog1" class="grid w-full grid-cols-1 mt-5 md:grid-cols-2 lg:grid-cols-3 md:gap-4 lg:gap-5 justify-items-center">
                <?php 
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => 12,
                    'paged' => $paged,
                );
                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $url = get_the_permalink();
                        $title = get_the_title();
                        $date = get_the_date();
                        $thumbnail = get_the_post_thumbnail_url();
                        ?>
                        <div class="flex items-stretch py-4 ">
                            <div class="h-auto overflow-hidden rounded shadow-lg group hover:shadow-2xl">
                                <a href="<?php echo $url; ?>"><img class="group-hover:opacity-80" src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" class="w-auto"></a>
                                <div class="p-5 text-center md:text-left">
                                    <p class="mt-2 text-2xl font-semibold">
                                        <a href="<?php echo $url; ?>" title="<?php echo $title; ?>" class="text-black group-hover:text-[#ee4a03]">
                                            <?php echo $title; ?>
                                        </a>
                                    </p>
                                    <p class="block mt-6 text-sm font-semibold tracking-widest text-center text-gray-500 uppercase">
                                        Published on <?php echo $date; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>
            </div>
            <a href=""
                class="visible px-3 mt-4 font-sans text-xl font-medium text-black border-0 rounded md:hidden lg:invisible bg-gray-50">View
                All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<div class="flex justify-center py-10">
        <div class="w-[120px] flex justify-around gap-5">
       
        <?php ravig_pagination($the_query);?>


        </div>
      </div>

<!-- Trending Now -->
<section class="flex justify-center py-16">
    <div id="courses" class="w-[80%] pt-10">
        <h2 class="text-3xl font-bold leading-tight text-center text-black sm:text-4xl lg:text-5xl">
            Trending Now
        </h2>
        <div id="blog2" class="grid w-full grid-cols-1 mt-5 md:grid-cols-2 lg:grid-cols-3 md:gap-4 lg:gap-5 justify-items-center">
            <?php 
            $trending_posts_args = array(
              'post_type' => 'post',
              'posts_per_page' => 6,
              'meta_query' => array(
                  array(
                      'key' => 'trending_post',
                      'value' => 'yes',
                      'compare' => '=',
                  )
              )
          );
          $trending_posts_query = new WP_Query($trending_posts_args);
          

            if ( $trending_posts_query->have_posts() ) :
                while ( $trending_posts_query->have_posts() ) : $trending_posts_query->the_post();
                    $url = get_the_permalink();
                    $title = get_the_title();
                    $date = get_the_date();
                    $thumbnail = get_the_post_thumbnail_url();
                    ?>
                    <div class="flex items-stretch py-4 ">
                        <div class="h-auto overflow-hidden rounded shadow-lg group hover:shadow-2xl">
                            <a href="<?php echo $url; ?>"><img class="group-hover:opacity-80" src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" class="w-auto"></a>
                            <div class="p-5 text-center md:text-left">
                                <p class="mt-2 text-2xl font-semibold">
                                    <a href="<?php echo $url; ?>" title="<?php echo $title; ?>" class="text-black group-hover:text-[#ee4a03]">
                                        <?php echo $title; ?>
                                    </a>
                                </p>
                                <p class="block mt-6 text-sm font-semibold tracking-widest text-center text-gray-500 uppercase">
                                    Published on <?php echo $date; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<div class="flex justify-center py-10">
        <div class="w-[120px] flex justify-around gap-5">
       
        <?php ravig_pagination($trending_posts_query);?>


        </div>
      </div>
<?php get_footer(); ?>
