@extends('layouts.admin')

@section('content')

    <h1>{{$project->title}}</h1>
    <p>{{$project->content}}</p>
    <p>Slug: {{$project->slug}}</p>
    @if($project->type)
        <p>Tipologia: {{ $project->type->name }}</p>
        @if($project->technologies->count())
        <h3>Tecnologie Utilizzate:</h3>
        <ul>
            @foreach($project->technologies as $technology)
                <li>{{ $technology->name }}</li>
            @endforeach
        </ul>
    @endif

    @endif


@endsection