<x-layout>
<x-slot:title>
    Guest Details
    </x-slot>
    <h2>Guest Details</h2>
        <table class="table">
          <tr>
            <th>Name</th>
            <th>Discription</th>
            <th>Action</th>
          </tr>
          
          <tr>
            <td>{{$guest->name}}</td>
            <td>{{$guest->discription}}</td>
            <td><a href="/guest_list"class="btn btn-warning">Back</a>
            <a href="{{route('guest_edit',$guest->id)}}"class="btn btn-primary">Edit</a>
            <a href="{{route('guest_delete',$guest->id)}}"class="btn btn-danger">Delete</a></td>
          </tr>
          
        </table>

</x-layout>