<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data"></x-forms.form>

    <x-forms.input label="Your Name" name="name" />
    <x-forms.input label="email" name="email" type="email" />
    <x-forms.input label="password" name="password" type="password" />
    <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

    <x-forms.divider/>

    <x-forms.input label="Employer Name" name="employer" />
    <x-forms.input label="Employer Logo" name="logo" type="file" />

    <x-forms.divider/>
    <x-forms.button>Create Account</x-forms.button>


    </x-layout>
