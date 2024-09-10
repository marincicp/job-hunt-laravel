<x-layout>


    <x-page-heading>Register</x-page-heading>


    <x-form.form method="POST" action="/register" enctype="multipart/form-data">


        <x-form.input label="Your Name" name="name" />
        <x-form.input label="Email" name="email" />
        <x-form.input label="Password" name="password" />
        <x-form.input label="Confirm Password" name="password_confirmation" />
        <x-form.divider></x-form.divider>

        <x-form.input label="Employer Name" name="employer" />
        <x-form.input label="Employer Logo" name="logo" type="file" />

        <x-form.button>Create Account</x-form.button>
    </x-form.form>

</x-layout>
