<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {background: rgb(48, 48, 102);
              color: white;}
        div {background: rgb(102, 102, 132);
           border: solid 3px #000;
           padding: 1.5%;
           border-radius: 15px}
    </style>
</head>
<body>
    <h1>
        Home page [Invoke method], adding variables
    </h1>
    {{-- call column values from a table, pased into a variable --}}
    {{-- <p>{{ $pruebas->title }}</p> --}}

    {{-- call all database data and put it in text --}}
    <div>
        {{ dump($pruebas) }}
    </div>

</body>
</html>



