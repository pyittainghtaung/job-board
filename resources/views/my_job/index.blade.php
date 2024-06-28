<x-layout>
    <x-breadcrumbs :links="['My Jobs' => '#']" class="mb-4" />
    <div class="mb-8 text-right">
        <x-link-button href="{{ route('my-jobs.create') }}">Add New</x-link-button>
    </div>
    @forelse ($jobs as $job)
        <x-job-card :$job>
            <div class="text-xs text-slate-500">
                @forelse ($job->jobApplications as $application)
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <div>
                        </div>
                        <div>Right</div>
                    </div>
                @empty
                    <div>No Applications Yet</div>
                @endforelse
            </div>
        </x-job-card>
    @empty
        No Jobs
    @endforelse
</x-layout>
