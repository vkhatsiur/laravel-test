<x-layout>
    <x-forms.form class="flex flex-col mt-12 p-8 pt-0" method="POST" action="/sign-in">
        <h1 class="font-bold text-center text-4xl mb-8">Sign up on TV Show</h1>
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.button>Sign Up</x-forms.button>
    </x-forms.form>
</x-layout>
