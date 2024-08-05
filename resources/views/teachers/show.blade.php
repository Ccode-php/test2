<x-layouts.head>
    <x-slot:title>
        Show
    </x-slot:title>

    <div class="container mt-4">
      <h1>Show</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Addres</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Status</th>
                  <th scope="col">Created_at</th>
                </tr>
              </thead>
              <tbody>
                 <tr>
                  <th scope="row">{{$teacher->id}}</th>
                  <td>{{$teacher->name}}</td>
                  <td>{{$teacher->addres}}</td>
                  <td>{{$teacher->phone}}</td>
                  <td>{{$teacher->email}}</td>
                  <td>{{$teacher->status}}</td>
                  <td>{{$teacher->created_at}}</td>
                </tr>   
               </tbody>
        </table>
    </div>


</x-layouts>