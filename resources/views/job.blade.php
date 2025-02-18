<x-first-component>
    <x-slot:heading>
        Bonjour Job
    </x-slot:heading>

    <h1> Bonjour je test </h1>

    @foreach($jobs as $job)
        <li>{{ $job['title']}} : {{ $job['salary'] }}</li>
    @endforeach
</x-first-component>
