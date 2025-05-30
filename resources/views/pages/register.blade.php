@extends('layouts.app')
@section('content')

<!-- Register Section -->
<section class="max-w-[640px] mx-auto px-4 mt-20 sm:mt-28">
  <div class="text-center mb-8">
    <h2 class="text-white font-bold text-[24px] sm:text-[28px] md:text-[32px] tracking-widest uppercase">
      REGISTER
    </h2>
    <p class="text-[10px] sm:text-[12px] text-white/70 mb-1">
      Please fill in the details to create your account
    </p>
  </div>

  <div class="bg-[#1a1a1a] p-6 rounded-md shadow-lg">
    <form action="#" method="POST">
      @csrf

      <!-- Name Field -->
      <div class="mb-4">
        <label for="name" class="text-white text-[14px]">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your full name" class="w-full p-2 mt-1 rounded-md bg-[#2a2a2a] text-white border border-[#ff4a00] focus:outline-none focus:ring-2 focus:ring-[#ff4a00]" required />
      </div>

      <!-- Email Field -->
      <div class="mb-4">
        <label for="email" class="text-white text-[14px]">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full p-2 mt-1 rounded-md bg-[#2a2a2a] text-white border border-[#ff4a00] focus:outline-none focus:ring-2 focus:ring-[#ff4a00]" required />
      </div>

      <!-- Password Field -->
      <div class="mb-4">
        <label for="password" class="text-white text-[14px]">Password</label>
        <input type="password" name="password" id="password" placeholder="Create a password" class="w-full p-2 mt-1 rounded-md bg-[#2a2a2a] text-white border border-[#ff4a00] focus:outline-none focus:ring-2 focus:ring-[#ff4a00]" required />
      </div>

      <!-- Confirm Password Field -->
      <div class="mb-4">
        <label for="password_confirmation" class="text-white text-[14px]">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" class="w-full p-2 mt-1 rounded-md bg-[#2a2a2a] text-white border border-[#ff4a00] focus:outline-none focus:ring-2 focus:ring-[#ff4a00]" required />
      </div>

      <!-- Register Button -->
      <button type="submit" class="w-full bg-[#ff4a00] text-white font-semibold py-2 rounded-md hover:bg-[#e03e00] transition duration-200">
        Register
      </button>

      <!-- Login Link -->
      <div class="mt-4 text-center">
        <p class="text-white text-[12px]">Already have an account? <a href="{{ route('login') }}" class="text-[#ff4a00] hover:underline">Login here</a></p>
      </div>
    </form>
  </div>
</section>

@stop
