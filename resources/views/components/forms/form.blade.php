<form {{ $attributes(["class" => "max-w-md mx-auto space-y-6 border-2 border-black/10 rounded", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
