@extends('layouts.app')

@section('title', 'Todo-insert')

@section('content')
    <center><h1>Todo </h1>
    </center><hr>
    <form method="POST" action="{{ route('todo.store') }}">
        @csrf
        <div class="form-group">
            <label for="Title">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="title" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="Description">Description:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" placeholder="Location" name="location">
                @error('location')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="form-group">
            <label for="Title">Time:</label>
            <input type="text" class="form-control @error('time') is-invalid @enderror"  value="{{date('h:i:s')}}" name="time">
                @error('time')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <input type="submit" class="btn btn-primary">

    </form>
@endsection
