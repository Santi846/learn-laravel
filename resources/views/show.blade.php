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
           background: rgb(102, 102, 132);
           border: solid 3px #000;
           padding: 1.5%;
           border-radius: 15px;
           text-align: left
        }
    </style>
    <title>Show</title>
</head>
<body>
    <h1>Todo por id, que denso</h1>
    <h2>{{ $pruebas->title }}</h2>
    <p>{{ $pruebas->id }}</p>
    <div>
        {{ $pruebas->image_path }}
    </div>
    <p>{{ $pruebas->body }}</p>
    <p>{{ $pruebas->expert }}</p>
    <p>{{ $pruebas->min_to_read }}</p>
    
    
</body>
</html>

