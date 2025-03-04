<x-layout>
<x-page-heading>New Job</x-page-heading>

<x-forms.form method="POST" action="jobs">

    <x-forms.input label="Title" name="title" placeholder="CEO" />
    <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
    <x-forms.input label="Location" name="location" placeholder="Addis Ababa ,Ethiopia" />

    <x-forms.select label="Schedule" name="schedule">
<option>Part Time</option>
<option>Full Time</option>
    </x-forms.select>

    <x-forms.input label="URL" name="url" placeholder="http://abc.com/jobs/ceo-wanted" />

    <x-forms.checkbox label="Feature (Cost Extra)" name="featured"/>
    <x-forms.divider/>
    
    <x-forms.input label="Tags(comma separated)" name="tags" placeholder="CEO, Ethiopia, Education" />


    <x-forms.button>Post</x-forms.button>

</x-forms.form>

</x-layout>
