@extends("layouts.app")

@section('head')
    <title>Main page :: {{config('app.name', 'LS APP')}}</title>
@endsection

@section('content')
    <h1>Main page :: {{config('app.name', 'LS APP')}}</h1>
    <h4>
        <i class="fas fa-warning"></i>
    </h4>
    <p>{{$title}}</p>
@endsection
