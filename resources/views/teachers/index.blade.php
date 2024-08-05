<x-layouts.head>
    <x-slot:title>
        Indexs
    </x-slot>

    <div class="container mt-5">
        <a href="{{ route('teachers.create') }}" type="button" class="btn btn-primary">Create</a>
    </div>

    <div class="container mt-4">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Addres</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Buttons</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <th scope="row">{{ $teacher->id }}</th>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->addres }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td class="inline-block">
                            <a href="{{ route('teachers.show', $teacher->id) }}" type="button"
                                class="btn btn-primary">View</a>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" type="button"
                                class="btn btn-info">Edit</a>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('aniqba!!!')">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    </x-layouts>
