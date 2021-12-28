<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>  
<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
</head>
<body>
  <div class="bg-white shadow-md h-24">
    <header class="container mx-w-7xl flex flex-wrap items-center  justify-between">
      <div class="flex-shrink-0 flex items-center text-sec hover:text-pri cursor-pointer transition mt-0 mb-0">
        <img src="{{url('\logo.png')}}" class="h-24 px-0 mt-0 w-40 self-center">

      </div>
      <nav class="font-title w-full md:w-auto hidden space-x-8 lg:flex px-2">
        <ul class="text-lg">
          <li class="mb-3 md:mb-0 block md:inline-block items-center mr-6">
            Home
          </li>
          <li class="mb-3 md:mb-0 block md:inline-block items-center mr-6">
            Shop
          </li>
          <li class="mb-3 md:mb-0 block md:inline-block items-center mr-6">
            About
          </li>
          
          
        </ul>
      </nav>
      <nav class="font-title flex items-center px-2">
        <ul class="text-lg">
          <li class="inline-block items-center mr-4 text-faded">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
          </li>
          <li class="inline-block items-center mr-4">
            <button class="bg-transparent hover:bg-purple text-purple font-semibold hover:text-white py-2 px-4 border-2 border-purple hover:border-transparent rounded">Login</button>      
          </li>
          <li class="inline-block items-center mr-4 lg:hidden">
          
          <button id="menu-open" class="rounded bg-sec text-purple hover:bg-purple hover:text-white border-2 border-purple px-4 py-2 transistion">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-10" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
        </svg>     
        </button>
        <button id="menu-close" class="hidden rounded bg-sec text-purple hover:bg-purple hover:text-white border-2 border-purple px-4 py-2 transistion">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>           
        </button>
          </li>
          
          
        </ul>
      </nav>
      <nav id="menu-items" class="hidden font-title w-full md:w-auto hidden lg:hidden px-2">
        <ul class="text-lg">
          <li class="mb-3 md:mb-0 block md:inline-block items-center mr-6">
            Home
          </li>
          <li class="mb-3 md:mb-0 block md:inline-block items-center mr-6">
            Shop
          </li>
          <li class="mb-3 md:mb-0 block md:inline-block items-center mr-6">
            About
          </li>
          
          
        </ul>
      </nav>
      


    </header>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
  <script src="{{ URL::asset('js/app.js') }}"></script>
  
</body>

</html>