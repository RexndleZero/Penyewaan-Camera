<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camera's Unions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
  </head>
  <body class="font-[poppins]">
<header class="bg-white">
    <header class="bg-black">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
              <a class="block text-teal-600" href="/">
                <span class="sr-only">Home</span>
                <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                    fill="currentColor"
                  />
                </svg>
              </a>
            </div>
            <!-- Navbar -->

            <div class="hidden md:block">
              <nav aria-label="Global">
                <ul class="flex items-center gap-6 text-sm">
                  <li>
                    <a class="text-gray-500 transition hover:text-gray-500/75" href="/"> Catalog </a>
                  </li>

                  <li>
                    <a class="text-gray-500 transition hover:text-gray-500/75" href="/"> Pricelist </a>
                  </li>

                  <li>
                    <a class="text-gray-500 transition hover:text-gray-500/75" href="/"> Cart </a>
                  </li>

                  <li>
                    <a class="text-gray-500 transition hover:text-gray-500/75" href="/"> About Us </a>
                  </li>

                  <li>
                    <a class="text-gray-500 transition hover:text-gray-500/75" href="/"> Contact </a>
                  </li>

                  <li>
                    <a class="text-gray-500 transition hover:text-gray-500/75" href="/"> Our Social Media </a>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="flex items-center gap-4">
              <div class="sm:flex sm:gap-4">
                <a
                  class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                  href="/"
                >
                  Login
                </a>

                <div class="hidden sm:flex">
                  <a
                    class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                    href="/"
                  >
                    Register
                  </a>
                </div>
              </div>

              <div class="block md:hidden">
                <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
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
<section
  class="relative bg-[url(https://sewakamerabandung.id/wp-content/uploads/2021/11/BANNER-1-B-1536x424.jpg)] bg-cover bg-center bg-no-repeat"
>
  <div
    class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
  ></div>

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
  >
    <div class="max-w-xl text-center ltr:sm:text-right rtl:sm:text-right">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Let us find your Moments!

        <strong class="block font-extrabold text-teal-700"> Forever Capture </strong>
      </h1>

      <p class="mt-4 max-w-lg sm:text-xl/relaxed">
        3M (Murah,Meriah,Mantap!)
      </p>

      <div class="mt-8 flex flex-wrap gap-4 text-center">
        <a
          href="#"
          class="block w-full rounded bg-teal-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-teal-700 focus:outline-none focus:ring active:bg-teal-500 sm:w-auto"
        >
          Get Captured
        </a>

        <a
          href="#"
          class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-teal-600 shadow hover:text-teal-700 focus:outline-none focus:ring active:text-teal-500 sm:w-auto"
        >
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
        <div class="grid place-content-center rounded bg-gray-100 p-6 sm:p-8">
          <div class="mx-auto max-w-md text-center lg:text-left">
            <header>
              <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Camera's</h2>

              <p class="mt-4 text-gray-500">
                Mari Belanja Di mari karena hanya website ini yang memiliki diskon 3m (Murah,meriah,mantap) jangan lupa di beli ya!.
              </p>
            </header>

            <a
              href="#"
              class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring"
            >
              Buy Now!
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

                <div class="mt-3">
                  <h3
                    class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"
                  >
                    Canon EOS 750D
                  </h3>

                  <p class="mt-1 text-sm text-gray-700">RP.125.000,00</p>
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

                <div class="mt-3">
                  <h3
                    class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"
                  >
                    CANON EOS M3 + Kit Lens 15-45m
                  </h3>

                  <p class="mt-1 text-sm text-gray-700">RP.150.000,00</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Products -->

  <>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <header class="text-center">
        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

        <p class="mx-auto mt-4 max-w-md text-gray-500 text-bold">
          Disini Ada beberapa Produk Terbaik Dari Kami!
        </p>
      </header>

      <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src=""
              alt="GambarProduk1"
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                ILCE-9M3
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                ILCE-7CR
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                ILCE-7CM2
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                ILCE-6700
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
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
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                 ZV-E1
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                ILCE-7RM5
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                ZV-E10
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="#" class="group block overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                ILCE-7S
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
              </p>
            </div>
          </a>
        </li>
        <li>
            <a href="#" class="group block overflow-hidden">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
              />

              <div class="relative bg-white pt-3">
                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    ILCE-7/ILCE-7K
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="group block overflow-hidden">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
              />

              <div class="relative bg-white pt-3">
                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    ILCE-7RM3
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>
      </ul>
    </div>
  </section>
  </body>
</html>
