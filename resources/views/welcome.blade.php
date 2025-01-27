<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="font-sans bg-gray-100 py-20">

        <div class="max-w-lg bg-white mx-auto p-5 rounded-xl shadow">

            @if ($errors->any())
                <div class="max-w-lg bg-red-200 mx-auto my-3 p-3 rounded-xl shadow text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="tags" method="POST" class="flex mb-4">
                @csrf
                <input type="text" name="name" id="name" class=" rounded-l-lg bg-gray-200 p-4 w-full" placeholder="Nueva etiqueta">
                <button type="submit" class="rounded-r-lg px-8 bg-blue-500 text-white outline-none">Guardar</button>
            </form>

            <h4 class="text-lg text-center mb-4">Listado de Etiquetas</h4>

            <table class="w-full">
                <thead>
                    <tr class=" border-b border-slate-400">
                        <th class="text-center px-4 py-2">Nombre</th>
                        <th class="text-center px-4 py-2">Slug</th>
                        <th class="text-center px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                @forelse ($tags as $tag)
                    <tr class="border-y border-slate-400">
                        <td class="text-center px-4 py-2">{{ $tag->name }}</td>
                        <td class="text-center px-4 py-2">{{ $tag->slug }}</td>
                        <td class="text-center px-4 py-2">
                            <form action="tags/{{$tag->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 rounded-lg bg-red-400 text-white">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay etiquetas</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </body>
</html>
