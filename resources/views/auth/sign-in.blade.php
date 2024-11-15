@php use App\RouteNames; @endphp
<x-layout>
    <x-forms.form class="flex flex-col mt-12 p-8 pt-0" method="POST" action="{{ route(RouteNames::STORE_SIGN_IN) }}">
        <h1 class="font-bold text-center text-4xl mb-8">Sign in to TV Show</h1>
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" placeholder="" />

        <x-forms.button>Sign In</x-forms.button>
    </x-forms.form>
</x-layout>
