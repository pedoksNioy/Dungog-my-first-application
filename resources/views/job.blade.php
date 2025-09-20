<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <div class="p-6 border border-cyan-500 rounded-xl shadow-neon">
        <h2 class="font-bold text-2xl text-cyan-400">{{ $job['title'] }}</h2>
        <p class="mt-2 text-cyan-300">
            This job pays {{ $job['salary'] }} per year.
        </p>
    </div>
</x-layout>
