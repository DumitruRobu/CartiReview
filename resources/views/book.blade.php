@extends("layouts.app")

@section("content")
    <div id="booksInfo">
        <div id="copertaSiInfo">
            <div>
                <img src="{{$book->imagine}}">
            </div>
            <div>
                <p><b>Titlul:</b> {{$book->titlu}}</p>
                <p><b>Autor:</b> {{$book->autor}}</p>
                <p><b>Gen: </b>{{$genulCartii}}</p>
                <p><b>Descriere:</b> {{$book->descriere}}</p>
            </div>

        </div>

        <h3>Recenzii:</h3>
        <div>
            @foreach($reviews as $r)
                <br>
                <span><b><i>"{{$r->recenzie}}"</i></b></span><br>
                <span>semnat, <b>{{$r->semnatura}}</b></span><br>
                <br>
            @endforeach
        </div>


        <div id="editSauDelete">
            <button><a href="{{route('EditBook', ['id'=> $book->id])}}">Edit</a></button>
            <form action="{{route('DeleteBook', ['id'=> $book->id])}}" method="POST">
                @csrf
                @method("DELETE")
                <button>Delete</button>
            </form>
            <a href="{{ route("AddReview", ["id" => $book->id]) }}">
                <button>Add a Review</button>
            </a>
        </div>

    </div>

@endsection
