<x-layout>
    <x-slot:title>
        Create a new Event
        </x-slot>
        <div class="alert alert-light">
            <a href="/events/create">Create a new event</a>
        </div>
        <h3>Event Home</h3>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Type</th>
                <th>Organiser</th>
                <th>Actions</th>
            </tr>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->type }}</td>
                <td>{{ $event->organiser }}</td>
                <td>
                    <a href="/events/show/{{ $event->id }}" class="btn btn-primary">Details</a>
                </td>
            </tr>
            @endforeach
        </table>
</x-layout>