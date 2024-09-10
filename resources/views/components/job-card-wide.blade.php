@props(['job'])

<x-panel class="flex gap-6">

    <div>
        <x-employer-logo logo="{{ $job->employer->logo }}" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="">{{ $job->employer->name }}}</a>
        <a target="_blank" href="{{ $job->url }}">
            <h3 class="text-xl font-bold mt-1  group-hover:text-blue-600 transition duration-200">{{ $job->title }}
            </h3>
        </a>
        <p class="text-white/80  mt-auto">Full Time - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
