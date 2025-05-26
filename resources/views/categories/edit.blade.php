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
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('put')
            <label for="name">Ingrese el nombre de la categoría
                <input type="text" name="nombre" id="name"
                value="{{$category->name}}">
            </label>
            <label for="description">Ingrese el autor del libro
                <input type="text" name="descripcion" id="description"
                value="{{$category->description}}"
                >
            </label>
            </label>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>