<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <title>index</title>
</head>
<body>
    <div class="container mt-5">
        <a href="{{ URL::route('categorie.create') }}" class="btn btn-success"><i class="bi bi-plus-circle"></i> Add category </a>
        <br><br>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $categories as $categorie)
                <tr>
                    <td>{{$categorie->name}}</td>
                    <td>{{$categorie->description}}</td>
                    <td>
                        <a href="{{ URL::route('categorie.edit',['categorie'=> $categorie]) }}" class="btn btn-primary mb-3"><i class="bi bi-pencil-square"></i>  Edit  </a>
                        <form action="{{ URL::route('categorie.destroy',['categorie'=> $categorie]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-x-lg"></i> Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
