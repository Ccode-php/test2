<x-layouts.head>
    <x-slot:title>
        Edit
    </x-slot>

    <div class="container mt-5">
        <h1>Edit</h1>
        <form action="{{route('teachers.update', $teacher->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="name" placeholder="Name" value="{{$teacher->name}}" >
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="addres" placeholder="Addres" value="{{$teacher->addres}}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$teacher->phone}}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$teacher->email}}">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" value="update">Edit</button>
                </div>
            </div>
        </form>
    </div>
    
    
</x-layouts>