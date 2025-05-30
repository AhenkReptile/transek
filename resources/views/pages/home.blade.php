@extends('layouts.app')
@section('content')

<!-- Hero Section -->
<section class="relative">
  <img alt="Traditional red Torii gate standing in a calm lake with cloudy sky in the background" class="w-full h-[320px] sm:h-[400px] md:h-[480px] lg:h-[600px] object-cover rounded-md " height="600" loading="eager" src="https://m.media-amazon.com/images/G/40/Electronics/RBS/office-supplies.jpeg" width="1200"/>
  <div class="absolute top-0 left-0 w-full h-full bg-linear-to-t from-[#121c26cc] to-transparent rounded-md" style="background: linear-gradient(to top, rgba(18,28,38,1), transparent);"></div>
  <div class="absolute top-0 left-0 w-full h-full flex flex-col sm:flex-row items-start sm:items-center justify-between px-6 sm:px-10 md:px-16 lg:px-20 pt-10 sm:pt-14 md:pt-20">

    <!-- Left text VISIT TOKYO -->
    <div class="max-w-[180px] sm:max-w-[220px] md:max-w-[280px] lg:max-w-[320px]">
      <h1 class="text-white font-extrabold leading-[1.1] text-[48px] sm:text-[56px] md:text-[64px] lg:text-[72px]">
        TUNGGAL<br/>SEMESTA
      </h1>
      <div class="mt-6 flex items-center space-x-2 text-[#ff4a00] text-[18px] sm:text-[20px]">
        <i class="fas fa-exclamation-triangle"></i>
        <span class="text-[10px] sm:text-[12px] md:text-[14px] font-normal tracking-widest uppercase">
          Penyedia kebutuhan kantor anda
        </span>
      </div>
      <a class="inline-block mt-3 text-[10px] sm:text-[12px] md:text-[14px] font-semibold tracking-widest uppercase border-b border-[#ff4a00] pb-0.5 hover:text-[#ff4a00]" href="#">
        Learn more →
      </a>
    </div>

    <!-- Center text with airplane icon -->
    <div class="hidden sm:flex flex-col items-center max-w-[180px] md:max-w-[220px] lg:max-w-[280px] text-center">
      <div class="text-[#ffffff99] text-[10px] md:text-[12px] font-normal tracking-widest uppercase mb-6">
        A few lines of text and something else interesting for readers
      </div>
      <i class="fas fa-plane text-[#ffffff99] text-[28px] mb-6"></i>
      <a class="text-[10px] md:text-[12px] font-semibold tracking-widest uppercase border-b border-[#ff4a00] pb-0.5 hover:text-[#ff4a00]" href="#">
        Learn more →
      </a>
    </div>

    <!-- Right text with airplane icon -->
    <div class="hidden sm:flex flex-col items-center max-w-[180px] md:max-w-[220px] lg:max-w-[280px] text-center">
      <div class="text-[#ffffff99] text-[10px] md:text-[12px] font-normal tracking-widest uppercase mb-6">
        A few lines of text and something else interesting for readers
      </div>
      <i class="fas fa-plane text-[#ffffff99] text-[28px] mb-6"></i>
      <a class="text-[10px] md:text-[12px] font-semibold tracking-widest uppercase border-b border-[#ff4a00] pb-0.5 hover:text-[#ff4a00]" href="#">
        Learn more →
      </a>
    </div>
  </div>

  <!-- Vertical date navigation on right side -->
  <div class="absolute top-1/2 right-6 transform -translate-y-1/2 flex flex-col items-center text-white/50 text-[10px] sm:text-[12px] font-semibold tracking-widest">
    <span class="mb-1 cursor-pointer hover:text-white">01</span>
    <span class="mb-1 cursor-pointer hover:text-white">02</span>
    <span class="mb-1 cursor-pointer text-white">03</span>
    <span class="mb-1 cursor-pointer hover:text-white">04</span>
    <span class="cursor-pointer hover:text-white">05</span>
    <div class="w-[60px] border-t border-white/30 mt-2"></div>
  </div>
</section>

<!-- Product Section -->
<section class="max-w-[1200px] mx-auto px-4 mt-20 sm:mt-28">
  <div class="text-center mb-8">
    <p class="text-[10px] sm:text-[12px] text-white/70 mb-1">
      and get unforgettable products
    </p>
    <h2 class="text-white font-bold text-[16px] sm:text-[18px] md:text-[20px] tracking-widest uppercase">
      PRODUCTS
    </h2>
  </div>
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-[900px] mx-auto border-b border-white/20 pb-6">

    <!-- Product 1 -->
    <div class="group cursor-pointer">
    <img alt="Product Image 1" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md border-solid" height="200" loading="lazy" src="https://storage.googleapis.com/a1aa/image/cb2c15e6-4f12-44f0-a9cb-9891fe1d75bd.jpg" width="300"/>
    <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">PRODUCT №1</h3>

        <!-- Updated Buy Button -->
        <a href="{{ route('checkout') }}"
        class="inline-block mt-2 bg-[#ff4a00] text-white text-[10px] sm:text-[12px] font-semibold uppercase px-4 py-2 rounded-full transition-all duration-300 hover:bg-[#ff3600] hover:scale-105 shadow-md">
        Buy Now
        </a>

        <p class="text-white/70 text-[8px] sm:text-[10px] mt-1">and get unforgettable</p>
    </div>
    </div>


    <!-- Product 2 -->
    <div class="group cursor-pointer">
      <img alt="Product Image 2" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md" height="200" loading="lazy" src="https://storage.googleapis.com/a1aa/image/721d4280-3ed0-456b-84a2-0b8bca0d0429.jpg" width="300"/>
      <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">PRODUCT №2</h3>
        <a class="text-gray-600 hover:text-gray-800" href="{{ route('checkout') }}">Buy</a>
        <p class="text-white/70 text-[8px] sm:text-[10px] mt-1">and get unforgettable</p>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="group cursor-pointer">
      <img alt="Product Image 3" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md" height="200" loading="lazy" src="https://storage.googleapis.com/a1aa/image/b7f07e75-13e7-40aa-dbd4-d3ffbd0d2a57.jpg" width="300"/>
      <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">PRODUCT №3</h3>
        <a class="text-gray-600 hover:text-gray-800" href="{{ route('checkout') }}">Buy</a>
        <p class="text-white/70 text-[8px] sm:text-[10px] mt-1">and get unforgettable</p>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="group cursor-pointer">
      <img alt="Product Image 4" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md" height="200" loading="lazy" src="https://storage.googleapis.com/a1aa/image/4b748c12-f25c-4086-e6bc-66cdb04ed2ac.jpg" width="300"/>
      <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">PRODUCT №4</h3>
        <a class="text-gray-600 hover:text-gray-800" href="{{ route('checkout') }}">Buy</a>
        <p class="text-white/70 text-[8px] sm:text-[10px] mt-1">and get unforgettable</p>
      </div>
    </div>

  </div>
</section>

<!-- Travel and inspire your life section -->
<section class="relative">
  <img alt="Mountain range silhouette under a purple and pink starry night sky" class="w-full h-[320px] sm:h-[400px] md:h-[480px] lg:h-[600px] object-cover rounded-md" height="600" loading="lazy" src="https://storage.googleapis.com/a1aa/image/6f41cc98-a921-41cb-f34d-226c6fcd8df6.jpg" width="1200"/>
  <div class="absolute top-0 left-0 w-full h-full bg-linear-to-t from-[#121c26cc] to-transparent rounded-md" style="background: linear-gradient(to bottom, rgba(18,28,38,1), transparent);"></div>
  <div class="absolute top-0 left-0 w-full h-full flex flex-col sm:flex-row items-start sm:items-center justify-between px-6 sm:px-10 md:px-16 lg:px-20 pt-10 sm:pt-14 md:pt-20">

    <div class="max-w-[280px] sm:max-w-[320px] lg:max-w-[360px]">
      <h2 class="text-white font-extrabold leading-[1.1] text-[32px] sm:text-[36px] md:text-[40px] lg:text-[44px]">
        TRAVEL AND<br/>INSPIRE YOUR<br/>LIFE
      </h2>
      <button aria-label="Watch video" class="mt-6 flex items-center space-x-2 text-white/80 hover:text-white text-[14px] sm:text-[16px] font-semibold tracking-widest">
        <i class="fas fa-play-circle text-[24px] sm:text-[28px]"></i>
        <span>Watch video</span>
      </button>
      <p class="mt-4 text-[10px] sm:text-[12px] text-white/70 max-w-[280px]">
        Here will be 2-3 sentences for the video, hosting, and provided for launch, which is very interesting.
      </p>
    </div>

    <div class="mt-8 sm:mt-0 flex space-x-4 max-w-[600px] overflow-x-auto scrollbar-hide">
      <div class="flex-shrink-0 w-[180px] sm:w-[220px] rounded-md overflow-hidden cursor-pointer relative group">
        <img alt="Road through rocky mountains with a play button overlay" class="w-full h-[140px] object-cover" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/03d81648-805c-44a8-0b8b-7f9e8c6db080.jpg" width="220"/>
        <div class="absolute inset-0 flex items-center justify-center text-white text-[32px] opacity-80 group-hover:opacity-100 transition-opacity">
          <i class="fas fa-play-circle"></i>
        </div>
      </div>
      <div class="flex-shrink-0 w-[180px] sm:w-[220px] rounded-md overflow-hidden cursor-pointer">
        <img alt="Snowy mountains and lake landscape with clear sky" class="w-full h-[140px] object-cover" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/a8377fc7-026e-4a42-4036-509267ce4e8f.jpg" width="220"/>
      </div>
    </div>
  </div>
</section>

@stop
