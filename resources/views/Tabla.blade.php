<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-end {
            justify-content: flex-end;
        }
    </style>
    <title>Tabla de Libros</title>
</head>
<body>

<div class="container">
    <h1>Tabla de Libros</h1>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del Libro</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->autor }}</td>
                <td>{{ $item->year }}</td>
                <td>{{ $item->estado }}</td>
                <td>
                    <form action="{{ url('eliminar', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <a href="{{ url('inicio') }}" class="btn btn-primary">Agregar Libro</a>
    </div>
</div>

</body>
</html>
