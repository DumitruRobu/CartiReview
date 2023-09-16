@extends("layouts.app")

@section("content")
    <div id="mainDiv">


            @foreach($carti as $c)
                <a href="{{route("ShowBook", ["id"=>$c->id])}}">
                    <div id="bookItem">
                        <img src="{{$c->imagine}}">
                        <p>{{$c->titlu}}, de {{$c->autor}} </p>

                    </div>
                </a>
            @endforeach
    </div>

{{--        <div id="pagination">--}}
{{--            {{$carti->links()}}--}}
{{--        </div>--}}

    <div id="pagination">
        {{ $carti->appends(request()->input())->links() }}
    </div>

@endsection
