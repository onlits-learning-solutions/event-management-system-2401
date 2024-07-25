
<x-layout>
    <x-slot:title>
        Guest List   
        </x-slot>
        <div class="alert alert-light">
            <a href="/create_guest">Create a new Guest list</a>
        </div>
        <div class="container">
            <h2>All guest Lists</h2>
            <div class="row">
            @foreach($guests as $guest)
                <div class="col-2">
                    <div class="card"style="hight: 18rem;">
                        <div class="card-body">
                             {{$guest->discription}}
                        </div>
                        <div class="card-footer">
                            {{$guest->name}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                
                    
               
            
        </div>
</x-layout>