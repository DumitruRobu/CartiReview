@extends("layouts.app")

@section("content")
    <div id="mainDivVizualizamCereriAdaugare">



            @foreach($carti as $c)

                    <div id="booksToAddDiv" >
                        <div>
                            <img src="{{$c->imagine}}">
                        </div>

                        <div id="detaliiCerereAdaugare">

                            <p><b>Titlu:</b> {{$c->titlu}}</p>
                            <p><b>Autor:</b> {{$c->autor}}</p>
                            <p><b>Gen:</b> {{$c->genre->gen}}</p>

                            <p><b>Info:</b> {{$c->descriere}} </p>

                            <form action="{{route('StoreRequestedBook')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$c->id}}" name="id">
                                <input type="hidden" value="{{$c->titlu}}" name="titlu">
                                <input type="hidden" value="{{$c->autor}}" name="autor">
                                <input type="hidden" value="{{$c->gen_id}}" name='gen_id'>
                                <input type="hidden" value="{{$c->descriere}}" name='descriere'>
                                <input type="hidden" value="{{$c->imagine}}" name='imagine'>
                                <button>Adauga Carte</button>
                            </form>

                            <form action="{{route('DeleteRequest', ['id'=> $c->id])}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button id="stergeCerereButon">Sterge cerere</button>
                            </form>
                        </div>
                    </div>
            @endforeach
    </div>


    <div id="pagination">
        {{ $carti->appends(request()->input())->links() }}
    </div>

@endsection
