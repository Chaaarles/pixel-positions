<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <section class="space-y-10">
        @foreach($jobs as $job)
            <x-wide-job :job="$job"/>
        @endforeach
    </section>
</x-layout>
