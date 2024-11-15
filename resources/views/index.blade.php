<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="text-white bg-gray-50">
<nav class="bg-gray-800 pl-16 pr-8 pb-4 pt-4 flex justify-between">
    <div class="flex space-x-4">
        <a href="#" class="bg-gradient-to-r from-pink-500 to-red-500 text-transparent bg-clip-text font-bold text-3xl">TV
            SHOW</a>
        <input
            class="bg-gray-700 rounded placeholder-white grow w-96 px-3 py-1 focus:outline-none focus:outline-pink-400 hidden md:block"
            placeholder="Search a TV Show">
    </div>

    <div class="flex items-center space-x-4">
        <a href="#" class="hover:text-pink-400">Sign in</a>
        <a href="#" class="hover:text-pink-400">Sign up</a>
    </div>
</nav>
<div class="flex flex-col text-gray-900 px-40 mt-9 items-center divide-y-2 space-y-6">
    <div class="flex-row">
        <div class="flex items-center">
            <svg id="flame" class="w-8" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                        .vi-primary {
                            fill: #FF6E6E;
                        }

                        .vi-primary, .vi-accent {
                            stroke: #fff;
                            stroke-linecap: round;
                            stroke-width: 0;
                            fill-rule: evenodd;
                        }

                        .vi-accent {
                            fill: #0C0058;
                        }
                    </style>
                </defs>
                <path class="vi-primary"
                      d="M35.555,32.1A11.979,11.979,0,0,1,12,28.857a7.933,7.933,0,0,1,.485-2.924c1.158-7.338,8.3-7.87,4.315-18.933,0,0,6.65,1.727,8,12.143,0,0,4.919-.163,1.6-7.286A21.311,21.311,0,0,1,36,27,24.911,24.911,0,0,1,35.555,32.1Z"/>
                <path class="vi-accent"
                      d="M31,33.5a7.5,7.5,0,0,1-14.975.484L16,34s-0.075-3.272,0-4c0.684-6.611,2.6-9.563,5-14,0.067-2.639-1.115,7.273,5,10A8.188,8.188,0,0,1,31,33.5Z"/>
            </svg>
            <h1 class="text-xl font-semibold">Trending Now</h1>
        </div>
        <div class="flex space-x-4 pt-2">
            <x-trending-card src="https://www.toramp.com/posters/shows/5599/width360/from.jpg"
                             index="1"></x-trending-card>
            <x-trending-card src="https://www.toramp.com/posters/shows/5437/width360/arcane.jpg"
                             index="2"></x-trending-card>
            <x-trending-card src="https://www.toramp.com/posters/shows/3273/width360/911.jpg"
                             index="3"></x-trending-card>
            <x-trending-card src="https://www.toramp.com/posters/shows/2/width360/supernatural.jpg"
                             index="4"></x-trending-card>
            <x-trending-card src="https://www.toramp.com/posters/shows/6189/width360/6189.jpg"
                             index="5"></x-trending-card>
            <x-trending-card src="https://www.toramp.com/posters/shows/6560/width360/6560.jpg"
                             index="6"></x-trending-card>
            <x-trending-card src="https://www.toramp.com/posters/shows/5888/width360/spy_x_family.jpg"
                             index="7"></x-trending-card>
        </div>
    </div>
a
    <div class="w-full">
        <h1 class="text-xl font-semibold">Premieres</h1>
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 3xl:grid-cols-5 gap-4 mt-6">
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
            <x-premiere_card></x-premiere_card>
        </div>
    </div>

</div>
</body>
</html>
