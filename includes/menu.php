<header class="w-full p-5 z-[10000]  bg-white">
   <div class="container mx-auto ">
      <nav class="flex justify-between items-center w-full">
         <div class="flex justify-center items-center gap-2">
            <div class="bg-logo bg-contain bg-center bg-no-repeat w-[80px] md:w-[100px] h-10 md:h-20" ></div>
            <div class="text-lg font-bold  text-dark-100 font-monst">
               Metro highway Cabs
            </div>
         </div>
         <div class="gap-10 lg:gap-5 xl:gap-10  lg:flex lg:justify-center lg:items-center text-center  hidden transition-all ease-in-out duration-500">
            <a href="index.php" title="home" class="font-monst text-lg font-normal text-black <?php if ($page == 'home') {echo 'text-red-300';} ?>">Home</a>
            <a href="tariff.php" title="tariff" class="font-monst text-lg font-normal text-black <?php if ($page == 'tariff') {echo 'text-red-300';} ?>">Tariff</a>
            <a href="contact.php" title="contact" class="font-monst text-lg font-normal text-black <?php if ($page == 'contact') {echo 'text-red-300';} ?>">Contact Us</a>
            <a href="javascript:;" title="estimate" class="uppercase font- text-base text-black px-5 py-4 text-white rounded bg-red-300">get a free estimate</a>
         </div>
         <div class="lg:hidden flex items-center z-[1100] ">
            <button aria-label="Menu" class="outline-none mobile-menu-button">
            <i class="bi bi-list text-btncolor text-4xl font-bold" id="menu-icon"></i>
            </button>
         </div>
      </nav>
      <div class="lg:hidden  mobile-menu   absolute top-0 left-0 w-full bg-service-girl bg-cover bg-center  z-[1000] -translate-x-full transition-all duration-700 ease-in-out h-screen">
         <div class="backdrop-blur-sm bg-blur-bg w-full h-full flex justify-center items-center flex-col gap-3">
            <a href="index.php" title="home" class="font-monst text-lg font-normal text-white <?php if ($page == 'home') {echo 'text-red-300';} ?>">Home</a>
            <a href="tariff.php" title="tariff" class="font-monst text-lg font-normal text-white <?php if ($page == 'tariff') {echo 'text-red-300';} ?>">Tariff</a>
            <a href="contact.php" title="contact" class="font-monst text-lg font-normal text-white <?php if ($page == 'contact') {echo 'text-red-300';} ?>">Contact Us</a>
            <a href="javascript:;" title="estimate" class="uppercase font- text-base text-black px-5 py-4 text-white rounded bg-red-300">get a free estimate</a>
         </div>
      </div>
   </div>
</header>