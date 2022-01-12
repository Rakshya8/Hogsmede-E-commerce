@if (session()->has('success'))
<div class="absolute inset-0 flex place-content-end z-10 mt-28 
 mr-1 text-white h-14 text-lg opacity-75 rounded-md w-30" 
  x-data="{show: true}"
  x-init="setTimeout(()=> show = false ,4000)"
  x-show="show"
  x-transition:enter="transition-transform transition-opacity ease-out"
  x-transition:leave="transition-transform transition-opacity ease-out"
  >
  Hi
  <p class="bg-green-700 px-5 flex items-center">
  <i class="fa fa-check"></i>
      </p>
      <p class="bg-green-500 px-5 flex items-center ">
      
      {{ session('success')}}
     
      </p>
    </div>
    @endif

    @if (session()->has('failure'))
<div class="absolute inset-0 flex place-content-end z-10 mt-28 
 mr-1 text-white h-14 text-lg opacity-75 rounded-md"
  x-data="{show: true}"
  x-init="setTimeout(()=> show = false ,4000)"
  x-show="show"
  x-transition:enter="transition-transform transition-opacity ease-out"
  x-transition:leave="transition-transform transition-opacity ease-out"
  >
  <p class="bg-red-700 px-5 flex items-center">
  <i class="fa fa-times"></i>
      </p>
      <p class="bg-red-500 px-5 flex items-center ">
      
      {{ session('failure')}}
     
      </p>
    </div>
    @endif