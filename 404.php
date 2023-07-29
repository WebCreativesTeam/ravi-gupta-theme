<?php wp_head(); ?>
  <div class="flex justify-center pt-10">
    <div class="relative">
      <img class="w-full h-auto" src="<?php echo RAVIG_IMG_DIR . '/404.png' ?>" alt="" />
      <div class="flex justify-center -mt-5 md:-mt-10 lg:-mt-24">
        <a class="w-[150px] h-[50px] inline-flex items-center justify-center px-3 py-2 font-semibold text-white transition-all duration-200 bg-[#ee4a03] rounded-xl hover:bg-gray-900 focus:bg-gray-900" href="<?php echo home_url('/') ?>" >Back to Home</a>
      </div>
    </div>
    
  </div>