@props(['job'])

<x-panel class="flex flex-row gap-6">
    <x-employer-logo/>

    <div class="flex flex-col flex-grow h-28">
        <a href="#" class="text-sm text-white/50">{{$job->employer->name}}</a>
        <div class=" flex flex-col justify-between flex-grow">
            <h3 class="text-xl font-bold mt-2 group-hover:text-blue-600 transition-colors duration-200">
                {{$job->title}}</h3>
            <p class="text-white/50 text-sm">{{$job->schedule}} - {{$job->salary}}</p>
        </div>
    </div>
    <div class="flex flex-row justify-between gap-2 items-center mt-auto">
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>
