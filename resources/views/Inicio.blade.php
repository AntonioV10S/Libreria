<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Libro</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
   <div>
     <form action= "{{url('guardar')}}" method = 'post'>
        @csrf
        <label for="nombre">Nombre del Libro:</label>
        <input type="text" id="nombre" name="name" required>

        <label for="year">Año:</label>
        <input type="number" id="year" name="year" required>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="author" required>

        <button type="submit">Guardar</button>
    </form>
    <form action="{{url('mostrar')}}" method = 'get'>
        @csrf
        <button type="submit">Mostrar</button>
    </form>
   </div>


</body>
</html>
