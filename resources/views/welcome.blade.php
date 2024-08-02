<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-black/5 border-black/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>FEATURED JOBS</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>TAGS</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
                <x-tag>TAG</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>RECENT JOBS</x-section-heading>

            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>