<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" 
                   class="block p-4 border border-cyan-500 rounded-xl shadow-neon hover:bg-cyan-900/20 transition">
                    <div class="font-bold text-cyan-400">{{ $job->employer->name }}</div>
                    <div>
                        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>
                <div class="mt-2">
                    @foreach($job->tags as $tag)
                        <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
