<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs'=>route('jobs.index')]"/>
    @forelse ($jobs as $job)
        {{-- First Style .//This div will be changed to be a card.This is a first code
        <div>
            {{ $job->title }}
        </div> --}}

        {{-- This is the second code style . we will use this code to make a card component --}}
        {{-- <div class="rounded-md border border-slate-300 bg-white p-4 shadow-sm mb-4">
           {{ $job->title }}
        </div> --}}

        {{-- <x-job-card class="mb-4" :job="$job"> The same style with below code --}}
        <x-job-card class="mb-4" :$job>
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    Show
                </x-link-button>
            </div>
        </x-job-card>

    @empty
        <div>There is no Job</div>
    @endforelse
</x-layout>
