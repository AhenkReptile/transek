@extends('layouts.app')
@section('content')

<!-- Login Section -->
<section class="max-w-[640px] mx-auto px-4 mt-20 sm:mt-28">
  <div class="text-center mb-8">
    <h2 class="text-white font-bold text-[24px] sm:text-[28px] md:text-[32px] tracking-widest uppercase">
      LOGIN
    </h2>
    <p class="text-[10px] sm:text-[12px] text-white/70 mb-1">
      Please enter your credentials to access your account
    </p>
  </div>

  <div class="bg-[#1a1a1a] p-6 rounded-md shadow-lg">
    <form action="#" method="POST">
      @csrf

      <!-- Email Field -->
      <div class="mb-4">
        <label for="email" class="text-white text-[14px]">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full p-2 mt-1 rounded-md bg-[#2a2a2a] text-white border border-[#ff4a00] focus:outline-none focus:ring-2 focus:ring-[#ff4a00]" required />
      </div>

      <!-- Password Field -->
      <div class="mb-4">
        <label for="password" class="text-white text-[14px]">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" class="w-full p-2 mt-1 rounded-md bg-[#2a2a2a] text-white border border-[#ff4a00] focus:outline-none focus:ring-2 focus:ring-[#ff4a00]" required />
      </div>

      <!-- Remember Me Checkbox -->
      <div class="flex items-center mb-4">
        <input type="checkbox" name="remember" id="remember" class="text-[#ff4a00] focus:ring-[#ff4a00] rounded" />
        <label for="remember" class="text-white text-[14px] ml-2">Remember Me</label>
      </div>

      <!-- Login Button -->
      <button type="submit" class="w-full bg-[#ff4a00] text-white font-semibold py-2 rounded-md hover:bg-[#e03e00] transition duration-200">
        Login
      </button>

      <!-- Forgot Password Link -->
      <div class="mt-4 text-center">
        <a href="#" class="text-[#ff4a00] text-[12px] hover:underline">Forgot your password?</a>
      </div>
    </form>
  </div>
</section>

@stop
