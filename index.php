<?php $page='home'; include "includes/header.php";
   include "includes/menu.php" ?>
<section class="bg-home-1 bg-cover  bg-center w-full h-full">
   <div class="container mx-auto py-10">
      <div class="flex justify-center items-center w-full h-full">
         <div class="flex justify-between items-center gap-5 flex-wrap w-full">
            <div class="w-full lg:w-[calc(40%_-_10px)]">
               <div class="text-white text-base md:text-lg font-monst font-medium tracking-normal ">
                  Metro highway Cabs
               </div>
               <div class="text-2xl md:text-3xl font-semibold font-sans text-red-300">
                  Metro highway Cabs BOOKING
               </div>
               <p class="text-white font-sans pt-3 text-justify md:pt-5 text-base">
                  Best Outstation Cab Services Across Tamil Nadu, Pondicherry, Kerala, Andhra Pradesh And
                  Bangalore
               </p>
               <div class=" text-base md:text-lg uppercase pt-3 md:pt-5 font-monst font-medium tracking-wide text-white">
                  BOOKING CALL - 24/7
               </div>
               <div class="pt-3 md:pt-5">
                  <a href="tel:+91 9751110203" title="phone" class="text-2xl md:text-3xl text-red-300 font-monst font-semibold"><i class="bi bi-telephone-fill text-blue-500 text-3xl pr-5"></i>+91 9751110203</a>
               </div>
            </div>
            <div class="w-full lg:w-[calc(60%_-_10px)]">
               <div class="w-full bg-white py-10 px-5 md:px-10 rounded">
                  <div class="text-black text-base">I'm Looking For</div>
                  <ul class="mb-8 md:mb-5 flex list-none gap-3  flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                     <li role="presentation">
                        <a href="#tabs-home" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-4 md:px-7 pb-3.5 pt-4 text-sm font-normal font-monst uppercase leading-tight text-black hover:text-white hover:border-transparent hover:bg-red-300 focus:isolate focus:border-transparent data-[te-nav-active]:bg-red-300 data-[te-nav-active]:border-blue-500 data-[te-nav-active]:text-white " data-te-toggle="pill" data-te-target="#tabs-home" data-te-nav-active role="tab" aria-controls="tabs-home" aria-selected="true">One Way</a>
                     </li>
                     <li role="presentation">
                        <a href="#tabs-profile" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-4 md:px-7 pb-3.5 pt-4 text-sm font-normal font-monst uppercase leading-tight text-black hover:text-white hover:border-transparent hover:bg-red-300 focus:isolate focus:border-transparent data-[te-nav-active]:bg-red-300 data-[te-nav-active]:border-blue-500 data-[te-nav-active]:text-white" data-te-toggle="pill" data-te-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="false">Round Trip</a>
                     </li>
                  </ul>
                  <!--Tabs content-->
                  <div class="md:mb-6 h-full md:h-[500px] md:flex justify-center items-center mt-[-30px]">
                     <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab" data-te-tab-active>
                        <form action="" method="post" id="booking-form" class="w-full">
                           <div class="flex justify-between items-center font-monst w-full gap-5 flex-wrap">
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Name</label>
                                 <input type="text" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Full Name">
                              </div>
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Mobile Number</label>
                                 <input type="number" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Mobile Number">
                              </div>
                           </div>
                           <div class="w-full pt-3">
                              <label for="name" class="text-lg text-black  ">Email Id (optional)</label>
                              <input type="email" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Email Id">
                           </div>
                           <div class="flex justify-between items-center w-full gap-5 pt-3 flex-wrap">
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Pickup Address</label>
                                 <input type="text" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Pickup Address">
                              </div>
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Drop Address</label>
                                 <input type="text" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Drop Address">
                              </div>
                           </div>
                           <div class="flex justify-between items-center w-full gap-5 pt-3 flex-wrap">
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Pickup Date</label>
                                 <input type="date" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Pickup Date">
                              </div>
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Pickup Time</label>
                                 <input type="time" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Pickup Time">
                              </div>
                           </div>
                           <div class="flex justify-between items-center w-full gap-5 flex-wrap">
                              <div class="w-full relative  md:w-[calc(50%_-_10px)] lg:w-[calc(25%_-_10px)]">
                              </div>
                           </div>
                           <button class="mt-5 text-white text-lg font-medium font-monst hover:bg-black duration-500 rounded w-full text-center py-3 bg-red-300">
                           <a href="javascript:;" title="estimate" class="w-full  ">Get Estimate</a>
                           </button>
                        </form>
                     </div>
                     <div class="mt-12 hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                        <form action="" method="post" class="w-full">
                           <div class="flex justify-between items-center w-full gap-5 flex-wrap">
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Name</label>
                                 <input type="text" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Full Name">
                              </div>
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Mobile</label>
                                 <input type="number" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Mobile Number">
                              </div>
                           </div>
                           <div class="w-full pt-3">
                              <label for="name" class="text-lg text-black  ">Email Id (optional)</label>
                              <input type="email" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Email Id">
                           </div>
                           <div class="flex justify-between items-center w-full gap-5 pt-3 flex-wrap">
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Pickup Address</label>
                                 <input type="text" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Pickup Address">
                              </div>
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Drop Address</label>
                                 <input type="text" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Drop Address">
                              </div>
                           </div>
                           <div class="flex justify-between items-center w-full gap-5 pt-3 flex-wrap">
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Pickup Date</label>
                                 <input type="date" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Pickup Date">
                              </div>
                              <div class="w-full md:w-[calc(50%_-_10px)]">
                                 <label for="name" class="text-lg text-black  ">Pickup Time</label>
                                 <input type="time" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Pickup Time">
                              </div>
                           </div>
                           <div class="w-full pt-3">
                              <label for="name" class="text-lg text-black  ">Return Date</label>
                              <input type="date" class="w-full p-2 rounded mt-1 border-[1px] border-gray-100 border focus:outline-none placeholder:text-black text-black focus:border-blue-500 " placeholder="Return Date">
                           </div>
                           <button type="button" onclick="createBooking()" class="mt-5 text-white text-lg font-medium font-monst hover:bg-black duration-500 rounded w-full text-center py-3 bg-red-300">Get Estimate
                           <!--<a href="javascript:;" title="estimate" class="w-full  ">Get Estimate</a>-->
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- about us section start -->
<section>
   <div class="container mx-auto py-12 md:py-24">
      <div class="flex justify-between items-center w-full gap-5 flex-wrap">
         <div class="w-full lg:w-[calc(50%_-_10px)]">
            <div class="text-sm tracking-widest font-monst font-bold text-dark-100 ">ABOUT US</div>
            <div class="text-monst font-bold text-xl md:text-2xl pt-3  text-black">BOOK OUTSTATION TRIPS WITH METRO HIGHWAY CABS
            </div>
            <div class="w-16 h-[2px] mt-5 bg-red-300"></div>
            <div class="flex justify-between items-start pt-8 w-full gap-3">
               <div class="w-[10%] md:w-[5%]">
                  <i class="bi bi-arrow-right-circle text-2xl text-red-300"></i>
               </div>
               <div class="w-[90%] md:w-[95%] text-dark-100text-base text-justify">
                  Metro highway Cabs operated reliable <a href="javascript:;" title="Metro highway Cabs" class="text-red-300">Metro highway Cabs</a> in the fixed price. As a tourist, you can always rely on our drivers who
                  are very knowledgeable about the local tourist places.
               </div>
            </div>
            <div class="flex justify-between items-start pt-5 w-full gap-3">
               <div class="w-[10%] md:w-[5%]">
                  <i class="bi bi-arrow-right-circle text-2xl text-red-300"></i>
               </div>
               <div class="w-[90%] md:w-[95%] text-dark-100text-base text-justify">
                  Even if you need our taxi for a business trip, you can reach all places at the correct time of
                  your appointment with our quick and safe service.
               </div>
            </div>
            <div class="flex justify-between items-start pt-5 w-full gap-3">
               <div class="w-[10%] md:w-[5%]">
                  <i class="bi bi-arrow-right-circle text-2xl text-red-300"></i>
               </div>
               <div class="w-[90%] md:w-[95%] text-dark-100text-base text-justify">
                  With the help of route maps and professional guidance from our team, our drivers will help you
                  to get a hassle-free travel experience
               </div>
            </div>
         </div>
         <div class="w-full lg:w-[calc(50%_-_10px)] ">
            <div class="bg-taxi-drive bg-cover bg-center rounded-xl border border-[1px] border-black w-full h-[250px] md:h-[400px]">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- about us section end -->
<!-- service section start -->
<section class="bg-blue-300">
   <div class="container mx-auto py-12 md:py-24">
      <div class="text-sm tracking-widest font-monst font-bold text-white ">SERVICE</div>
      <div class="text-monst font-bold text-xl md:text-2xl pt-3  text-white">Why Choose Metro Highway Cabs?
      </div>
      <div class="w-16 h-[2px] mt-5 bg-red-300"></div>
      <div class="flex justify-between items-center w-full gap-5 pt-10 flex-wrap">
         <div class="w-full lg:w-[calc(50%_-_10px)] group">
            <div class="flex justify-between items-center md:flex-nowrap flex-wrap gap-0 md:gap-3 h-full md:h-[100px]">
               <div class="w-full md:w-[25%] overflow-hidden ">
                  <div class="bg-taxi-1 bg-cover bg-center w-full h-[150px] md:h-[100px] group-hover:scale-110 duration-500"></div>
               </div>
               <div class="w-full md:w-[75%] bg-dark-200 h-[80px] md:h-full  flex justify-center items-center">
                  <div class="text-center text-white text-sm font-monst group-hover:text-red-300 duration-500">ON-TIME PICKUP</div>
               </div>
            </div>
         </div>
         <div class="w-full lg:w-[calc(50%_-_10px)] group">
            <div class="flex justify-between items-center md:flex-nowrap flex-wrap gap-0 md:gap-3 h-full md:h-[100px]">
               <div class="w-full md:w-[25%] overflow-hidden">
                  <div class="bg-taxi-2 bg-cover bg-center w-full h-[150px] md:h-[100px] group-hover:scale-110 duration-500"></div>
               </div>
               <div class="w-full md:w-[75%] bg-dark-200 h-[80px] md:h-full flex justify-center items-center">
                  <div class="text-center text-white text-sm font-monst group-hover:text-red-300 duration-500">FRIENDLY & HELPFUL SUPPORT TEAM</div>
               </div>
            </div>
         </div>
         <div class="w-full lg:w-[calc(50%_-_10px)] group">
            <div class="flex justify-between items-center md:flex-nowrap flex-wrap gap-0 md:gap-3 h-full md:h-[100px]">
               <div class="w-full md:w-[25%] overflow-hidden">
                  <div class="bg-taxi-3 bg-cover bg-center w-full h-[150px] md:h-[100px] group-hover:scale-110 duration-500"></div>
               </div>
               <div class="w-full md:w-[75%] bg-dark-200 h-[80px] md:h-full flex justify-center items-center">
                  <div class="text-center text-white text-sm font-monst group-hover:text-red-300 duration-500">ZERO CANCELLATION FEE</div>
               </div>
            </div>
         </div>
         <div class="w-full lg:w-[calc(50%_-_10px)] group">
            <div class="flex justify-between items-center md:flex-nowrap flex-wrap gap-0 md:gap-3 h-full md:h-[100px]">
               <div class="w-full md:w-[25%] overflow-hidden">
                  <div class="bg-taxi-4 bg-cover bg-center w-full h-[150px] md:h-[100px] group-hover:scale-110 duration-500"></div>
               </div>
               <div class="w-full md:w-[75%] bg-dark-200 h-[80px] md:h-full flex justify-center items-center">
                  <div class="text-center text-white text-sm font-monst group-hover:text-red-300 duration-500">NO HIDDEN COSTS</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- service section end -->
<!-- car section start  -->
<section class="">
   <div class="container mx-auto py-12 md:py-24">
      <div class="swiper newSwiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-1 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">INNOVA</div>
                  <div class="text-base md:text-lg text-dark-100 font-medium  font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 20</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 19</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-2 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">EITOS</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 15</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 14</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-3 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">SEDAN</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 14</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 13</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-4 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">SUV</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 19</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 18</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-5 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">INNOVA CRYSTA</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 22</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 20</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-1 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">INNOVA</div>
                  <div class="text-base md:text-lg text-dark-100 font-medium  font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 20</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 19</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-2 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">EITOS</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 15</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 14</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-3 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">SEDAN</div>
                  <div class=" font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 14</span> Per Km</div>
                  <div class=" font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 13</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-4 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">SUV</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 19</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 18</span> Per Km</div>
               </div>
            </div>
            <div class="swiper-slide ">
               <div class="flex justify-center items-center w-full flex-col border px-5 py-5 shadow-lg group rounded">
                  <div class="bg-car-5 bg-contain bg-no-repeat bg-center w-full h-[150px] duration-500 group-hover:scale-110"></div>
                  <div class="text-2xl font-monst font-bold text-red-300 pb-5">INNOVA CRYSTA</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst "><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>One Way <span class="text-bold text-red-300">RS 22</span> Per Km</div>
                  <div class="text-base md:text-lg font-medium text-dark-100 font-monst pt-2"><i class="bi bi-car-front-fill text-red-300 pr-3 text-2xl"></i>Round Trip <span class="text-bold text-red-300">RS 20</span> Per Km</div>
               </div>
            </div>
         </div>
         <div class="flex justify-center items-center py-10 pagination "></div>
      </div>
   </div>
</section>
<!-- car section end  -->
<!-- outstation section start  -->
<section class="bg-blue-300">
   <div class="container mx-auto py-12 md:py-24">
      <div class="text-sm tracking-widest font-monst font-bold text-white ">ROUTES</div>
      <div class="text-monst font-bold text-xl md:text-2xl pt-3  text-white">POPULAR OUTSTATION ROUTES
      </div>
      <div class="w-16 h-[2px] mt-5 bg-red-300"></div>
      <div class="flex justify-between item-start gap-5 md:gap-10 w-full flex-wrap pt-5 md:pt-10">
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-hull  md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-1 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Chennai" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">Chennai</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5 text-justify ">
               Chennai is a popular tourist destination known for its ancient temples, arts, natural wonders, and food. It's often called the cultural capital of India
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Chennai" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500 tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-3 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Rameswaram" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">rameswaram</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               Rameswaram, in Tamil Nadu, is a quaint town that is connected to the Indian mainland by the 2-km-long Pamban bridge.
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Rameswaram" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500 tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-4 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Coimbatore" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">coimbatore</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               The third largest city of the state, one of the most industrialized cities in Tamil Nadu, known as the textile capital of South India or the Manchester of the South India
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Coimbatore" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500 tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-5 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Tiruchirappalli" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">Tiruchirappalli</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               It lies at the head of the Kaveri (Cauvery) River delta, about 30 miles (50 km) west of Thanjavur. The city also includes administratively the pilgrimage centre of Srirangam.
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Tiruchirappalli" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500 tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-6 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Madurai" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">madurai</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               Madurai is the third most populous, and probably the oldest, city in the state. The ancient history of the region is associated with the Pandya kings, and Madurai was the site of the Pandya capital
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Madurai" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500 tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-7 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Thoothukudi" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">Thoothukudi</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               Thoothukudi, also known as Tuticorin, is a port city in the southern region of Tamil Nadu. It's known as the "Pearl City" because of the pearl fishing that used to take place in the area
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Thoothukudi" class="w-40 inline-block p-2 text-sm font-semibold  hover:bg-dark-100 duration-500 tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-8 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Pondicherry" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">pondicherry</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               Pondicherry (or Puducherry) is a Union Territory town in India. It was a French colonial settlement until 1954. The city is known for its French Quarter, which features tree-lined streets
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Pondicherry" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500 tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-9 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Bangalore" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">bangalore</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               It has a population of over ten million, making it a megacity and the Third populous City and 5th most populous urban agglomeration in India
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Bangalore" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500  tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
         <div class="w-full md:w-[calc(50%_-_28px)] lg:w-[calc(33.33%_-_28px)] bg-white rounded-xl overflow-hidden group h-full md:h-[470px]">
            <div class="w-full overflow-hidden relative  ">
               <div class="bg-travel-10 bg-cover bg-center w-full h-[200px] md:h-[250px] rounded-t-xl group-hover:scale-105 duration-500 ">	</div>
               <div class="flex opacity-0 group-hover:opacity-100 px-5 py-5 justify-start items-end  absolute w-0 transition-all ease-in-out duration-500 h-full  group-hover:w-full bg-bg-gray top-0">
                  <a href="javascript:;" title="Kerala" class="relative text-white font-monst font-medium text-2xl   uppercase  after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-300 after:origin-right after:transform after:scale-x-0 after:transition-transform after:duration-500  after:cubic-bezier(.455,.03,.515,.955) hover:after:origin-left hover:after:scale-x-100">Kerala</a>
               </div>
            </div>
            <div class="te text-base pt-5 px-5  text-justify">
               Kerala is one of the small states of India in terms of area. it consists of only 1.3 per cent of the total area of India. The state is located in the southwest corner of India.
            </div>
            <div class="px-5 py-5">
               <a href="javascript:;" title="Kerala" class="w-40 inline-block p-2 text-sm font-semibold hover:bg-dark-100 duration-500  tracking-widest font-monst text-center rounded bg-red-300 text-white">
               BOOK NOW
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- outstation section end  -->
<!-- testimonial section start  -->
<section>
   <div class="container mx-auto py-12 md:py-24">
      <div class="text-xl md:text-3xl font-monst text-dark-100 font-semibold">
         TESTIMONIALS
      </div>
      <div class="w-16 h-[2px] mt-5 bg-red-300"></div>
      <div class="swiper mySwiper pt-10">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="flex justify-center items-start flex-col gap-1 w-full border-y-[1px] duration-500 hover:border-red-300 border-gray-300 px-5 py-5">
                  <div class="text-4xl text-gray-300">
                     <i class="bi bi-quote"></i>
                     <div class="flex text-sm font-monst">
                        <div class="text-sm font-monst text-black tracking-widest flex font-bold pt-3">Aruna</div>
                        <span class="pt-3 text-gray-300"> - Ramanathapuram</span>
                     </div>
                  </div>
                  <p class="text-dark-100 font-monst text-base leading-loose pt-3">
                     Metro Highway Cabs is my preferred choice for getting around town. Quick booking, prompt pickups, and friendly drivers make every ride a breeze. Highly recommended for hassle-free transportation.
                     <!-- Add stars on the right side -->
                     <span class="flex justify-end">
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                     </span>
                  </p>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="flex justify-center items-start flex-col gap-1 w-full border-y-[1px] duration-500 hover:border-red-300 border-gray-300 px-5 py-5">
                  <div class="text-4xl text-gray-300">
                     <i class="bi bi-quote"></i>
                     <div class="flex text-sm font-monst">
                        <div class="text-sm font-monst text-black tracking-widest flex font-bold pt-3">Ajith</div>
                        <span class="pt-3">- Madurai</span>
                     </div>
                  </div>
                  <p class="text-dark-100 font-monst text-base leading-loose pt-3">
                     "With Metro Highway Cabs, I never worry about being late or unsafe rides. Their reliable service and well-maintained vehicles ensure a smooth journey every time. Trustworthy and dependable - Metro Highway Cabs has my recommendation."
                     <!-- Add stars on the right side -->
                     <span class="flex justify-end">
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                     </span>
                  </p>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="flex justify-center items-start flex-col gap-1 w-full border-y-[1px] duration-500 hover:border-red-300 border-gray-300 px-5 py-5">
                  <div class="text-4xl text-gray-300">
                     <i class="bi bi-quote"></i>
                     <div class="flex text-sm font-monst">
                        <div class="text-sm font-monst text-black tracking-widest flex font-bold pt-3">Manikandan</div>
                        <span class="pt-3">- Chennai</span>
                     </div>
                  </div>
                  <p class="text-dark-100 font-monst text-base leading-loose pt-3">
                     "Metro Highway Cabs sets the bar high for transportation services. From their courteous drivers to their responsive customer support, they consistently exceed expectations. Convenient, safe, and reliable - I wouldn't choose anyone else."
                     <!-- Add stars on the right side -->
                     <span class="flex justify-end">
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                     </span>
                  </p>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="flex justify-center items-start flex-col gap-1 w-full border-y-[1px] duration-500 hover:border-red-300 border-gray-300 px-5 py-5">
                  <div class="text-4xl text-gray-300">
                     <i class="bi bi-quote"></i>
                     <div class="flex text-sm font-monst">
                        <div class="text-sm font-monst text-black tracking-widest flex font-bold pt-3">Mahadev</div>
                        <span class="pt-3">- Coimbatore</span>
                     </div>
                  </div>
                  <p class="text-dark-100 font-monst text-base leading-loose pt-3">
                     Metro Highway Cabs is my preferred choice for getting around town. Quick booking, prompt pickups, and friendly drivers make every ride a breeze. Highly recommended for hassle-free transportation."
                     <!-- Add stars on the right side -->
                     <span class="flex justify-end">
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                     </span>
                  </p>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="flex justify-center items-start flex-col gap-1 w-full border-y-[1px] duration-500 hover:border-red-300 border-gray-300 px-5 py-5">
                  <div class="text-4xl text-gray-300">
                     <i class="bi bi-quote"></i>
                     <div class="flex text-sm font-monst">
                        <div class="text-sm font-monst text-black tracking-widest flex font-bold pt-3">Dharsha</div>
                        <span class="pt-3">- Hosur</span>
                     </div>
                  </div>
                  <p class="text-dark-100 font-monst text-base leading-loose pt-3">
                     "With Metro Highway Cabs, I never worry about being late or unsafe rides. Their reliable service and well-maintained vehicles ensure a smooth journey every time. Trustworthy and dependable - Metro Highway Cabs has my recommendation."
                     <!-- Add stars on the right side -->
                     <span class="flex justify-end">
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                     </span>
                  </p>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="flex justify-center items-start flex-col gap-1 w-full border-y-[1px] duration-500 hover:border-red-300 border-gray-300 px-5 py-5">
                  <div class="text-4xl text-gray-300">
                     <i class="bi bi-quote"></i>
                     <div class="flex text-sm font-monst">
                        <div class="text-sm font-monst text-black tracking-widest flex font-bold pt-3">Alagu</div>
                        <span class="pt-3">- Sayalgudi</span>
                     </div>
                  </div>
                  <p class="text-dark-100 font-monst text-base leading-loose pt-3">
                     "Metro Highway Cabs sets the bar high for transportation services. From their courteous drivers to their responsive customer support, they consistently exceed expectations. Convenient, safe, and reliable - I wouldn't choose anyone else."
                     <!-- Add stars on the right side -->
                     <span class="flex justify-end">
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                        <svg class="h-4 w-4 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M10 0l2.92 6.364L20 7.273l-5.333 5.09L15.333 20 10 16.455 4.667 20 6.667 12.364 0 7.273l6.08-.909z"/>
                        </svg>
                     </span>
                  </p>
               </div>
            </div>
         </div>
         <div class="flex justify-center items-center py-10 pagination2 "></div>
      </div>
   </div>
</section>
<!-- testimonial section end -->
<section>
</section>
<!--<script src="assets/js/travels.js"></script>-->
<?php include "includes/footer.php" ?>