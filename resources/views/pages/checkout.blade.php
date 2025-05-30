@extends('layouts.app')
@section('content')

<!-- Checkout Section -->
<section class="max-w-[1200px] mx-auto px-4 mt-20 sm:mt-28">
  <div class="text-center mb-8">
    <h2 class="text-white font-bold text-[24px] sm:text-[28px] md:text-[32px] tracking-widest uppercase">
      CHECKOUT
    </h2>
    <p class="text-[10px] sm:text-[12px] text-white/70 mb-1">
      Please review your order and complete your purchase
    </p>
  </div>

  <div class="flex flex-col sm:flex-row bg-[#1a1a1a] p-6 rounded-md shadow-lg">
    <!-- Left Side: Product Image and Description -->
    <div class="flex-1 mb-6 sm:mb-0">
      <img alt="Product Image" class="w-full h-[200px] object-cover rounded-md" src="https://storage.googleapis.com/a1aa/image/cb2c15e6-4f12-44f0-a9cb-9891fe1d75bd.jpg" />
      <h3 class="text-white font-semibold text-[18px] mt-4">Product Name</h3>
      <p class="text-white/70 text-[14px] mt-2">This is a brief description of the product you have chosen. It highlights the key features and benefits.</p>
    </div>

    <!-- Right Side: Payment Information -->
    <div class="flex-1 pl-0 sm:pl-6">
      <h3 class="text-white font-semibold text-[18px] mb-4">Payment Information</h3>
      <div class="mb-4">
        <label class="text-white text-[14px]">Payment Method</label>
        <select name="payment_method" class="w-full p-2 mt-1 rounded-md bg-[#2a2a2a] text-white border border-[#ff4a00] focus:outline-none focus:ring-2 focus:ring-[#ff4a00]">
          <option value="credit_card">Credit Card</option>
          <option value="paypal">PayPal</option>
          <option value="bank_transfer">Bank Transfer</option>
        </select>
      </div>

      <div class="mb-4">
        <label class="text-white text-[14px]">Total Price</label>
        <p class="text-white font-bold text-[20px] mt-1">$99.99</p>
      </div>

      <button type="button" class="w-full bg-[#ff4a00] text-white font-semibold py-2 rounded-md hover:bg-[#e03e00] transition duration-200">
        Complete Purchase
      </button>
    </div>
  </div>
</section>

@stop
