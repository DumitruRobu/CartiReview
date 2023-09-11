@extends("layouts.app")

@section("content")
    <form id="createForm" action="{{route('UpdateBook', ["id"=>$carteaDeEditat->id])}}" method="POST">
        @csrf
        @method("PATCH")
        <input value="{{ $carteaDeEditat->titlu}}" type="text" name="titlu" placeholder="Titlul cartii">
        @error('titlu')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <input value="{{ $carteaDeEditat->autor}}" type="text" name="autor" placeholder="Autorul cartii">
        @error('autor')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <textarea name="descriere" placeholder="Descrierea cartii">{{ $carteaDeEditat->descriere}}</textarea>
        @error('descriere')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <select name="gen_id">
            @foreach ($toateGenurile as $t)
                <option {{$t->gen == $genulCartii ? "selected": ""}} value="{{ $t->id }}">{{ $t->gen }}</option>
            @endforeach
        </select>
        @error('gen_id')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <input value="{{$carteaDeEditat->imagine}}" type="text" name="imagine" placeholder="Imagine">
        @error('imagine')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <button>Edit</button>
    </form>
@endsection
