<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?> 
 
<section
      class="py-10 bg-black bg-right bg-no-repeat bg-cover sm:py-16 lg:py-18"
      style="
        background-image: url('<?php echo RAVIG_IMG_DIR . '/bg-r.png' ?>');
      "
    >
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div
          class="grid grid-cols-1 md:items-stretch md:grid-cols-2 gap-x-12 lg:gap-x-20 gap-y-10"
        >
          <div class="flex flex-col justify-around text-center md:text-left">
            <h2
              class="text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-7xl"
            >
              Let’s do great work together.
            </h2>
            <div class="pt-10">
              <div
                class="max-w-[500px] flex flex-row items-center rounded-lg bg-[#ee4a03] text-white"
              >
                <div class="p-3">
                  <svg
                    class="fill-black"
                    xmlns="http://www.w3.org/2000/svg"
                    height="6em"
                    viewBox="0 0 384 512"
                  >
                 
                    <path
                      d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"
                    />
                  </svg>
                </div>
                <div class="p-3 font-bold text-black">
                  <h1 class="text-xl">SPEAK WITH A STRATEGIST</h1>
                  <h1 class="text-3xl">+91 9170387679</h1>
                </div>
              </div>
            </div>
          </div>

          <div class="lg:pl-12">
            <div class="overflow-hidden bg-white rounded-md">
              <div class="p-6 sm:p-10">
               <?php echo do_shortcode('[contact-form-7 id="62" title="Contact Us Page Form" html_class="contact-form"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--ENDS -->

    <!-- CTA Section Starts -->
    <section
      class="flex flex-col items-center justify-start lg:flex-row bg-[#01102F]"
    >
      <div
        class="w-full lg:w-[65%] min-h-screen flex justify-center items-center flex-col"
      >
        <div
          class="flex flex-col items-center justify-center w-full sm:flex-row sm:mt-10"
        >
          <div class="flex flex-col justify-center align-middle">
            <img
              loading="lazy"
              src="<?php echo RAVIG_IMG_DIR . '/footer-roket.webp' ?>"
              alt="Sapce Img"
              width="180px"
            />
          </div>
          <div
            class="w-[90%] flex justify-center ml-5 sm:w-[80%] items-center sm:items-start flex-col"
          >
            <h4 class="my-5 text-3xl font-bold text-white">
              We’ve driven over
            </h4>
            <div class="w-[60%] flex justify-evenly items-center mt-4">
              <span
                class="bg-white text-[25px] rounded-[5px] text-white font-bold sm:text-4xl lg:text-7xl Y"
                style="
                  background: linear-gradient(
                    180deg,
                    #ee4a03 55.15%,
                    #ee4a03 59.84%
                  );
                  padding: 15px;
                  margin-right: 7px;
                "
                >7</span
              >
              <span
                class="bg-whit text-[25px] rounded-[5px] text-white font-bold sm:text-4xl lg:text-7xl Y"
                style="
                  background: linear-gradient(
                    180deg,
                    #ee4a03 55.15%,
                    #ee4a03 59.84%
                  );
                  padding: 15px;
                  margin-right: 7px;
                "
                >8</span
              >
              <span
                class="bg-whit text-[25px] rounded-[5px] text-white font-bold sm:text-4xl lg:text-7xl Y"
                style="
                  background: linear-gradient(
                    180deg,
                    #ee4a03 55.15%,
                    #ee4a03 59.84%
                  );
                  padding: 15px;
                  margin-right: 7px;
                "
                >3</span
              >
              <span
                class="bg-whit text-[25px] rounded-[5px] text-white font-bold sm:text-4xl lg:text-7xl Y"
                style="
                  background: linear-gradient(
                    180deg,
                    #ee4a03 55.15%,
                    #ee4a03 59.84%
                  );
                  padding: 15px;
                  margin-right: 7px;
                "
                >9</span
              >
              <span
                class="bg-whit text-[25px] rounded-[5px] text-white font-bold sm:text-4xl lg:text-7xl Y"
                style="
                  background: linear-gradient(
                    180deg,
                    #ee4a03 55.15%,
                    #ee4a03 59.84%
                  );
                  padding: 15px;
                  margin-right: 7px;
                "
                >6</span
              >
              <span
                class="bg-whit text-[25px] rounded-[5px] text-white font-bold sm:text-4xl lg:text-7xl Y"
                style="
                  background: linear-gradient(
                    180deg,
                    #ee4a03 55.15%,
                    #ee4a03 59.84%
                  );
                  padding: 15px;
                  margin-right: 7px;
                "
                >8</span
              >
              <span
                class="bg-whit text-[25px] rounded-[5px] text-white font-bold sm:text-4xl lg:text-7xl Y"
                style="
                  background: linear-gradient(
                    180deg,
                    #ee4a03 55.15%,
                    #ee4a03 59.84%
                  );
                  padding: 15px;
                  margin-right: 7px;
                "
                >4</span
              >
            </div>
            <h4 class="text-[24px] font-bold text-white my-5">
              leads for clients.
            </h4>
          </div>
        </div>
        <h4
          class="text-white bold text-[24px] w-11/12 text-center md:text-left sm:ml-7 font-bold mt-5"
        >
          Discover how we can help your business grow
        </h4>
      
        <div class="w-[70%] pt-10 pb-10 ps justify-center">
        <?php echo do_shortcode('[contact-form-7 id="63" title="Contact Us Proposal Form" html_class="send-proposal"]');?>
        </div>
      </div>

   </section>
    <!-- CTA Section Ends -->
<?php get_footer(); ?>