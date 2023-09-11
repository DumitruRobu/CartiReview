@extends("layouts.app")

@section("content")
    <div id="booksInfo">
        <img src="{{$book->imagine}}">
        <p>Titlul: {{$book->titlu}}</p>
        <p>Autor: {{$book->autor}}</p>
        <p>Gen: {{$genulCartii}}</p>
        <p>Descriere: {{$book->descriere}}</p>

        <button><a href="{{route('EditBook', ['id'=> $book->id])}}">Edit</a></button>
        <form action="{{route('DeleteBook', ['id'=> $book->id])}}" method="POST">
            @csrf
            @method("DELETE")
            <button>Delete</button>
        </form>


    </div>

@endsection
