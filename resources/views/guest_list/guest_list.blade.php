<x-layout>
  <x-slot:title>
    Guest List
    </x-slot>
    <div class="alert alert-light">
      <a href="/create_guest">Create a new Guest list</a>
    </div>

      <h2>All guest Lists</h2>
        <table class="table">
          <tr>
            <th>name</th>
            <th>discription</th>
          </tr>
          @foreach($guests as $guest)
          <tr>
            <td>{{$guest->name}}</td>
            <td>{{$guest->discription}}</td>
            <td><a href="{{route('guest_details',$guest->id)}}"class="btn btn-primary">Details</a></td>
          </tr>
          @endforeach
        </table>
 
</x-layout>