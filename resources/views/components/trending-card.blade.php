@props(['src', 'index'])

<div class="flex flex-none flex-col items-center -space-y-3 group border-2 border-green-400">
    <img class="w-60 rounded-xl group-hover:outline group-hover:outline-pink-400" src="{{$src}}" alt="From (serial)">
    <div class="flex items-center justify-center rounded-full w-5 h-5 bg-gray-700 border border-gray-200 text-gray-200 font-medium group-hover:bg-pink-400">
        {{$index}}
    </div>
</div>
