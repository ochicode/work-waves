<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">EMPLOYER NAME</div>

    <div class="py-8">
        <h3 class="group-hover:text-dodger-blue-600 text-xl font-bold transition-all duration-300">JOB NAME</h3>
        <p class="text-sm mt-4">SALARY</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">API</x-tag>
        </div>

        <x-employer-logo :width="42"/>
    </div>
</x-panel>