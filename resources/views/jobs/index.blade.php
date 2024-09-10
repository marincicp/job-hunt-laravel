<x-layout>
    <div class="space-y-10">
        <section class="text-center ">
            <h1 class="font-bold text-4xl pb-4">Let's Find Your Next Job</h1>
            {{-- <form>
                <input placeholder="Web developer..." type="text"
                    class="rounded-xl bg-white/5 px-5 py-4 border border-white/20 w-full max-w-xl" />
            </form> --}}


            <x-form.form action="/search">

                <x-form.input :label="false" name="q" placeholder="Web developer..." />

            </x-form.form>

        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>


        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">

                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">

                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach

            </div>

        </section>

    </div>
</x-layout>
