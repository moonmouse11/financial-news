<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title'):: Financial News</title>
    <link rel="stylesheet" href=@vite('resources/css/style.css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="src/img/favicon.jpg">
</head>

<body class="text-gray-700 pt-9 sm:pt-10">
  <!-- ========== { HEADER }==========  -->
  <header class="fixed top-0 left-0 right-0 z-50">
     <nav class="bg-black">
        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
          <div class="flex justify-between">
            <div class="mx-w-10 text-2xl font-bold capitalize text-white flex items-center">Financial News</div>

            <div class="flex flex-row">
              <!-- nav menu -->
              <ul class="navbar hidden lg:flex lg:flex-row text-gray-400 text-sm items-center font-bold">
                <li class="relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="../tailnews/index.html">Home</a>
                </li>
                <li class="dropdown relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Pages</a>

                  <ul class="dropdown-menu font-normal absolute left-0 right-auto top-full z-50 border-b-0 text-left bg-white text-gray-700 border border-gray-100" style="min-width: 12rem;">
                    <li class="subdropdown relative hover:bg-gray-50">
                      <a class="block py-2 px-6 border-b border-gray-100" href="#">
                        Homepage
                      </a>

                      <!--dropdown submenu-->
                      <ul class="dropdown-menu absolute left-full right-auto transform top-full z-50 border-b-0 text-left -mt-10 ml-0 mr-0 bg-white border border-gray-100" style="min-width: 12rem;">
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/index.html">Homepage 1</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/index-2.html">Homepage 2</a></li>
                      </ul>
                    </li>
                    <li class="subdropdown relative hover:bg-gray-50">
                      <a class="block py-2 px-6 border-b border-gray-100" href="#">
                        Pages
                      </a>

                      <!--dropdown submenu-->
                      <ul class="dropdown-menu absolute left-full right-auto transform top-full z-50 border-b-0 text-left -mt-10 ml-0 mr-0 bg-white border border-gray-100" style="min-width: 12rem;">
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/author.html">Author</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/category.html">Category</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/search.html">Search</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/page.html">Page</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/contact-us.html">Contact</a></li>
                      </ul>
                    </li>
                    <li class="subdropdown relative hover:bg-gray-50">
                      <a class="block py-2 px-6 border-b border-gray-100" href="#">
                        Post
                      </a>

                      <!--dropdown submenu-->
                      <ul class="dropdown-menu absolute left-full right-auto transform top-full z-50 border-b-0 text-left -mt-10 ml-0 mr-0 bg-white border border-gray-100" style="min-width: 12rem;">
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/single.html">Post default</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/single-2.html">Post fullwidth</a></li>
                      </ul>
                    </li>

                    <li class="subdropdown relative hover:bg-gray-50">
                      <a class="block py-2 px-6 border-b border-gray-100" href="#">
                        Documentation
                      </a>

                      <!--dropdown submenu-->
                      <ul class="dropdown-menu absolute left-full right-auto transform top-full z-50 border-b-0 text-left -mt-10 ml-0 mr-0 bg-white border border-gray-100" style="min-width: 12rem;">
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/docs/index.html">Get started</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/docs/components.html">Components</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/docs/credits.html">Credits</a></li>
                        <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="../tailnews/docs/changelogs.html">Changelogs</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Sport</a>
                </li>
                <li class="relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Travel</a>
                </li>
                <li class="relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Techno</a>
                </li>
                <li class="relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Worklife</a>
                </li>
                <li class="relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Future</a>
                </li>
                <li class="relative border-l border-gray-800 hover:bg-gray-900">
                  <a class="block py-3 px-6 border-b-2 border-transparent" href="#">More</a>
                </li>
              </ul>

              <!-- search form & mobile nav -->
              <div class="flex flex-row items-center text-gray-300">
                <div class="search-dropdown relative border-r lg:border-l border-gray-800 hover:bg-gray-900">
                  <button class="block py-3 px-6 border-b-2 border-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="open bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="close bi bi-x-lg" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                      <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                    </svg>
                  </button>
                  <div class="dropdown-menu absolute left-auto right-0 top-full z-50 text-left bg-white text-gray-700 border border-gray-100 mt-1 p-3" style="min-width: 15rem;">
                    <div class="flex flex-wrap items-stretch w-full relative">
                      <input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-5 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="text" placeholder="Search..." aria-label="search">
                      <div class="flex -mr-px">
                        <button class="flex items-center py-2 px-5 -ml-1 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0" type="submit">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="relative hover:bg-gray-800 block lg:hidden">
                  <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent">
                    <span class="sr-only">Mobile menu</span>
                    <svg class="inline-block h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg> Menu
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
     </nav>
  </header><!-- end header -->

  <!-- Mobile menu -->
  <div class="side-area fixed w-full h-full inset-0 z-50">
    <!-- bg open -->
    <div class="back-menu fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0">
      <div class="cursor-pointer text-white absolute right-64 p-2">
        <svg class="bi bi-x" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
          <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"></path>
        </svg>
      </div>
    </div>

    <!-- Mobile navbar -->
    <nav id="mobile-nav" class="side-menu flex flex-col right-0 w-64 fixed top-0 bg-white dark:bg-gray-800 h-full overflow-auto z-40">
      <div class="mb-auto">
        <!--navigation-->
        <nav class="relative flex flex-wrap">
          <div class="text-center py-4 w-full font-bold border-b border-gray-100">TAILNEWS</div>
          <ul id="side-menu" class="w-full float-none flex flex-col">
            <li class="relative">
              <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Home</a>
            </li>

            <!-- dropdown with submenu-->
            <li class="dropdown relative">
              <a class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                News
              </a>

              <!-- dropdown menu -->
              <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800 mb-4" style="min-width: 12rem">
                <!--submenu-->
                <li class="subdropdown relative">
                  <a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                    Dropdown item
                  </a>

                  <!--dropdown submenu-->
                  <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800" style="min-width: 12rem">
                    <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                    <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                    <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                    <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                  </ul>
                </li><!--end submenu-->
                <li class="relative"><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
                <li class="relative"><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
              </ul>
            </li>

            <li class="relative">
              <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Sport</a>
            </li>

            <li class="relative">
              <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Travel</a>
            </li>

            <li class="relative">
              <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Techno</a>
            </li>

            <li class="relative">
              <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Worklife</a>
            </li>

            <li class="relative">
              <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Future</a>
            </li>

            <li class="relative">
              <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">More</a>
            </li>
          </ul>
        </nav>
      </div>
    </nav>
  </div><!-- End Mobile menu -->

  <!-- =========={ MAIN }==========  -->
  <main id="content">
    <!-- advertisement -->
    <div class="bg-gray-50 py-4 hidden">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="mx-auto table text-center text-sm">
          <a class="uppercase" href="#">Advertisement</a>
          <a href="#">
            <img src="../tailnews/src/img/ads/ads_728.jpg" alt="advertisement area">
          </a>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-white py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <div class="flex-shrink max-w-full w-full">
            <div class="p-10 text-center">
            	<div class="mb-4 text-center">
                <h1 class="text-6xl text-gray-800 font-bold mb-2">@yield('code')</h1>
                <span class="inline-block h-0.5 w-20 bg-red-600"></span>
              </div>
              <h3 class="text-2xl mb-2">@yield('message')</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main><!-- end main -->

  <!-- =========={ SCROLL TO TOP }==========  -->
  <a href="#" class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden" aria-label="Scroll To Top">
    <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
      <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
    </svg>
  </a>

  <!--Vendor js-->
  <script src="../../js/vendors/hc-sticky/dist/hc-sticky.js"></script>
  <script src="../../js/vendors/glightbox/dist/js/glightbox.min.js"></script>
  <script src="../../js/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
  <script src="../../js/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js"></script>

  <!-- Start development js -->
  <script src="../../js/theme.js"></script>
  <!-- End development js -->

</body>
</html>