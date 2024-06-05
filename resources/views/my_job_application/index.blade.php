<x-layout>
    <x-breadcrumbs class="mb-4" :links="['My Job Application' => '#']" />

        @forelse ($applications as $application )
            <x-job-card :job="$application->job">

            </x-job-card>
        @empty
            There is no Job Application
        @endforelse
</x-layout>
