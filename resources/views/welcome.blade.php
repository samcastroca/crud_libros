<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="{{ route('books.store') }}" method="post">
            @csrf
            <label for="title">Ingrese el título del libro
                <input type="text" name="titulo" id="title">
            </label>
            <label for="author">Ingrese el autor del libro
                <input type="text" name="autor" id="author">
            </label>
            <label for="price">Ingrese el precio del libro
                <input type="number" name="precio" id="price">
            </label>
            <label for="category_id">Ingrese la categoría del libro
                <input type="number" name="categoria" id="category_id">
            </label>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->category_id}}</td>
                    <td>
                        <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning">Editar</a>
                        <form action="{{route('books.destroy',$book->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <a href="{{route('categories.index')}}" class="btn btn-dark m-5">Categorías</a>
        <button class="btn btn-success" onclick="mostrarMensaje()">Mostrar Mensaje</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/validacion.js') }}"></script>
</body>

</html>