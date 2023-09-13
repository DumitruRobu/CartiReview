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

                <div id="editSauDelete">
                    <a href="{{route('EditBook', ['id'=> $book->id])}}"><button id="butonBook">Editeaza cartea</button></a>
                    <form action="{{route('DeleteBook', ['id'=> $book->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button id="butonBook">Sterge cartea</button>
                    </form>
                    <a href="{{ route("AddReview", ["id" => $book->id]) }}">
                        <button id="butonBook">Adauga o recenzie</button>
                    </a>
                </div>
            </div>



        </div>



        <h3>Recenzii:</h3>
        <div id="recenzieDiv">
            @foreach($reviews as $r)
                <div id="recenzie">
                    <span><b><i>"{{$r->recenzie}}"</i></b></span><br>
                    <span>semnat, <b>{{$r->semnatura}}</b></span><br>

{{--///////////////////////////////--}}
                    @can('view', auth()->user())
                    <form action="{{route('DeleteReview', ['id'=> $r->id])}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button id="deleteButton"><i class="fa-solid fa-trash"></i> Sterge recenzie</button>
                        <input type="hidden" value="{{$book->id}}" name="idulCartii">
                    </form>
                        @endcan
                </div>
            @endforeach
        </div>




    </div>

@endsection
