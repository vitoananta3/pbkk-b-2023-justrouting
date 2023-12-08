<nav class="bg-[#434C5E] fixed w-full z-20 top-0 start-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 ">
    <a href="<?= base_url() ?>" class="flex items-center space-x-3 rtl:space-x-reverse ">
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#E5E9F0]" id="nav-logo">JustRouting</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse bg-or">
      
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-[#434C5E] dark:border-gray-700">
        <li>
          <a href="<?= base_url() ?>" class="block py-2 px-3 text-[#E5E9F0] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#81A1C1] md:p-0 dark:text-white md:dark:hover:text-[#81A1C1] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php echo $page === 'home' ? 'active-nav-item' : ''; ?>">Home</a>
        </li>
        <li>
          <a href="<?= base_url() ?>about" class="block py-2 px-3 text-[#E5E9F0] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#81A1C1] md:p-0 dark:text-white md:dark:hover:text-[#81A1C1] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php echo $page === 'about' ? 'active-nav-item' : ''; ?>">About</a>
        </li>
        <li>
          <a href="<?= base_url() ?>services" class="block py-2 px-3 text-[#E5E9F0] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#81A1C1] md:p-0 dark:text-white md:dark:hover:text-[#81A1C1] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php echo $page === 'services' ? 'active-nav-item' : ''; ?>">Services</a>
        </li>
        <li>
          <a href="<?= base_url() ?>pricing" class="block py-2 px-3 text-[#E5E9F0] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#81A1C1] md:p-0 dark:text-white md:dark:hover:text-[#81A1C1] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php echo $page === 'pricing' ? 'active-nav-item' : ''; ?>">Pricing</a>
        </li>
        <li>
          <a href="<?= base_url() ?>contact" class="block py-2 px-3 text-[#E5E9F0] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#81A1C1] md:p-0 dark:text-white md:dark:hover:text-[#81A1C1] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php echo $page === 'contact' ? 'active-nav-item' : ''; ?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>