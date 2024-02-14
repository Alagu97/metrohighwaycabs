<footer class="bg-dark-100">
   <div class="container mx-auto py-12 md:py-24">
      <div class="text-2xl md:text-3xl font-semibold font-monst text-white border-b inline-block pb-5 border-b-red-300">Our Locations</div>
      <div class="flex justify-between items-start gap-5 md:gap-10 w-full flex-wrap pt-10">
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)]">
            <div class="text-xl md:text-2xl font-monst font-semibold uppercase text-red-300 ">Rameshwaram </div>
            <div class="text-white text-base md:text-xl font-monst font-medium pt-5">BRANCH-1</div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">13/52 , Gandhinagar, </div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">Mandapam, </div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">   Ramanathapuram - 623518 </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)]">
            <div class="text-xl md:text-2xl font-monst font-semibold uppercase text-red-300 "> Chennai </div>
            <div class="text-white text-base md:text-xl font-monst font-medium pt-5">BRANCH-2</div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">1st floor Kamarajar street,</div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">Annanedunchala , </div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">    Perungudi , Chennai - 600096 </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)]">
            <div class="text-xl md:text-2xl font-monst font-semibold uppercase text-red-300 ">Hosur</div>
            <div class="text-white text-base md:text-xl font-monst font-medium pt-5">BRANCH-3</div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">79/2 Indranagar, </div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">Bagalur road , </div>
            <div class="text-base md:text-lg font-monst text-gray-600 font-medium pt-2 hover:text-white duration-500">Hosur, Krishnagiri - 635109 </div>
         </div>
      </div>
      <div class="relative ">
         <a href="https://wa.me/919751110203/?text=Hi" target="_blank" class="right-[1%] fixed  bottom-[3%]">
            <div class="bg-logo-2 animate-bounce duration-500 bg-contain bg-center bg-no-repeat w-14 h-14 ">
               <!--<div class="">Enquiry</div>-->
            </div>
         </a>
      </div>
   </div>
   <!-- Copyright disclaimer and developed by information -->
   <div class="bg-gray-800 text-center text-sm text-gray-400 mt-0 py-3">
      &copy; <?php echo date('Y');?> Metro Highway Cabs. All rights reserved. Developed by <span classs="text-white font-monst">THE-BOYS.</span>
   </div>
</footer>
<!-- config  -->
<script src="assets/js/tailwindconfig.js"></script>
<!-- twelement js  -->
<script src="assets/tailwind-element/twelement.js"></script>
<!-- swiper js  -->
<script src="assets/swiper/swiper.js"></script>
<script src="assets/js/script.js"></script>
<!-- <script src="assets/js/bookings.js"></script> -->
<script>
   var swiper = new Swiper(".newSwiper", {
    slidesPerView: 3,
    centerSlide:true,
     spaceBetween: 30,
      speed: 1000,
    loop: true,
    grabCursor: true,
    
       autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
     navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
       pagination: {
    el: '.pagination',
   clickable: true,
      renderBullet: function (index, className) {
        return '<span class="h-2 w-2  rounded-full top-10  bg-gray-100  opacity-100 [&.swiper-pagination-bullet-active]:bg-red-300 '  + className +  '"></span>';
    },
   },
    breakpoints:{
    	0:{
    		slidesPerView:1,
    	},
    	520:{
    		slidesPerView:2,
    	},
    	950:{
    		slidesPerView:3,
    	},
    	1030:{
    		slidesPerView:3,
    	},
    },
   });
</script>
<script>
   var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    centerSlide:true,
     spaceBetween: 30,
      speed: 1000,
    loop: true,
    grabCursor: true,
    
       autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
     navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
       pagination: {
    el: '.pagination2',
   clickable: true,
      renderBullet: function (index, className) {
        return '<span class="h-2 w-2  rounded-full top-10  bg-gray-100  opacity-100 [&.swiper-pagination-bullet-active]:bg-red-300 '  + className +  '"></span>';
    },
   },
    breakpoints:{
    	0:{
    		slidesPerView:1,
    	},
    	520:{
    		slidesPerView:1,
    	},
    	950:{
    		slidesPerView:2,
    	},
    	1030:{
    		slidesPerView:2,
    	},
    },
   });
</script>