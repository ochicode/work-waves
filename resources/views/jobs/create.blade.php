<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Director" />
        <x-forms.input label="Salary" name="salary" placeholder="Ksh900,000" />
        <x-forms.input label="Location" name="location" placeholder="Nairobi, Kenya" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com/jobs/director-position" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="latest,tech,business" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>