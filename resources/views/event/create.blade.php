<x-layout>
    <x-slot:title>
        Create a new Event
        </x-slot>
        <h3>Create a new event</h3>
        <form action="/events" method="post" class="form">
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control mb-3">
            <label for="organiser" class="form-label">Organiser</label>
            <input type="text" name="organiser" id="organiser" class="form-control mb-3">
            <button class="btn btn-primary">Submit</button>
        </form>
</x-layout>