 
 <!-- Blogging STARTS-->
 <section class="py-5 bg-gray-50 sm:py-16 lg:py-14">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="visible mt-10 text-center lg:hidden lg:invisible">
        <h1 class="m-5 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Articles</h1>
        <button
          class="w-auto px-4 py-2 font-sans text-lg font-medium text-gray-900 bg-gray-200 rounded hover:shadow-2xl hover:text-[#ee4a03]"
          id="menu-btn">Categories</button>

          <div class="flex-col hidden w-auto p-2 mt-1 text-sm bg-gray-200 rounded" id="dropdown">
            <?php 
              $categories = get_categories(array(
                'orderby' => 'name',
                'order'   => 'ASC'
              ));
            
              foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id);
                $category_name = $category->name;
                echo '<a href="' . esc_url($category_link) . '" class="px-4 py-1 font-sans text-base font-normal text-left text-gray-900 rounded hover:text-[#ee4a03] hover:bg-gray-100 elem">' . esc_html($category_name) . '</a>';
              }
            ?>
          </div>

      </div>
      <div class="flex flex-row w-full">
        <div class="invisible hidden px-5 my-10 lg:flex lg:flex-col bg-gray-50 lg:visible md:w-1/4 lg:w-1/4">
        <?php
          $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC'
          ));

          foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id);
            $category_name = $category->name;
            echo '<a href="' . esc_url($category_link) . '" class="p-2 hover:shadow-2xl elem">';
            echo '<h3 class="pl-5 font-sans text-lg font-medium text-left text-gray-800 hover:text-[#ee4a03]">' . esc_html($category_name) . '</h3>';
            echo '</a>';
          }
        ?>

        </div>
        <?php
$category_slug = "category-slug"; // Specify the category slug here
$category_object = get_category_by_slug($category_slug);

if ($category_object) { // Check if the category exists
    $category_name = $category_object->name;
    $category_link = get_category_link($category_object->term_id);
    // Rest of your code goes here
} 
?>


<div class="grid w-full grid-cols-1 md:grid-cols-1 categ">
    <div class="flex flex-row justify-between w-full lg:visible">
        <h1 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl ">All Categories</h1>
        <a href="<?php echo home_url('/blog'); ?>" class="px-3 py-2 font-sans text-xl font-medium text-black border-0 rounded bg-gray-50">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <hr class="border md:mt-2 md:mb-5" />
    <div class="grid w-full grid-cols-1 mt-5 md:grid-cols-2 lg:grid-cols-3 md:gap-4 lg:gap-5 justify-items-center">
        <?php
        $query = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => -1, // Number of posts to show
      ));
      
      if ($query->have_posts()) {
          while ($query->have_posts()) {
              $query->the_post();
              $post_title = get_the_title();
              $post_link = get_permalink();
              $post_date = get_the_date('F j, Y');
              $post_image_url = get_the_post_thumbnail_url(); 
              $categories = get_the_category(); // Get the categories of the post
              $category_name = $categories[0]->name; // Assuming you want the first category
              echo '<div class="flex items-stretch py-4 " data-filter="' . esc_attr($category_name) . '">';
              echo '<div class="h-auto overflow-hidden rounded shadow-lg group hover:shadow-2xl">';
              echo '<a href="' . esc_url($post_link) . '"><img class="group-hover:opacity-80" src="' . esc_url($post_image_url) . '" alt="" class="w-auto"></a>';
              echo '<div class="p-5 text-center md:text-left">';
              echo '<p class="mt-2 text-2xl font-semibold">';
              echo '<a href="' . esc_url($post_link) . '" title="" class="text-black group-hover:text-[#ee4a03]">';
              echo esc_html($post_title);
              echo '</a>';
              echo '</p>';
              echo '<p class="block mt-6 text-sm font-semibold tracking-widest text-center text-gray-500 uppercase">';
              echo 'Published on ' . esc_html($post_date);
              echo '</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
          wp_reset_postdata();
      }
      
        ?>
        <a href="" class="visible px-3 mt-4 font-sans text-xl font-medium text-black border-0 rounded md:hidden lg:invisible bg-gray-50">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>

      </div>

    </div>
  </section>
  <!-- Blogging ENDS -->