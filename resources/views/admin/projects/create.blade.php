@extends('admin.projects.layout.create-or-edit');

@section('page-title')
    Create new project
@endsection

@section('form-action')
    {{ route('admin.projects.store') }}
@endsection

@section('form-method')
    @method('POST')
@endsection
