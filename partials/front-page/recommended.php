<!-- Recommended Tools STARTS -->
<section class="py-10 bg-gray-50 sm:py-16 lg:py-18">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex flex-row">
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
          <div class="flex flex-col justify-between text-left">
            <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">
              Recommended Tools
            </h2>
            <div class="text-left">
              <button type="submit" onclick="window.location.href='/recommended.html'"
                class="inline-flex items-center justify-center invisible px-3 py-2 mt-3 text-xl font-semibold text-white transition-all duration-200 bg-[#ee4a03] border border-transparent rounded-md lg:visible focus:outline-none hover:[#ee4a03] focus:bg-[#ee4a03]">
                View All Tools <i class="mt-1 ml-1 fa-solid fa-arrow-right"></i></a>
              </button>
            </div>
          </div>
          <div>
            <p class="my-2 mb-5 text-lg leading-relaxed text-black">

              Ravi Gupta was launched in 2018. For the last 8 years, we’ve tried and tested hundreds oftools. Here are
              FOUR of our most recommended tools for all kinds of bloggers. The linksmentioned here are affiliate links,
              so when you purchase something, we get a smallcommission.🙂
            </p>

          </div>
        </div>
      </div>

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

        
        <div class="mt-5 text-center">
          <button type="submit" onclick="window.location.href='/recommended.html'"
            class="inline-flex items-center justify-center visible px-3 py-2 mt-3 text-xl font-semibold text-white transition-all duration-200 bg-[#ee4a03] border border-transparent rounded-md lg:hidden lg:invisible focus:outline-none hover:bg-[#ee4a03] focus:bg-[#ee4a03]">
            View All Tools<i class="mt-1 ml-1 fa-solid fa-arrow-right"></i></a>
          </button>
        </div>
      </div>
  </section>
  <!-- Recommended Tools ENDS -->