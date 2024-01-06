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
<header class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
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
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/"> Catalog </a>
                  </li>



                  <li>
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/"> About Us </a>
                  </li>

                  <li>
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/"> Contact </a>
                  </li>

                  <li>
                    <a class="text-blue-500 transition hover:text-blue-500/75" href="/"> Our Social Media </a>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="flex items-center gap-4">
              <div class="sm:flex sm:gap-4">
                <a
                  class="rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                  href="/"
                >
                  Login
                </a>

                <div class="hidden sm:flex">
                  <a
                    class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-blue-600"
                    href="/"
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
<section class="overflow-hidden rounded-lg shadow-2xl md:grid md:grid-cols-3">
    <img
      alt="Camera"
      src="https://www.adorama.com/alc/wp-content/uploads/2022/01/c-d-x-5qT09yIbROk-unsplash.jpg"
      class="h-32 w-full object-cover md:h-full"
    />

    <div class="p-4 text-center sm:p-6 md:col-span-2 lg:p-8 bg-blue-600">
      <p class="text-sm font-semibold uppercase tracking-widest">Summer Pack</p>

      <h2 class="mt-6 font-black uppercase">
        <span class="text-4xl font-black sm:text-5xl lg:text-6xl"> Get 99% off </span>

        <span class="mt-2 block text-sm">On your next order over $1</span>
      </h2>

      <a
        class="rounded mt-8 inline-block w-full bg-gray-900 py-4 text-sm font-bold case tracking-widest text-white"
        href=""
      >
        Get Discount
      </a>

      <p class="mt-8 text-xs font-medium uppercase text-black-400">
        Offer valid until 24th March, 2024 *
      </p>
    </div>
  </section>
  <section class="bg-gray-900 text-white">
    <div class="mx-auto max-w-screen-xl px-4 py-32 relative bg-[url(https://i1.pickpik.com/photos/946/661/255/antique-backdrop-background-board-preview.jpg)] bg-cover bg-no-repeat bg-center">
      <div class="mx-auto max-w-3xl text-center">
        <h1
          class="bg-gradient-to-r from-gray-900 via-blue-500 to-gray-900 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"
        >
          Get Captured In

          <span class="sm:block"> Camera's Unions </span>
        </h1>

        <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
          Disini menyewa berbagai camera yang bermerek Sony & Canon dan juga menyewakan dengan harga 3M (Murah,meriah,mantap!)
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a
            class="block w-full rounded border border-white px-12 py-3 text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring active:bg-white sm:w-auto"
            href="/get-started"
          >
            Get Started
          </a>

          <a
            class="block w-full rounded border border-white px-12 py-3 text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring active:bg-white sm:w-auto"
            href="/about"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Products -->
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <header class="text-center">
        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

        <p class="mx-auto mt-4 max-w-md text-gray-900 text-bold">
          Disini Ada beberapa Produk Terbaik Dari Kami!
        </p>
      </header>

      <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://www.sony.co.id/image/2991924bb09ccff08be69031885a361a?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320"
              alt="GambarProduk1"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[290px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
                ILCE-9M3
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.1.250.000,00 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://www.pondoklensa.com/files/photo/web/product/md/50497d9e247aefc86873bdce42c16d99_1700459032.jpg"
              alt="GambarProduk2"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[250px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
              GoPro Hero 10 Action Camera (5.3K60 4K120, HyperSmooth 4.0)
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.1.250.000,00 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://www.pondoklensa.com/files/photo/web/product/md/846930d9a6e05aec606148dceefae07d_1700461118.jpg"
              alt="GambarProduk3"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[250px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
              Sony A6600 mirrorless digital camera
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.1.300.000,00 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://sewakamerabandung.id/wp-content/uploads/2019/05/Untitled-4-6-380x380.jpg"
              alt="GambarProduk4"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[220px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
              Fujifilm X-A3 (Maroon)
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.1.200.000,00 </span>
              </p>

            </div>
          </a>
        </li>
      </ul>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://sewakamerabandung.id/wp-content/uploads/2019/05/Untitled-7-1-380x380.jpg"
              alt="GambarProduk5"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
              Canon EOS 70D
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.1.200.000,00 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://www.pondoklensa.com/files/photo/web/product/lg/8495c9109f04cc0329b057ba84777cad_17000109051.jpg"
              alt="GambarProduk6"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
              Canon EF 15mm f/2.8 Fisheye
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.1.220.000,00 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://www.pondoklensa.com/files/photo/web/product/md/eb2b2301b7299b24aaac0dc5c85c0a53_1700011573.jpg"
              alt="GambarProduk7"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
              Canon FD 55mm f/1.2 SSC (EF Mount)
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.2.000.000,00 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://www.pondoklensa.com/files/photo/web/product/md/e14db5d17c93416a7b52efd4b17107ec_1700465521.png"
              alt="GambarProduk8"
              class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-gray-900 pt-3">
              <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
              Tripod Video Miller Arrow 50 Kit (100mm bowl head)
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.1.200.000,00 </span>
              </p>
            </div>
          </a>
        </li>
        <li>
            <a href="#" class="group block overflow-hidden">
              <img
                src="https://www.pondoklensa.com/files/photo/web/product/md/11ab8fdbd74acec730f66096c19cab43_1700465326.jpg"
                alt="GambarProduk9"
                class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
              />

              <div class="relative bg-gray-900 pt-3">
                <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
                Tripod Video Attanta VD-2500
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.3.000.000,00 </span>
                </p>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="group block overflow-hidden">
              <img
                src="https://www.pondoklensa.com/files/photo/web/product/md/846930d9a6e05aec606148dceefae07d_1700465738.jpg"
                alt="GambarProduk10"
                class="rounded h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
              />

              <div class="relative bg-gray-900 pt-3">
                <h3 class="text-xs text-white group-hover:underline group-hover:underline-offset-4">
                Velbon Sherpa 603 R/F ball head Tripod
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"> RP.125.000,00 </span>
                </p>
              </div>
            </a>
          </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
        <div class="grid place-content-center rounded bg-gray-100 p-6 sm:p-8">
          <div class="mx-auto max-w-md text-center lg:text-left">
            <header>
              <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Camera Unions</h2>

              <p class="mt-4 text-gray-900 text-bold">
                Mari sewa Di mari karena hanya website ini yang memiliki diskon 3m (Murah,meriah,mantap) jangan lupa di beli ya!.
              </p>
            </header>

            <a
              href="#"
              class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring"
            >
              Rent Now!
            </a>
          </div>
        </div>
        <!-- Products Header -->

        <div class="lg:col-span-2 lg:py-8">
          <ul class="grid grid-cols-2 gap-4">
            <li>
              <a href="#" class="group block">
                <img
                  src="https://sewakamerabandung.id/wp-content/uploads/2019/05/Untitled-7-1-300x300.jpg"
                  alt="Gambar"
                  class="aspect-square w-full rounded object-cover"
                />

                <div class="relative bg-gray-900 mt-3">
                  <h3
                    class="font-medium text-white group-hover:underline group-hover:underline-offset-4"
                  >
                    Canon EOS 750D
                  </h3>

                  <p class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto">RP.125.000,00</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#" class="group block">
                <img
                  src="https://sewakamerabandung.id/wp-content/uploads/2022/01/Untitled-5-2-300x300.jpg"
                  alt="Gambar"
                  class="aspect-square w-full rounded object-cover"
                />

                <div class="relative bg-gray-900 mt-3">
                  <h3
                    class="font-medium text-white group-hover:underline group-hover:underline-offset-4"
                  >
                    CANON EOS M3 + Kit Lens 15-45m
                  </h3>

                  <p class="block w-full border text-center border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto">RP.150.000,00</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  </body>
</html>
