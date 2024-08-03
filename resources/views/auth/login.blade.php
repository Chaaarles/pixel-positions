<x-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form action="/login" method="POST" enctype="multipart/form-data">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.button>Create account</x-forms.button>
    </x-forms.form>
</x-layout>
