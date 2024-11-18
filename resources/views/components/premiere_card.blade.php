@props(['tvShow'])

<div
    class="flex flex-row rounded-xl bg-gray-200 shadow-lg w-full overflow-hidden border-2 hover:border-pink-400 hover:bg-pink-50">
    <img class="w-32 rounded-xl" src="{{ $tvShow->poster_url }}" alt="test">
    <div class="flex flex-col p-5 items-center justify-center w-full">
        <h1 class="text-3xl font-medium">{{ $tvShow->name }}</h1>
        <p class="text-xl">{{ $tvShow->first_air_date->format('F j, Y') }}</p>
        <p class="text-sm">Rating: {{ $tvShow->vote_average }}</p>
    </div>
</div>
