<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <button><a class="colorLink" href="{{ route('admin.portfolios.create') }}">Aggiungi Portfolio</a></button>


    @foreach ($portfolios as $portfolios_item)
        <h1>{{ $portfolios_item->title }}</h1>
        <p>{{ $portfolios_item->description }}</p>
        <p>{{ $portfolios_item->type->title }}</p>
        <img src="{{ $portfolios_item->thumb }}" alt="">
        <button> <a href="{{ route('admin.portfolios.edit', $portfolios_item['id']) }}">MODIFICA</a></button>
        <form action="{{ route('admin.portfolios.destroy', $portfolios_item['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Elimina">
        </form>
    @endforeach
</body>


</html>
