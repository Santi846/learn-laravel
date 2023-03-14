<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        body {
              background: rgb(48, 48, 102);
              color: white;
              font-family: Arial, Helvetica, sans-serif;
            }
        input, textarea {
            border:solid #000;
            border-radius: 5px;
            margin-bottom: 1%;
        }
        .errors {
            justify-content: center;
            background: rgb(201, 0, 0);
            height: 105px;
            width: 500px;
            color: whitesmoke;
            margin-bottom: 20px;
            border-radius: 5px;
             
        }
        .errors_list {
            padding: 5px;
            color: rgb(193, 62, 55);
            background: rgb(255, 255, 255);
            border-radius: 5px;
            list-style-type: none;
        }
    </style>
</head>
<body>
<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            Edit article: {{ $pruebas->title }}
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

<div class="m-auto pt-20">
    <div class="pb-8">
        @if ($errors->any())
            <div class='errors'>Something went wrong
                <ul class="errors_list">
                    @foreach ( $errors->all() as $error )
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
            
        @endif
    </div>
    <form
        action="{{ route('update', $pruebas->id) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <label for="is_published" class="text-gray-500 text-2xl">
            Is Published
        </label>
        <input
            type="checkbox"
            {{ $pruebas->is_published === true ? 'checked' : '' }}
            class="bg-transparent border-b-2 inline text-2xl outline-none"
            name="is_published">
        <br>
        <input
            type="text"
            name="title"
            value='{{ $pruebas->title }}'
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        <br>
        <input
            type="text"
            name="expert"
            value='{{ $pruebas->expert }}'
            placeholder="Expert..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        <br>
        <input
            type="number"
            name="min_to_read"
            value='{{ $pruebas->min_to_read }}'
            placeholder="Minutes to read..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        <br>
        <textarea
            name="body"
            placeholder="Body..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $pruebas->body }}</textarea>
            
        <div class="bg-grey-lighter py-10">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                <input
                    type="file"
                    name="image_path"
                    class="hidden">
            </label>
        </div>

        <button
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>
</body>
</html>