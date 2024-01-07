<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camera's Unions</title>
    <!-- Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
  </head>
  <body class="font-[poppins]">
<header class="bg-black">
    <header class="bg-black">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center  md:gap-12">
              <a class="block text-blue-600" href="/">
                <span class="sr-only">Home</span>
                <a href="#">
                    <img src="" alt="Logo">
                </a>
              </a>
            </div>
            <!-- Navbar -->

            <div class="hidden md:block">
              <nav aria-label="Global">
                <ul class="flex items-center gap-6 text-sm">
                  <li>
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/Product"> Product </a>
                  </li>

                  <li>
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/About_us"> About Us </a>
                  </li>
                  <li>
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/meet_dev"> Meet The Developer </a>
                  </li>
                  <li>
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/cart"> Cart </a>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="flex items-center gap-4">
              <div class="sm:flex sm:gap-4">
                <a
                  class="rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                  href="/login"
                >
                  Login
                </a>

                <div class="hidden sm:flex">
                  <a
                    class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-blue-600"
                    href="/register"
                  >
                    Register
                  </a>
                </div>
              </div>

              <div class="block md:hidden">
                <button class="rounded bg-gray-100 p-2 text-blue-600 transition hover:text-blue-600/75">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>

              </div>
            </div>
          </div>
        </div>
</header>
<!-- ISI -->
<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section
  class="overflow-hidden bg-[url(https://images.unsplash.com/photo-1516724562728-afc824a36e84?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtZXJhJTIwaW4lMjBiYWNrZ3JvdW5kfGVufDB8fDB8fHww)] bg-cover bg-top bg-no-repeat"
>
  <div class="bg-black/25 p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="text-center ltr:sm:text-left rtl:sm:text-right">
      <h2 class="text-2xl font-bold text-blue-600 sm:text-3xl md:text-5xl">Camera's Unions</h2>

      <p class="text-2xl text-white sm:text-2xl md:text-5xl">
        Website yang menyediakan dua jenis produk kamera ternama yaitu SONY & CANON yang dimana
        harga dari camera tersebut dibilang cukup murah kenapa?,Karena anda membelinya hanya di Camera'
        Unions Jangan lupa untuk checkout kamera anda sebelum kehabisan!
      </p>

      <div class="mt-4 sm:mt-8">
        <a
          href="/Product"
          class="inline-block rounded-full bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring focus:ring-yellow-400"
        >
          Sewa Sekarang!
        </a>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div class="rounded bg-blue-600 p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-white md:text-3xl">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit
              </h2>

              <p class="hidden text-white/90 sm:mt-4 sm:block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam
                sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet
                volutpat quisque ut interdum tincidunt duis.
              </p>
            </div>
          </div>

          <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
            <img
              alt="Student"
              src="https://images.unsplash.com/photo-1621274790572-7c32596bc67f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=654&q=80"
              class="h-40 w-full object-cover sm:h-56 md:h-full"
            />

            <img
              alt="Student"
              src="https://images.unsplash.com/photo-1567168544813-cc03465b4fa8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
              class="h-40 w-full object-cover sm:h-56 md:h-full"
            />
          </div>
        </div>
      </div>
</section>
  </body>
</html>
