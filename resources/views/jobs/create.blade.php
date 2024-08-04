<x-layout>
    <x-page-heading>Create a Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Remote"/>

        <x-forms.select label="Schedule" name="schedule">
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
            <option value="contract">Contract</option>
            <option value="freelance">Freelance</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com/jobs/ceo-wanted"/>

        <x-forms.checkbox label="Featured ($50 extra)" name="featured"/>

        <x-forms.divider/>
        
        <x-forms.input label="Tags" name="tags" placeholder="ceo, manager, boss"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
