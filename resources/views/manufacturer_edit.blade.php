<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editing manufacturer {{ $manufacturer->name }}</title>
</head>

<body>
    <h1>Editing manufacturer {{ $manufacturer->name }}</h1>
    <form method="POST"
        action={{ action([App\Http\Controllers\ManufacturerController::class, 'update'], [ 'manufacturer' => $manufacturer]) }}>
        @csrf
        @method('put')
        <label for='manufacturer_name'>Manufacturer name</label>
        <input type="text" name="manufacturer_name" id="manufacturer_name" value="{{ $manufacturer->name }}">
        <button type="submit" value="Update">Save changes</button>
    </form>
</body>

</html>
