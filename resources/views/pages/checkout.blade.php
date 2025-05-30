@extends('layouts.app')
@section('content')

<!-- Checkout Section -->
<section class="max-w-[800px] mx-auto px-4 mt-20 sm:mt-28">
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
      <img alt="Product Image" class="w-full h-[200px] object-cover rounded-md" src="https://static2.jetpens.com/images/a/000/224/224615.jpg?auto=format&blend-align=middle%2Ccenter&blend-alpha=10&blend-mode=difference&blend-size=inherit&blend64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMi5wbmc&chromasub=444&fm=jpg&mark-align=top%2Cright&mark-alpha=30&mark-scale=16&mark64=aHR0cHM6Ly9zdGF0aWMxLmpldHBlbnMuY29tL2ltYWdlcy9hc3NldHMvd2F0ZXJtYXJrMS5wbmc&q=90&usm=20&w=900&s=4db06beb160c2609d530bb87d0d63ed7" />
      <h3 class="text-white font-semibold text-[18px] mt-4">Uni Kuru Toga Mechanical Pencil</h3>
      <p class="text-white/70 text-[14px] mt-2">The Uni Kuru Toga ensures you always write with a sharp point. Its lead rotation mechanism turns the lead each time the pencil is lifted from the paper, helping it wear down evenly and preventing a slanted edge that can create thick and smudgy lines.</p>
    </div>

    <!-- Right Side: Payment Information -->
    <div class="flex-1 pl-0 sm:pl-6">
      <h3 class="text-white font-semibold text-[18px] mb-4">Payment Information</h3>
      <div class="mb-4">
        <p class="text-grey text-[14px]">Product Name 1x</label>
      </div>

      <div class="mb-4">
        <label class="text-white text-[14px]">Total Price</label>
        <p class="text-white font-bold text-[20px] mt-1">$34.99</p>
      </div>

      <form method="POST" action="{{ url('/api/payments') }}">
          @csrf
          <input type="hidden" name="payer_email" value="fahdira@gmail.com">
          <input type="hidden" name="description" value="test">
          <input type="hidden" name="amount" value="20000">
          <button type="submit" class="w-full bg-[#ff4a00] text-white font-semibold py-2 rounded-md hover:bg-[#e03e00] transition duration-200">
              Complete Purchase
          </button>
      </form>
    </div>
  </div>
</section>
<script>
  document.getElementById('complete-purchase').addEventListener('click', function () {
      const data = {
          payer_email: "kaisa@gmail.com",
          description: "test kaisa",
          amount: 20000
      };

      fetch('/api/payments', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Optional if using Sanctum or CSRF is required
          },
          body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(result => {
          console.log('Payment created:', result);
      })
      .catch(error => {
          console.error('Error:', error);
          alert("Something went wrong!");
      });
  });
</script>
@stop
