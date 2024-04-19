<x-layout>
    @forelse ($jobs as $job)
        <div>
            {{ $job->title }}
        </div>
    @empty
        <div>There is no Job</div>
    @endforelse
</x-layout>
