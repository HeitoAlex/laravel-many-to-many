@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Metodo per scrivere tutti gli errori dei vari campi in una sola finestra --}}
        {{-- @if ($errors->any())
            <div class="col-8">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="col-8">
            <form action="@yield('form-action')" method="POST" enctype="multipart/form-data">
                @yield('form-method')
                @csrf

                <div class="mb-3">
                    <h2>
                        @yield('page-title')
                    </h2>
                </div>

                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control mb-2" value="{{ old('title', $project->title) }}">
                    @error("title")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <select class="form-select" name="type_id">
                        @foreach ( $types as $type )
                            <option value="{{ $type->id }}" {{ $type->id == old('type_id', $project->type_id) ? 'selected' : ''}}> {{ $type->name }} </option>
                        @endforeach
                    </select>
                    @error("type_id")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="url">Project link:</label>
                    <input type="url" name="url" id="url" class="form-control mb-2" value="{{ old('url', $project->link) }}">
                    @error("url")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control mb-2" value="{{ old('image', $project->image) }}">
                    @error("image")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control mb-2">{{ old('content', $project->content) }}</textarea>
                    @error("content")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" value="@yield('page-title')" class="btn btn-primary btn-sm">
                <input type="reset" value="Reset fields" class="btn btn-warning btn-sm">

            </form>
        </div>
    </div>
</div>
@endsection


