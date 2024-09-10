@props(['query' => ''])

<x-layout>
    @if ($query)
        <x-page-heading>Results for: {{ $query }} </x-page-heading>
    @else
        <x-page-heading>Results </x-page-heading>
    @endif

    <div class="mt-6 space-y-6">

        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach


    </div>

</x-layout>
