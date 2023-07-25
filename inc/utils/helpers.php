<?php

// Pagination
function ravig_pagination($query) {
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'prev_text' => __('<span class="inline-flex items-center justify-center w-[100px] px-4 py-2 mt-8 font-semibold text-white transition-all duration-200 bg-gray-600 rounded-md"> « Prev </span>'),
        'next_text' => __('<span class="inline-flex items-center justify-center w-[100px] px-4 py-2 mt-8 font-semibold text-white transition-all duration-200 bg-gray-600 rounded-md"> Next » </span>'),
        'mid_size' => 1, // Show only one page number before and after the current page
        'end_size' => 1, // Show only one page number at the beginning and end of the pagination
        'before_page_number' => '<span class="inline-flex items-center justify-center w-[40px] px-4 py-2 mt-8 font-semibold text-white transition-all duration-200 bg-gray-600 rounded-md">', // Add CSS class for pagination item
        'after_page_number' => '</span>' // Add closing tag for the pagination item
    ));
}
