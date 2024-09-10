@props(['job'])

<x-panel class="flex flex-col text-center">

    <a href="#" class="self-start">{{ $job->employer->name }}</a>

    <div class="flex flex-col items-center gap-2 py-4">

        <p class="text-white/80 text-sm mt-3">Full Time - From {{ $job->salary }}</p>
        <a target="_blank" href="{{ $job->url }}">
            <h3 class="text-2xl font-bold group-hover:text-blue-600 transition duration-200">{{ $job->title }}</h3>
        </a>
    </div>

    <div class="flex mt-auto items-end justify-between">
        <div class="flex gap-2">


            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach


        </div>
        <div>

            <x-employer-logo logo="{{ $job->employer->logo }}" width="42" />
        </div>
    </div>
</x-panel>
