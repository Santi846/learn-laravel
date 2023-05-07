<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
              background: rgb(48, 48, 102);
              color: white;
              font-family: Arial, Helvetica, sans-serif;
              text-align: center;
            }
        div {
           /* background: rgb(102, 102, 132); */
           border: solid 3px #000;
           padding: 1.5%;
           border-radius: 15px;
           text-align: left
        }
        a{
            color: azure;
        }
    </style>
    <title>Show</title>
</head>
<body>
    <h1>Todo por id, que denso</h1>
    <h2>Articulo: {{ $pruebas->title }}</h2>
    <p>Id: {{ $pruebas->id }}</p>
    <div>
        <p>Image Location</p>
        {{ $pruebas->image_path }}
    </div>
    <p>Description: {{ $pruebas->body }}</p>
    <p>Experis: {{ $pruebas->expert }}</p>
    <p>Tiempo de lectura: {{ $pruebas->min_to_read }}</p>
    <div>
        {{ $comments->comments }}
    </div>
    
</body>
</html>

