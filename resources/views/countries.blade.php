<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries</title>
</head>

<body>
    <h1>Pick a country you like</h1>
    @if (count($countries) == 0)
        <p color='red'> There are no records in the database!</p>
    @else
        <ul>

            @foreach ($countries as $country)
                <li>
                    {{ $country->code }} -
                    <a href="{{ action([App\Http\Controllers\ManufacturerController::class, 'index'],['countryslug' => $country->code])}}">{{ $country->name }}</a>
                    <form method="POST"
                        action={{ action([App\Http\Controllers\CountryController::class, 'destroy'], $country->id) }}>
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="delete">Delete</button>
                    </form>
                </li>
            @endforeach

        </ul>
    @endif
</body>

</html>
