@extends("layouts.app")

@section('head')
    <title>About :: {{config('app.name', 'LS APP')}}</title>
    {!! $a !!} @{{$second}}
@endsection

@section('content')
    <h1>About :: {{config('app.name', 'LS APP')}}</h1>
@endsection
