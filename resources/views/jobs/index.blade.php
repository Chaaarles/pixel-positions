<x-layout>
    <div class="space-y-10 pb-10">
        <!-- Hero Search -->
        <section class="text-center space-y-10 pt-6">
            <h1 class="text-4xl font-semibold">Let's find your next job!</h1>
            <x-forms.form action="/search">
                <x-forms.input type="text" name="q" :label="false" placeholder="Web Developer..."
                               class="bg-white/5 px-5 py-4 rounded-xl border border-white/10 w-full max-w-xl"/>
            </x-forms.form>
        </section>

        <!-- Top Jobs -->
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-top-job :job="$job"/>
                @endforeach
            </div>
        </section>

        <!-- Tags -->
        <section class="space-y-6">
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-row gap-2">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <!-- Recent Jobs -->
        <section class="space-y-10">
            <x-section-heading>Recent Jobs</x-section-heading>
            @foreach($jobs as $job)
                <x-wide-job :job="$job"/>
            @endforeach
        </section>
    </div>
</x-layout>
