<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services :: {{config('app.name', 'LS APP')}}</title>

</head>
<body>
<h1>Services :: {{config('app.name', 'LS APP')}}</h1>
@if(count($data) > 1)
    @foreach($data as $d)
        <p>{{$d}}</p>
    @endforeach
@endif
</body>
</html>
