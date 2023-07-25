<?php
/*
Template Name: Recommended Tools
*/
get_header();
?>
<section class="flex justify-center pt-10">
    <div id="courses" class="w-[80%] pt-10">
        <h2 class="text-3xl font-bold leading-tight text-center text-black sm:text-4xl lg:text-5xl ltr">Recommended Tools</h2>
        <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 md:grid-cols-1 lg:mt-16 lg:grid-cols-4 lg:max-w-full">

            <?php
            $args = array(
                'post_type' => 'tool',
                'posts_per_page' => 12,
                'paged' => $paged
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
            ?>

                <div class="overflow-hidden transition-all duration-200 delay-150 transform bg-white border rounded shadow-sm hover:scale-105 hover:shadow-2xl">
                    <div class="p-4">
                        <div class="relative">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="block aspect-w-4">
                                <?php the_post_thumbnail('full', array('class' => 'object-cover w-full')); ?>
                            </a>
                        </div>
                        <div class="px-2 py-3 text-center">
                            <hr class="mx-auto border md:mt-5" />
                            <p class="mt-2 text-2xl font-semibold text-center">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-gray-900">
                                    <?php the_title(); ?>
                                </a>
                            </p>
                            <p class="mt-5 text-xl font-medium">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-black">
                                    <?php the_excerpt(); ?>
                                </a>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center justify-center px-3 py-2 mt-5 font-semibold text-white uppercase transition-all duration-200 bg-[#ee4a03] border border-transparent rounded-md focus:outline-none hover:bg-[#ee4a03] focus:bg-[#ee4a03]">Read More</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>
<div class="flex justify-center py-10">
        <div class="w-[120px] flex justify-around gap-5">
       
        <?php ravig_pagination($loop);?>


        </div>
</div>
<?php
get_footer();
?>
