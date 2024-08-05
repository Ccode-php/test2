<x-layouts.head>
    <x-slot:title>
        Create
    </x-slot>

    <div class="container mt-5">
        
        <h1>Created</h1>
        <form action="{{route('teachers.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="name" placeholder="Name" >
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="addres" placeholder="Addres">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" value="save">craete</button>
                </div>
            </div>
        </form>
    </div>
   
   
</x-layouts>