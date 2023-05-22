<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Brskaj | e-Storitve</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

    <!-- Font Awesome if you need it
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	-->

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
	<!--Replace with your tailwind.css once created-->


	<!-- Animation CSS-->
	<style>
		 /* ----------------------------------------------
		 * Generated by Animista
		 * w: http://animista.net, t: @cssanimista
		 * ---------------------------------------------- */

		.slide-in-bottom{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both}
		.slide-in-bottom-h1{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both}
		.slide-in-bottom-subtitle{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both}
		.fade-in{-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both}
		.bounce-top-icons{-webkit-animation:bounce-top .9s 1s both;animation:bounce-top .9s 1s both}

		@-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
		@-webkit-keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}@keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}
		@-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}

	</style>
</head>
    <body class="leading-normal tracking-normal text-gray-900 font-mono bg-gray-200 max-w-12xl mx-auto sm:px-6 lg:px-8" style="">
            <div class="border py-3 px-8 bg-gray-800">
              <div class="flex justify-between">
                <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                  </svg>
                  <span class="ml-2 text-xl font-semibold text-white">e-Storitve</span>
                </div>

                <div class="ml-6 flex flex-1 gap-x-3">


                  <form class="w-full rounded-md px-3 py-1" action="{{url('search')}}" method="get">
                  <input type="{{ url('search') }}" name="search" class="w-full rounded-md border border-[#DDE2E4] px-3 py-2 text-sm" value="Išči po nazivu storitve..." />
                  </form>

                </div>


                <div class="ml-2 flex">
                  <!--<div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                      <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm font-medium">Izpostavi</span>
                  </div>-->

                  <!-- <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm font-medium">Aktualno</span>
                  </div> -->

                  @auth
                  <div class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 bg-blue-600 text-white hover:bg-gray-100 hover:text-black">
                    <a href="/dashboard"><span class="text-sm font-medium">Domov</span></a>
                  </div>

                  @else
                  <div class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-gray-700">
                    <a href="/login"><span class="text-sm font-medium text-white">Prijava</span></a>
                  </div>

                  <div class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 text-black bg-white hover:bg-gray-300 hover:text-black">
                    <a href="/register"><span class="text-sm font-medium">Registracija</span></a>
                  </div>
                </div>
                @endauth
              </div>

              <div class="mt-4 flex items-center justify-between">
                <div class="flex gap-x-2 py-1 pl-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-0 w-0 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                </div>

              </div>
            </div>
          </div>

          <!-- Cards-->
          <div class="" style="display:grid; grid-template-columns: repeat(4, 1fr);
          grid-gap: 10px;">

          @auth
          @foreach($services as $service)
          <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-gray-800 dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
            <img class="h-64 w-full object-cover object-center" src="{{ asset('/storage/images/services/'. $service->image) }}" alt="e-Storitve" />
            <div class="p-4">
              <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-200">{{ $service->title }} ({{$service->user_id}})</h2>

              <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-200">> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }}</h3>

              <p class="mb-2 text-semibold dark:text-gray-300 text-gray-200">{{ $service->description }}</p>

              <p class="mb-2 text-base dark:text-gray-300 text-gray-200">{{ $service->phone }}</p>

              <a href="{{ $service->url }}"><p class="mb-2 text-blue-600">{{ $service->url }}</p></a>

              <div class="flex items-center">
                @if(!is_null($service->price))
                <p class="mr-2 text-lg font-semibold text-gray-200 dark:text-white">
                {{ $service->price }}€
                </p>
                @else
                <p class="mr-2 text-lg font-semibold text-white dark:text-white">
                Po dogovoru
                </p>
                @endif
                <!-- <p class="text-base  font-medium text-gray-500 line-through dark:text-gray-300">{{ $service->price }}</p>
                <p class="ml-auto text-base font-medium text-green-500">20% off</p> -->
              </div>
            </div>
          </div>
          @endforeach

          @else
          @foreach($services as $service)
          <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-gray-800 dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
            <img class="h-64 w-full object-cover object-center" src="{{ asset('/storage/images/services/'. $service->image) }}" alt="e-Storitve" />
            <div class="p-4">
              <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-200">{{ $service->title }}</h2>

              <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-200">> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }}</h3>

              <p class="mb-2 text-semibold dark:text-gray-300 text-gray-200">{{ $service->description }}</p>

              <p class="mb-2 text-base dark:text-gray-300 text-gray-200">{{ $service->phone }}</p>

              <a href="{{ $service->url }}"><p class="mb-2 text-blue-600">{{ $service->url }}</p></a>

              <div class="flex items-center">
                @if(!is_null($service->price))
                <p class="mr-2 text-lg font-semibold text-gray-200 dark:text-white">
                {{ $service->price }}€
                </p>
                @else
                <p class="mr-2 text-lg font-semibold text-white dark:text-white">
                Po dogovoru
                </p>
                @endif
                <!-- <p class="text-base  font-medium text-gray-500 line-through dark:text-gray-300">{{ $service->price }}</p>
                <p class="ml-auto text-base font-medium text-green-500">20% off</p> -->
              </div>
            </div>
          </div>
          @endforeach
          @endauth




            <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>



</body>
</html>