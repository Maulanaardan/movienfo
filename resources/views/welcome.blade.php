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
      
<section class="py-12 px-8 md:px-24 text-white">
  <div class="flex flex-wrap justify-center gap-6">
    
    <!-- IMDb -->
    <a href="https://www.imdb.com/title/tt0078346/" target="_blank" 
       class="relative px-6 py-4 rounded-xl text-center w-36 shadow-md overflow-hidden group">
      <p class="font-semibold text-sm text-gray-400">IMDb</p>
      <p class="text-3xl font-bold mt-1">7.6</p>
      <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-yellow-400 transition-all duration-300 group-hover:w-1/2"></span>
    </a>

    <!-- Rotten Tomatoes -->
    <a href="https://www.rottentomatoes.com/" target="_blank" 
       class="relative px-6 py-4 rounded-xl text-center w-36 shadow-md overflow-hidden group">
      <p class="font-semibold text-sm text-gray-400">Rotten</p>
      <p class="text-3xl font-bold mt-1">84%</p>
      <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-red-500 transition-all duration-300 group-hover:w-1/2"></span>
    </a>

    <!-- Metacritic -->
    <a href="https://www.metacritic.com/" target="_blank" 
       class="relative px-6 py-4 rounded-xl text-center w-36 shadow-md overflow-hidden group">
      <p class="font-semibold text-sm text-gray-400">Metacritic</p>
      <p class="text-3xl font-bold mt-1">72</p>
      <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-green-500 transition-all duration-300 group-hover:w-1/2"></span>
    </a>

  </div>
</section>

  <section class="bg-black py-20 px-8 md:px-24 text-white">
    <div class="text-center mb-12">
    <h2 class="text-4xl font-bold mb-4">Cast</h2>
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


<section class="relative bg-black py-20 px-8 md:px-24 text-white">
  <div class="absolute inset-0 bg-[#222831]/100"></div>
  <div class="max-w-3xl mx-auto relative z-10">
    <h2 class="text-4xl font-bold mb-4 text-center">Storyline</h2>
    <p>
      Dalam dunia yang terbelah antara harapan dan ketakutan, <strong>Clark Kent</strong> berjuang untuk menemukan tempatnya.
      Dilahirkan sebagai <strong>Kal-El</strong> di planet Krypton yang hancur, ia dikirim ke Bumi dan dibesarkan oleh keluarga Kent yang penuh kasih.
    </p>
    <br>
    <p>
      Namun, kekuatan luar biasa yang ia miliki membuatnya selalu merasa berbeda. Ketika ancaman baru datang dari luar angkasa dan dunia mulai kehilangan kepercayaan pada pahlawan, Clark harus menentukan apakah ia akan tetap bersembunyi di balik identitasnya sebagai jurnalis, atau berdiri sebagai <strong>Superman</strong>, simbol terakhir dari harapan umat manusia.
    </p>
    <br>
    <p>
      Dalam pertarungan antara tanggung jawab dan kemanusiaan, hanya satu hal yang bisa menyelamatkan dunia: <strong>iman kepada kebaikan.</strong>
    </p>
  </div>
  </div>
</section>

<section class="bg-black py-20 px-8 md:px-24 text-white">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold mb-4">Trailer</h2>
    <p class="text-gray-400">Tonton cuplikan resmi filmnya di bawah ini</p>
  </div>

  <div class="flex justify-center">
    <div class="w-full max-w-4xl aspect-video rounded-2xl overflow-hidden shadow-2xl border border-gray-700">
      <!-- Ganti link YouTube di bawah ini -->
      <iframe 
        class="w-full h-full"
        src="https://www.youtube.com/embed/ErWfGyLp5h8?si=3VEpWuAhQHpPQUQZ" 
        title="Movie Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
      </iframe>
    </div>
  </div>

  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6  pt-20">
    <!-- Gambar 1 -->
    <div class="overflow-hidden rounded-xl shadow-lg">
      <img src="{{ asset('image/poster.jpeg') }}" alt="Scene 1" class="rounded-xl object-cover" />
    </div>

   <!-- Gambar 1 -->
    <div class="overflow-hidden rounded-xl shadow-lg">
      <img src="{{ asset('image/poster.jpeg') }}" alt="Scene 1" class="rounded-xl object-cover" />
    </div>

    <!-- Gambar 1 -->
    <div class="overflow-hidden rounded-xl shadow-lg">
      <img src="{{ asset('image/poster.jpeg') }}" alt="Scene 1" class="rounded-xl object-cover" />
    </div>

    <!-- Gambar 1 -->
    <div class="overflow-hidden rounded-xl shadow-lg">
      <img src="{{ asset('image/poster.jpeg') }}" alt="Scene 1" class="rounded-xl object-cover" />
    </div>
  </div>
</section>

</body>
</html>
