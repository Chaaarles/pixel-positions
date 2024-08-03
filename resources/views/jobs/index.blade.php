<x-layout>
    <div class="space-y-10 pb-10">
        <!-- Hero Search -->
        <section class="text-center space-y-10 pt-6">
            <h1 class="text-4xl font-semibold">Let's find your next job!</h1>
            <form>
                <input type="text" placeholder="Web Developer..."
                       class="bg-white/5 px-5 py-4 rounded-xl border border-white/10 w-full max-w-xl">
            </form>
        </section>

        <!-- Top Jobs -->
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-top-job/>
                <x-top-job/>
                <x-top-job/>
            </div>
        </section>

        <!-- Tags -->
        <section class="space-y-6">
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-row gap-2">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
            <div class="flex flex-row gap-2">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <!-- Recent Jobs -->
        <section class="space-y-10">
            <x-section-heading>Recent Jobs</x-section-heading>
            <x-wide-job></x-wide-job>
            <x-wide-job></x-wide-job>
            <x-wide-job></x-wide-job>
        </section>
    </div>
</x-layout>
