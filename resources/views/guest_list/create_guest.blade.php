<x-layout>
    <x-slot:title>
        Dashboard
        </x-slot>
        <div class="container ">
            
            <div class="row justify-content-center mt-5">
                <div class="col-6 border border-5">
                <h1>Guest list</h1>
                    <form action="{{route('store.guest')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Discription</label>
                            <textarea name="discription" id="" class="form-control"> </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary m-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
</x-layout>