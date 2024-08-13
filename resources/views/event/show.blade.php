<x-layout>
    <x-slot:title>
        Create a new Event
        </x-slot>
        <div>
            <h3>{{ $event->name }}</h3>
            <p>{{ $event->date }}</p>
            <a href="/events" class="btn btn-warning">Back</a>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </div>
</x-layout>