<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Havilla - Residence">
    <meta name="keywords" content="Havilla Residence">
    <meta name="description" content="Hunian yang berlokasi strategis di daerah bogor, Disini Kalian akan merasakan dekat dengan fasilitas tanpa harus keluar dari area perumahan dengan terpenuhinya fasilitas yang tersedia kami menjamin kenyamanan dan keamanan semua">
    <link rel="stylesheet" href="./style.css">
    <title>Havilla Residence</title>
</head>
<body>
    <header>
        <nav class="bg-white border-gray-200 px-2 sm:px-4 lg:px-14 py-4 lg:py-6 rounded dark:bg-gray-800" id="nav">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="#" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white uppercase">Havilla Residence</span>
                </a>
                <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-semibold uppercase ">
                        <li>
                            <a href="#nav" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#why" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                        </li>
                        <li>
                            <a href="#image" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Gallery</a>
                        </li>
                        <li>
                            <a href="#contact" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="h-screen">
            <div class="h-full bg-primary flex items-center">
                <div class="grid grid-cols 1 lg:grid-cols-2 mx-12 lg:mx-40 gap-x-20 gap-y-12">
                    <div>
                        <img src="assets/house1.jpg" alt="" class="h-full object-cover">
                    </div>
                    <div>
                        <img src="assets/house2.jpg" alt="" class="h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="why" class="bg-white py-20">
              <div class="mb-32">
                  <h1 class="text-center text-2xl font-semibold uppercase">Kenapa Harus Havilla Residence</h1>
              </div>
              <hr class="mb-40">
              <div class="mb-40">
                  <h1 class="text-center text-2xl font-semibold uppercase mb-10">Dekat Kemana Saja</h1>
                  <div class="grid grid-cols-7">
                    <div class="col-span-2 hidden lg:block"></div>
                    <div class="col-span-full lg:col-span-3 mx-2">
                      <p class="text-sm text-gray-400">
                        Disini Kalian akan merasakan dekat dengan fasilitas tanpa harus keluar dari area perumahan dengan terpenuhinya fasilitas yang tersedia kami menjamin kenyamanan dan keamanan semua
                      </p>
                    </div>
                    <div class="col-span-2 hidden lg:block"></div>
                  </div>
              </div>
        </section>
        <section id="image">
            <div>
                <div class="grid grid-cols-6 gap-x-12 mb-24">
                    <div class="hidden lg:block"></div>
                    <div class="col-span-full lg:col-span-2">
                        <img src="assets/house3.jpeg" alt="" class="h-full object-cover">
                    </div>
                    <div class="col-span-full lg:col-span-2">
                        <img src="assets/house3.jpg" alt="" class="h-full object-cover">
                    </div>
                    <div class="hidden lg:block"></div>
                </div>
            </div>
            <div class="text-center mb-12" id="contact">
                <h1 class="font-bold text-3xl">Contact Us</h1>
            </div>
        </section>
    </main>
    <footer class="bg-gray-100">
        <div class="grid grid-cols-2 gap-8 py-8 px-6 md:grid-cols-3">
            <div class="hidden lg:block">
            </div>
            <div>
                <!-- <h2 class="mb-6 text-sm font-semibold text-gray-700 uppercase">Help center</h2> -->
                <ul class="text-gray-700">
                    <li class="mb-6">
                        <a href="https://api.whatsapp.com/send?phone=081318980599" class="hover:underline flex items-center">
                            <img src="assets/whatsapp.png" alt="" width="30" class="mr-6">
                            0813-1898-0599
                            </a>
                    </li>
                    <li class="mb-6">
                        <a href="https://www.instagram.com/havila_residence" class="hover:underline flex items-center">
                            <img src="assets/instagram.png" alt="" width="30" class="mr-6">
                            havila_residence
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="https://www.instagram.com/havila_residence/" class="hover:underline flex items-center">
                            <img src="assets/youtube.png" alt="" width="30" class="mr-6">
                            havila_residence
                            </a>
                    </li>
                    <li class="mb-6">
                        <a href="https://twitter.com/havila_residence" class="hover:underline flex items-center">
                            <img src="assets/twitter.png" alt="" width="30" class="mr-6">
                            havila_residence
                        </a>
                    </li>
                </ul>
            </div>
            <div class="hidden:lg-block">
                <!-- <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Legal</h2>
                <ul class="text-gray-300">
                    <li class="mb-4">
                    <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                    <a href="#" class="hover:underline">Licensing</a>
                    </li>
                    <li class="mb-4">
                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul> -->
            </div>
            <!-- <div>   
                <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Download</h2>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">iOS</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Android</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Windows</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">MacOS</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </footer>

    <script src="./node_modules/flowbite/dist/flowbite.js"></script>
</body>
</html>