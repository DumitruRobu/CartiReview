@extends("layouts.app")

@section("content")
    <form id="createForm" action="{{route('InregistramSolicitarea')}}" method="POST">
        @csrf
        <input value="{{ old('titlu') }}" type="text" name="titlu" placeholder="Titlul cartii">
        @error('titlu')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <input value="{{ old('autor') }}" type="text" name="autor" placeholder="Autorul cartii">
        @error('autor')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

    <!-- Correct the placeholder and formatting of the <textarea> element -->
        <textarea name="descriere" placeholder="Descrierea cartii (Editura, Pagini, Anul Publicarii)">{!! old('descriere') !!}</textarea>
        @error('descriere')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <select name="gen_id">
            @foreach ($toateGenurile as $t)
                <option value="{{ $t->id }}">{{ $t->gen }}</option>
            @endforeach
        </select>
        @error('gen_id')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <input value="{{ old('imagine') }}" type="text" name="imagine" placeholder="Imagine">
        @error('imagine')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror

        <button>Solicită Adăugarea</button>
    </form>
@endsection
