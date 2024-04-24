<x-layout>
    @forelse ($jobs as $job)
        {{-- First Style .//This div will be changed to be a card.This is a first code
        <div>
            {{ $job->title }}
        </div> --}}

        {{-- This is the second code style . we will use this code to make a card component --}}
        {{-- <div class="rounded-md border border-slate-300 bg-white p-4 shadow-sm mb-4">
           {{ $job->title }}
        </div> --}}

        <x-card class="mb-4">
            <div class="flex justify-between border mb-4">
                <h2 class="text-lg font-medium">
                    {{ $job->title }}
                </h2>
                <div class="text-slate-500">
                    ${{ number_format($job->salary) }}
                </div>
            </div>
            <div class="mb-4 flex justify-between text-sm text-slate-500 items-center border">
                <div class="flex space-x-4">
                    <div>Company Name</div>
                    <div>{{ $job->location }}</div>
                </div>

                <div class="flex space-x-1 text-xs">
                    <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
                    <x-tag>{{ $job->category }}</x-tag>
                </div>
            </div>
            <p class="text-sm text-slate-500">
                {!! nl2br(e($job->description)) !!}
            </p>
        </x-card>

    @empty
        <div>There is no Job</div>
    @endforelse
</x-layout>
