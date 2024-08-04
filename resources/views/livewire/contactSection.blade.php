<!-- Contact Us -->
<div id='contact' class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="max-w-xl mx-auto">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
        Contact us
      </h1>
     @if ($message)
         
      <p class="mt-1 text-green-700 bg-white dark:text-green-900">
        Your Message has been Sent Successfully.
      </p>
     @endif
    
      <p class="mt-1 text-gray-600 dark:text-neutral-400">
        We'd love to talk about how we can help you.
      </p>
      

    </div>
  </div>

  <div class="mt-12 max-w-lg mx-auto">
    <!-- Card -->
    <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-neutral-700">
      <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-200">
        Fill in the form
      </h2>

      <form wire:submit.prevent='save'>
        <div class="grid gap-4 lg:gap-6">
          <!-- Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
            <div>
              <label for="hs-firstname-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">First Name</label>
              <input wire:model='fname' type="text" name="hs-firstname-contacts-1" id="hs-firstname-contacts-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              @error('fname') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>

            <div>
              <label for="hs-lastname-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Last Name</label>
              <input wire:model='lname' type="text" name="hs-lastname-contacts-1" id="hs-lastname-contacts-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              @error('lname') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
          </div>
          <!-- End Grid -->

          <!-- Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
            <div>
              <label for="hs-email-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Email</label>
              <input wire:model='email' type="email" name="hs-email-contacts-1" id="hs-email-contacts-1" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror

            </div>

            <div>
              <label for="hs-phone-number-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Phone Number</label>
              <input wire:model='phone' type="text" name="hs-phone-number-1" id="hs-phone-number-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              @error('phone') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
          </div>
          <!-- End Grid -->

          <div>
            <label for="hs-about-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Details</label>
            @error('details') <span class="error text-red-600">{{ $message }}</span> @enderror
            <textarea id="hs-about-contacts-1" wire:model='details' name="hs-about-contacts-1" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
          </div>
        </div>
        <!-- End Grid -->

        <div class="mt-6 grid">
          <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Send inquiry</button>
        </div>

        <div class="mt-3 text-center">
          <p class="text-sm text-gray-500 dark:text-neutral-500">
            We'll get back to you in 1-2 business days.
          </p>
        </div>
      </form>
    </div>
    <!-- End Card -->
    <div id="notify" class="fixed top-20 right-5 hidden">
      <div class="space-y-5">
          <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30" role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
              <div class="flex">
                  <div class="shrink-0">
                      <!-- Icon -->
                      <span class="inline-flex justify-center items-center h-8 w-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                          <svg class="shrink-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                              <path d="m9 12 2 2 4-4"></path>
                          </svg>
                      </span>
                      <!-- End Icon -->
                  </div>
                  <div class="ms-3">
                      <h3 id="hs-bordered-success-style-label" class="text-gray-800 font-semibold dark:text-white">
                          Successfully updated.
                      </h3>
                      <p class="text-sm text-gray-700 dark:text-neutral-400">
                          You have successfully updated your email preferences.
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  @script
  <script>
      window.addEventListener('success', () => {
          document.querySelector('#notify').classList.remove('hidden');
          setTimeout(() => {
              document.querySelector('#notify').classList.add('hidden');
          }, 9000); // hide after 9 seconds
      });
  </script>
  @endscript
  </div>  
    

