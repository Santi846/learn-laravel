<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
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
        h3 {
           color: rgb(0, 0, 0);

        }
    </style>
</head>
<body>
    <h1>
        Home Page
    </h1>
    <h2>
        Getting data
    </h2>
    {{-- call column values from a table, pased into a variable --}}
    {{-- <p>{{ $pruebas->title }}</p> --}}

    {{-- call all database data and put it in text --}}
    {{-- <div>
        {{ dump($pruebas) }}
    </div> --}}

    {{-- Blade conditional statement --}}
        {{-- @if (count($pruebas) > 100)
            <div>
                {{ dd($pruebas) }}
            </div>

        @elseif (count($pruebas) === 110)
            <div>
                You have exactly 110 tables in your database
            </div>

        @else 
            <div>
                Sorry, there is no data from database that match your request, can you change it?
            </div>
        @endif --}}
    
    {{-- Opposite conditional --}}
    {{-- @unless ($pruebas)
        <div>
            Pruebas couldn't be added correctly
        </div>
    @endunless --}}

    {{-- Call pruebas title column --}}
    {{-- @forelse ( $pruebas as $prueba)
        {{ $prueba->title }}
    @empty
        <p>No pruebas has been set</p>
    @endforelse --}}

    {{-- call called array index --}}
    {{-- @forelse ($pruebas as $prueba)
        {{ $loop->index }}
    @empty
        <p>No pruebas has been set</p>
    @endforelse --}}
    
    {{-- call called array id teration --}}
    {{-- @forelse ($pruebas as $prueba)
        {{ $loop->iteration }}
    @empty
        <p>No pruebas has been set</p>
    @endforelse --}}

    {{-- call called array index in reverse --}}
    {{-- @forelse ($pruebas as $prueba)
        {{ $loop->remaining }}
    @empty
        <p>No pruebas has been set</p>
    @endforelse --}}

    {{-- call boolean value of the first array element --}}
    {{-- @forelse ($pruebas as $prueba)
        {{ $loop->first }}
    @empty
        <p>No pruebas has been set</p>
    @endforelse --}}

    {{-- call boolean value of the last array element --}}
    {{-- @forelse ($pruebas as $prueba)
        {{ $loop->last }}
    @empty
        <p>No pruebas has been set</p>
    @endforelse --}}

    {{-- call boolean value of how many array elements are being used --}}
    {{-- @forelse ($pruebas as $prueba)
        {{ $loop->depth }}
    @empty
        <p>No pruebas has been set</p>
    @endforelse --}}
    
    <div class="new_article">
        <a href="{{ route('create') }}">Add a new article</a>
    </div>
    <br>
    @foreach ($pruebas as $prueba)
    <br>
    <div>
        <a href="{{ route('show', $prueba->id)}}"> {{ $prueba->title }} </a>
        <p>{{ $prueba->body }}</p>
    </div>
    @endforeach
</body>
</html>



