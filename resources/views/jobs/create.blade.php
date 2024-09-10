<x-layout>



    <x-page-heading>Create New Job</x-page-heading>


    <x-form.form method="POST" action="/jobs">

        <x-form.input name="title" label="Title" placeholder="CEO" />
        <x-form.input name="salary" label="Salary" placeholder="$90, 000 USD" />
        <x-form.input name="location" label="Location" placeholder="Florida" />

        <x-form.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>

        </x-form.select>

        <x-form.input name="url" label="URL" placeholder="www.jobs.com" />

        <x-form.checkbox label="Feature (Cost Extra)" name="featured" />

        <x-form.divider />

        <x-form.input name="tags" label="Tags (comma separated)" placeholder="web developer, video, education" />
        <x-form.button>Publish</x-form.button>
    </x-form.form>






</x-layout>
