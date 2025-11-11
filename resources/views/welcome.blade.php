<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite('resources/css/app.css')
    </head>
    <body class="bg-black text-white font-sans">

      <section class="relative h-screen flex items-center justify-start overflow-hidden">
        <!-- Background gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a0224] via-[#15064c] to-transparent opacity-90"></div>

        <!-- Background image -->
        <img src="{{ asset('image/poster.jpeg') }}" 
            class="absolute inset-0 w-full h-full object-cover object-right" 
            alt="Superman Poster">

            <!-- 🔥 Overlay hitam transparan -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Optional: gradient biar lebih sinematik -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>

        <!-- Content -->
        <div class="relative z-10 px-16 max-w-2xl">
          <!-- Tags -->
          <div class="flex gap-3 mb-5">
            <span class="bg-white/10 px-4 py-1 rounded-full text-sm backdrop-blur-md">Action</span>
            <span class="bg-white/10 px-4 py-1 rounded-full text-sm backdrop-blur-md">Sci-fi</span>
            <span class="bg-white/10 px-4 py-1 rounded-full text-sm backdrop-blur-md">Adventure</span>
            <span class="bg-white/10 px-4 py-1 rounded-full text-sm backdrop-blur-md">Superhero</span>
          </div>

          <!-- Logo + Title -->
          <div class="mb-4">
            <p class="text-blue-400 font-semibold tracking-widest text-lg">DC STUDIOS</p>
            <h1 class="text-6xl font-extrabold mt-2">SUPERMAN</h1>
          </div>

          <!-- Description -->
          <p class="text-gray-300 leading-relaxed mb-4">
            Superman must reconcile his alien Kryptonian heritage with his human upbringing as reporter Clark Kent. 
            As the embodiment of truth, justice and the human way, he soon finds himself in a world that views these as old-fashioned.
          </p>

          <!-- Rating & Release -->
          <div class="text-gray-300 mb-6">
            <p><strong class="text-white">Rating:</strong> ⭐ 7.6/10</p>
            <p><strong class="text-white">Release Date:</strong> July 11, 2025</p>
          </div>

          <!-- Buttons -->
          <div class="flex gap-4">
            <button class="px-6 py-2 rounded-full border border-white/50 hover:bg-white hover:text-black transition">
              ▶ Watch Trailer
            </button>
            <button class="px-6 py-2 rounded-full bg-white text-black font-semibold hover:bg-gray-300 transition">
              + Add to List
            </button>
          </div>
        </div>
      </section>

  <section class="bg-gray-950 py-20 px-8 md:px-24 text-white">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold">Cast</h2>
  </div>

  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-10 justify-items-center">
    <!-- Card 1 -->
    <div class="flex flex-col items-center">
      <img 
        src="https://i.pravatar.cc/300?img=12" 
        alt="Cast Image" 
        class="w-36 h-36 rounded-full object-cover shadow-lg border-2 border-gray-700 hover:scale-105 transition-transform duration-300"
      />
      <h3 class="mt-4 text-lg font-semibold text-center">John Doe</h3>
      <p class="text-gray-400 text-sm text-center">as Hero</p>
    </div>

    <!-- Card 2 -->
    <div class="flex flex-col items-center">
      <img 
        src="https://i.pravatar.cc/300?img=45" 
        alt="Cast Image" 
        class="w-36 h-36 rounded-full object-cover shadow-lg border-2 border-gray-700 hover:scale-105 transition-transform duration-300"
      />
      <h3 class="mt-4 text-lg font-semibold text-center">Jane Smith</h3>
      <p class="text-gray-400 text-sm text-center">as Villain</p>
    </div>

    <div class="flex flex-col items-center">
      <img 
        src="https://i.pravatar.cc/300?img=25" 
        alt="Cast Image" 
        class="w-36 h-36 rounded-full object-cover shadow-lg border-2 border-gray-700 hover:scale-105 transition-transform duration-300"
      />
      <h3 class="mt-4 text-lg font-semibold text-center">Jane Smith</h3>
      <p class="text-gray-400 text-sm text-center">as Villain</p>
    </div>

    <div class="flex flex-col items-center">
      <img 
        src="https://i.pravatar.cc/300?img=16" 
        alt="Cast Image" 
        class="w-36 h-36 rounded-full object-cover shadow-lg border-2 border-gray-700 hover:scale-105 transition-transform duration-300"
      />
      <h3 class="mt-4 text-lg font-semibold text-center">Jane Smith</h3>
      <p class="text-gray-400 text-sm text-center">as Villain</p>
    </div>

    <div class="flex flex-col items-center">
      <img 
        src="https://i.pravatar.cc/300?img=12" 
        alt="Cast Image" 
        class="w-36 h-36 rounded-full object-cover shadow-lg border-2 border-gray-700 hover:scale-105 transition-transform duration-300"
      />
      <h3 class="mt-4 text-lg font-semibold text-center">Jane Smith</h3>
      <p class="text-gray-400 text-sm text-center">as Villain</p>
    </div>
    <!-- Card lainnya -->
  </div>
</section>


<section class="bg-gray-950 text-white py-20 px-8 md:px-24">
  <div class="max-w-3xl mx-auto">
    <h2 class="text-3xl md:text-5xl font-bold mb-6 tracking-wide text-center">Storyline / Synopsis</h2>
    <p class="text-gray-300 leading-relaxed text-lg">
      In a world where humanity’s survival depends on hope, a young hero embarks on an unforgettable journey 
      to uncover the truth behind a mysterious power that could save — or destroy — everything.  
      As allies turn into enemies and secrets unfold, fate brings them to the edge of destiny.
    </p>
  </div>
</section>

</body>
</html>
