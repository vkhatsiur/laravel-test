@php use App\RouteNames; @endphp

<nav class="text-white bg-gray-800 pl-16 pr-8 pb-4 pt-4 flex justify-between">
    <div class="flex space-x-4">
        <a href="/" class="bg-gradient-to-r from-pink-500 to-red-500 text-transparent bg-clip-text font-bold text-3xl">TV
            SHOW</a>
        <input
            class="bg-gray-700 rounded placeholder-white grow w-96 px-3 py-1 focus:outline-none focus:outline-pink-400 hidden md:block"
            placeholder="Search a TV Show">
    </div>

    <div class="flex items-center space-x-4">
        @guest
            <a href="{{ route(RouteNames::CREATE_SIGN_IN) }}" class="hover:text-pink-400">Sign in</a>
            <a href="{{ route(RouteNames::CREATE_SIGN_UP) }}" class="hover:text-pink-400">Sign up</a>
        @endguest
        @auth
            <div class="w-9 h-9 bg-pink-400 flex items-center justify-center rounded text-2xl font-semibold">
                {{ Auth::user()->name[0] }}
            </div>

            <a href="{{ route(RouteNames::SIGN_OUT) }}" class="hover:text-pink-400">Sign Out</a>
        @endauth
    </div>
</nav>
