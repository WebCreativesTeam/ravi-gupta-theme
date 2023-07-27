<?php /* Template Name: Browse Blog */ ?>
<?php get_header(); ?> 

<section class="flex justify-center pt-28">

    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4 justify-items-center w-[80%]">
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
            $comments_count = wp_count_comments(get_the_ID());
            $categories = get_the_category();
            $thumbnail = get_the_post_thumbnail_url();
            if(!empty($categories)) {
                $category_link = get_category_link($categories[0]->term_id );
                $category_name = $categories[0]->name;
            }
            ?>
            <div class="py-1 mt-0 lg:py-5 lg:px-1 md:mt-5">
                <div class="object-cover w-full h-48 rounded-2xl shaodw-lg hover:shadow-2xl" style="background-image: url('<?php echo $thumbnail; ?>'); background-size: cover;">
                    <button class="px-2 py-1 m-10 font-sans text-sm font-semibold text-white bg-red-600 border-r-0 rounded-lg hover:bg-red-700">
                        <a href="<?php echo esc_url( $category_link ); ?>"><?php echo $category_name; ?></a>
                    </button>
                </div>
                <div class="py-4">
                    <h4 class="block mt-6 text-sm font-bold tracking-widest text-gray-500 uppercase">
                        <?php echo $date; ?> . <?php echo $comments_count->total_comments; ?> Comment<?php if($comments_count->total_comments!=1) echo 's'; ?>
                    </h4>
                    <p class="mt-5 text-2xl font-semibold">
                        <a href="<?php echo $url; ?>" title="<?php echo $title; ?>" class="text-black hover:text-red-500">
                            <?php echo $title; ?>
                        </a>
                    </p>
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
    
</section>
<div class="flex justify-center py-10">
        <div class="w-[120px] flex justify-around gap-5">
       
        <?php ravig_pagination($the_query);?>


        </div>
</div>
<?php get_footer(); ?>
