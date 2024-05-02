<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />
    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text" />
                    {{-- if name, value and placeholder is dynamic field, we will use :name="{{ $job->name }}", :value="{{ $job->value }}" --}}
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From" />
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <x-radio-group name="experience" :options="\App\Models\Job::$experience" />
                    {{-- <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value=""
                        @checked(!request('experience')) />
                        <span class="ml-2">All</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="entry"
                        @checked('entry'=== request('experience')) />
                        <span class="ml-2">Entry</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="intermediate"
                        @checked('intermediate'=== request('experience')) />
                        <span class="ml-2">Intermediate</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="senior"
                        @checked('senior'=== request('experience')) />
                        <span class="ml-2">Senior</span>
                    </label> --}}
                </div>
                <div>
                    <div class="mb-1 font-semibold">Category</div>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" />
                </div>
            </div>
            <button class="w-full">Filter</button>
        </form>
    </x-card>
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
