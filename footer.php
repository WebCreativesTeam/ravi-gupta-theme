<?php $contact_info = new ContactInfo(); ?>
<?php $socialLinks = new SocialLinks(); ?>
<!-- Footer Section STARTS -->
 <section class="py-10 bg-gray-50 sm:pt-16 lg:pt-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid grid-cols-2 md:col-span-3 lg:grid-cols-8 gap-y-16 gap-x-12">
        <div class="col-span-2 md:col-span-2 lg:col-span-2 lg:pr-8">
          
          <h1>
            <a href="<?php echo home_url('/'); ?>">
            <img class="w-32 xl:w-48" src="<?php echo RAVIG_IMG_DIR . '/logo.png' ?>" alt="">
            </a>
           
        </h1>
          <p class="text-base leading-relaxed text-gray-600 mt-7">
            I'm Ravi Gupta, the founder of ravi-gupta.com. Here, I teach beginners Get More Traffic More Customers More
            Revenue With Digital Marketing Join Our Newsletter
          </p>


        </div>

        <div>
          <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">
            Information
          </p>

          <ul class="mt-6 space-y-4">
            <li>
              <a href="<?php echo home_url('/about-us'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                About
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/contact-us'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Contact us
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/blog'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Our Blog
              </a>
            </li>
          </ul>
        </div>

        <div>
          <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">
            Navigate
          </p>

          <ul class="mt-6 space-y-4">
            <li>
              <a href="<?php echo home_url('//services/digital-marketing'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Digital Marketing
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/services/social-media-marketing'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Social Media Marketing
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/services/website-design'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Web Design
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/services/website-development'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Web Development
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/services/search-engine-optimization'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                SEO
              </a>
            </li>
          </ul>
        </div>

        <div>
          <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">
            Resources
          </p>

          <ul class="mt-6 space-y-4">
            <li>
              <a href="<?php echo home_url('/ebooks'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Ebooks
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/courses'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Courses
              </a>
            </li>

            <li>
              <a href="<?php echo $socialLinks::Youtube; ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Youtube
              </a>
            </li>

            <li>
              <a href="<?php echo home_url('/recommended-tools'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Tools
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/todays-deal'); ?>" title=""
                class="flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
                Popular Deals
              </a>
            </li>
          </ul>
        </div>

        <div class="col-span-3 lg:pl-8">
          <p class="text-sm font-semibold tracking-widest text-[#ee4a03] uppercase">
            Subscribe to newsletter
          </p>

          <?php echo do_shortcode('[contact-form-7 id="81" title="Footer Form" html_class="subscribe-form" ]'); ?>

          <a href="<?php echo home_url('/');?>"
            class="pt-5 pl-2 flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
            <img src="<?php echo RAVIG_IMG_DIR . '/email.png' ?>" alt="">&nbsp;
            <?php echo $contact_info::Email; ?></a>
          <div class="flex flex-row items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="inline-block w-6 pt-5 pl-2 text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]"
              viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path
                d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
            </svg>
            <a href="tel:<?php echo str_replace(' ', '', $contact_info::Phone);  ?>">
            <h1
              class="pt-5 pl-2 flex text-base text-black transition-all duration-200 hover:text-[#ee4a03] focus:text-[#ee4a03]">
              <?php echo $contact_info::Phone; ?>
              </h1>
            </a>
          </div>
        </div>
      </div>

      <hr class="mt-16 mb-10 border-gray-200" />

      <p class="text-sm text-center text-gray-600">
        © 2008-2023: Ravi Gupta | 
        <a href="<?php echo home_url('/contact-us'); ?>" class="href">Contact Us</a> | 
        <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a> | 
        <a href="<?php echo home_url('/legal'); ?>">Disclaimer & Legal</a>
      </p>
    </div>
  </section>
  <!-- Footer Section ENDS -->

<?php wp_footer(); ?>
</body>
</html>