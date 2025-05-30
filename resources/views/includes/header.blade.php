<header class="relative z-20">
  <nav class="mx-auto flex items-center justify-between px-4 py-4 text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-normal tracking-widest">

    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <div class="w-3 h-3 rounded-full bg-[#ff4a00]"></div>
      <span class="font-bold text-white text-[14px] sm:text-[16px] md:text-[18px]">
        CV. Tunggal Semesta
      </span>
    </div>

    <!-- Menu -->
    <ul class="hidden sm:flex space-x-6 text-white/70">
      <li><a class="hover:text-white" href="{{ route('home') }}">Home</a></li>
      <li><a class="hover:text-white" href="#">About Us</a></li>
      <li><a class="hover:text-white" href="#">Tours</a></li>
      <li><a class="hover:text-white" href="#">Gallery</a></li>
      <li><a class="hover:text-white" href="#">Review</a></li>
      <li><a class="hover:text-white" href="#">Contact</a></li>
    </ul>

    <!-- Search & Login -->
    <div class="flex items-center space-x-4">
      <button aria-label="Search" class="text-white/70 hover:text-white text-[14px] sm:text-[16px]">
        <i class="fas fa-search"></i>
      </button>
      <a href="{{ route('login') }}" class="text-white/70 hover:text-white text-[14px] sm:text-[16px] font-semibold">
        Login
      </a>
      <a href="{{ route('register') }}" class="bg-[#ff4a00] text-white font-semibold py-1 px-4 rounded-md hover:bg-[#e03e00] transition duration-200 text-[14px] sm:text-[16px]">
        Register
      </a>
    </div>

  </nav>
</header>
