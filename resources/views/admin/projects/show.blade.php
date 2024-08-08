@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <span>
                {{ $project->id }}
            </span>
            <h1>
                {{ $project->title }}
            </h1>
            @if ($project->type)
                <h4 class="d-inline-block p-2 rounded" style="background: {{ $project->type->color }}">
                    {{ $project->type->name }}
                </h4>
            @endif
            <h2>
                {{ $project->author }}
            </h2>
            <h3>
                {{ $project->date }}
            </h3>
            <h4>
                {{ $project->link }}
            </h4>
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }} project image" class="img-fluid">
            <p>
                {{ $project->content }}
            </p>
        </div>
    </div>
</div>
@endsection

