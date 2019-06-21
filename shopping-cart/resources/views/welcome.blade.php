@extends('layout')

@section('content')
<div>
    <h1>Welcome home {{$title}}</h1>
</div>
<div>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>
@endsection