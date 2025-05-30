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
    <img alt="Product Image 1" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md border-solid" height="200" loading="lazy" src="https://static2.jetpens.com/images/a/000/224/224615.jpg?auto=format&blend-align=middle%2Ccenter&blend-alpha=10&blend-mode=difference&blend-size=inherit&blend64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMi5wbmc&chromasub=444&fm=jpg&mark-align=top%2Cright&mark-alpha=30&mark-scale=16&mark64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMS5wbmc&q=90&usm=20&w=900&s=4db06beb160c2609d530bb87d0d63ed7" width="300"/>
    <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">Uni Kuru Toga Mechanical Pencil</h3>

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
      <img alt="Product Image 2" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md" height="200" loading="lazy" src="https://static2.jetpens.com/images/a/000/224/224623.jpg?auto=format&blend-align=middle%2Ccenter&blend-alpha=10&blend-mode=difference&blend-size=inherit&blend64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMi5wbmc&chromasub=444&fm=jpg&mark-align=top%2Cright&mark-alpha=30&mark-scale=16&mark64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMS5wbmc&q=90&usm=20&w=900&s=0a79572e75c5f09be6d116280bc3f218" width="300"/>
      <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">Sun-Star Tasuno Scissors</h3>
        <a href="{{ route('checkout') }}"
            class="inline-block mt-2 bg-[#ff4a00] text-white text-[10px] sm:text-[12px] font-semibold uppercase px-4 py-2 rounded-full transition-all duration-300 hover:bg-[#ff3600] hover:scale-105 shadow-md">
            Buy Now
        </a>
        <p class="text-white/70 text-[8px] sm:text-[10px] mt-1">and get unforgettable</p>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="group cursor-pointer">
      <img alt="Product Image 3" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md" height="200" loading="lazy" src="https://static2.jetpens.com/images/a/000/224/224611.jpg?auto=format&blend-align=middle%2Ccenter&blend-alpha=10&blend-mode=difference&blend-size=inherit&blend64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMi5wbmc&chromasub=444&fm=jpg&mark-align=top%2Cright&mark-alpha=30&mark-scale=16&mark64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMS5wbmc&q=90&usm=20&w=900&s=d9e14d3054308382d4b66af94efd7b7a" width="300"/>
      <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">Midori + Stand Notebook</h3>
        <a href="{{ route('checkout') }}"
        class="inline-block mt-2 bg-[#ff4a00] text-white text-[10px] sm:text-[12px] font-semibold uppercase px-4 py-2 rounded-full transition-all duration-300 hover:bg-[#ff3600] hover:scale-105 shadow-md">
        Buy Now
        </a>
        <p class="text-white/70 text-[8px] sm:text-[10px] mt-1">and get unforgettable</p>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="group cursor-pointer">
      <img alt="Product Image 4" class="w-full h-[140px] sm:h-[160px] object-cover rounded-md" height="200" loading="lazy" src="https://static2.jetpens.com/images/a/000/224/224618.jpg?auto=format&blend-align=middle%2Ccenter&blend-alpha=10&blend-mode=difference&blend-size=inherit&blend64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMi5wbmc&chromasub=444&fm=jpg&mark-align=top%2Cright&mark-alpha=30&mark-scale=16&mark64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMS5wbmc&q=90&usm=20&w=900&s=cb135b00660c68d09621610e0ce9d5fd" width="300"/>
      <div class="mt-2 text-center">
        <h3 class="text-white font-bold text-[12px] sm:text-[14px] tracking-widest uppercase">Pilot Otobaco Pencil Case</h3>
        <a href="{{ route('checkout') }}"
        class="inline-block mt-2 bg-[#ff4a00] text-white text-[10px] sm:text-[12px] font-semibold uppercase px-4 py-2 rounded-full transition-all duration-300 hover:bg-[#ff3600] hover:scale-105 shadow-md">
        Buy Now
        </a>
        <p class="text-white/70 text-[8px] sm:text-[10px] mt-1">and get unforgettable</p>
      </div>
    </div>

  </div>
</section>

<!-- Travel and inspire your life section -->
<section class="relative">
  <img alt="Mountain range silhouette under a purple and pink starry night sky" class="w-full h-[320px] sm:h-[400px] md:h-[480px] lg:h-[600px] object-cover rounded-md" height="600" loading="lazy" src="https://images.unsplash.com/photo-1663970206579-c157cba7edda?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHx8" width="1200"/>
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
        <img alt="Road through rocky mountains with a play button overlay" class="w-full h-[140px] object-cover" height="140" loading="lazy" src="https://static2.jetpens.com/images/a/000/224/224634.jpg?auto=format&blend-align=middle%2Ccenter&blend-alpha=10&blend-mode=difference&blend-size=inherit&blend64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMi5wbmc&chromasub=444&fm=jpg&mark-align=top%2Cright&mark-alpha=30&mark-scale=16&mark64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMS5wbmc&q=90&usm=20&w=900&s=e29be9727e4529639a05ad9a68fc0dbd" width="220"/>
        <div class="absolute inset-0 flex items-center justify-center text-white text-[32px] opacity-80 group-hover:opacity-100 transition-opacity">
          <i class="fas fa-play-circle"></i>
        </div>
      </div>
      <div class="flex-shrink-0 w-[180px] sm:w-[220px] rounded-md overflow-hidden cursor-pointer">
        <img alt="Snowy mountains and lake landscape with clear sky" class="w-full h-[140px] object-cover" height="140" loading="lazy" src="https://static2.jetpens.com/images/a/000/224/224613.jpg?auto=format&blend-align=middle%2Ccenter&blend-alpha=10&blend-mode=difference&blend-size=inherit&blend64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMi5wbmc&chromasub=444&fm=jpg&mark-align=top%2Cright&mark-alpha=30&mark-scale=16&mark64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMS5wbmc&q=90&usm=20&w=900&s=4c6b897b1267197dbec6538c4a849795" width="220"/>
      </div>
    </div>
  </div>
</section>

@stop
