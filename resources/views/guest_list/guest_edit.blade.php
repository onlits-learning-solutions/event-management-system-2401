<x-layout>
    <x-slot:title>
    Guest Edit
    </x-slot>

    <form action="{{route('guest_update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$guest->id}}">
                        <div class="form-group">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" value="{{$guest->name}}" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="discription" id="" class="form-control mb-3">{{$guest->discription}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary ">Update</button>
    </form>
</x-layout>