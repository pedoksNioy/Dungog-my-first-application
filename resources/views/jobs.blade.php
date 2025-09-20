<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" 
                   class="block p-4 border border-cyan-500 rounded-xl shadow-neon hover:bg-cyan-900/20 transition">
                    <strong class="text-cyan-400">{{ $job['title'] }}:</strong> 
                    Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
