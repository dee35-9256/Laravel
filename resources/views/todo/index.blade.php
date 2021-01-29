@extends('layouts.app')  
@section('content')  
<br>
<center><h1>Todo List</h1></center><hr>
        <form action="{{ route('todo.create')}}" method="GET">  
            @csrf  
                <button class="btn btn-primary" type="submit">create</button>  
        </form>  

<table class="table table-bordered">  
    <thead>  
       
        <tr>  
            <td>ID </td> 
            <td>TITLE </td>  
            <td>DESCRIPTION </td>  
            <td>LOCATION</td>  
            <td>TIME</td>  
        </tr>  
    </thead>  
    <tbody>  
        @foreach($todos as $todo)  
            <tr border="none">  
                <td>{{$todo->id}}</td>  
                <td>{{$todo->title}}</td>  
                <td>{{$todo->description}}</td>  
                <td>{{$todo->location}}</td>  
                <td>{{$todo->time}}</td>  
                <td>  
                    <form action="{{ route('todo.destroy', $todo->id)}}" method="post">  
                    @csrf  
                        @method('DELETE')  
                        <button class="btn btn-danger" type="submit">Delete</button>  
                    </form>  
                </td>  
                <td >  
                <form action="{{ route('todo.edit', $todo->id)}}" method="GET">  
                      @csrf  
                    <button class="btn btn-danger" type="submit">Edit</button>  
                </form>  
                </td>
            </tr>  
        @endforeach  
    </tbody>  
</table>  
@endsection  
