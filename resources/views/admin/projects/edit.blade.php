@extends('admin.projects.layout.create-or-edit');

@section('page-title')
    Edit {{ $project->title }}
@endsection

@section('form-action')
    {{ route('admin.projects.update', $project) }}
@endsection

@section('form-method')
    @method('PUT')
@endsection
