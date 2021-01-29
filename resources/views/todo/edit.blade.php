@extends('layouts.app')  
@section('content')  
<center><h1>Edit</h1></center>
    <form method="Post" action="{{route('todo.update',$todo->id)}}">
    @method('PATCH')     
  
    @csrf     
        <div class="form-group">
            <label for="Title">Title:</label>
            <input type="text" class="form-control" name="title" value={{$todo->title}}>
        </div>

        <div class="form-group">
            <label for="Description">Description:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" >{{$todo->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" name="location" value="{{$todo->location}}">
        </div>
        
        <div class="form-group">
            <label for="Title">Time:</label>
            <input type="text" class="form-control"  value="{{$todo->time}}" name="time">
        </div>

    <button type="submit" class="btn btn-primary " >Update</button>  
    </form>  
  
  
@endsection  
