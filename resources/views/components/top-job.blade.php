@props(['job'])

<x-panel
    class="flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-200">{{$job->title}}</h3>
        <p class="text-sm mt-6">{{$job->schedule}} - {{$job->salary}}</p></div>
    <div class="flex flex-row justify-between items-center mt-auto">
        <div class="flex flex-row gap-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>

        <x-employer-logo :width="42"/>
    </div>
</x-panel>
