<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6 text-white">About Us</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="md:order-2">
                <img src="Image/Team.jpg" alt="Team Photo" class="rounded-md shadow-lg">
            </div>
            <div class="md:order-1 text-white bold">
                <p class="text-lg mb-4">
                    Welcome To Our website!, website ini memudahkan anda untuk yang sedang ingin sewa camera.
                    website ini juga bisa menjadi pijakan untuk anda yang ingin memulai karir sebagai Photografer lohh, tunggu apa lagi buruan checkout camera nya sebelum kehabisan!!!.</p>
            </div>
        </div>
    </div>
    <footer class="bg-gray-900 lg:grid lg:grid-cols-5">
        <div class="relative block h-32 lg:col-span-2 lg:h-full">
          <img
            src="https://images.unsplash.com/photo-1642370324100-324b21fab3a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80"
            alt="Team"
            class="absolute inset-0 h-full w-full object-cover"
          />
        </div>

        <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
          <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
            <div>
              <p>
                <span class="text-xs uppercase tracking-wide text-white"> Call us </span>

                <a href="#" class="block text-2xl font-medium text-white hover:opacity-75 sm:text-3xl">
                  +62-895-0391-1441
                </a>
              </p>
              <span class="sr-only">GitHub</span>
                    <a href="https://github.com/RexndleZero/Penyewaan-Camera">

                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    </a>
                  </a>
                </li>
              </ul>
            </div>
          <div class="mt-12 border-t border-gray-100 pt-12">
            <div class="sm:flex sm:items-center sm:justify-between">
              <ul class="flex flex-wrap gap-4 text-xs">
                <li>
                  <a href="#" class="text-white transition hover:opacity-75"> Terms & Conditions </a>
                </li>

                <li>
                  <a href="#" class="text-white transition hover:opacity-75"> Privacy Policy </a>
                </li>

                <li>
                  <a href="#" class="text-white transition hover:opacity-75"> Cookies </a>
                </li>
              </ul>

              <p class="mt-8 text-xs text-white sm:mt-0">
                &copy; 2023-2024. Camera's Unions. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
