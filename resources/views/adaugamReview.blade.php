@extends("layouts.app")

@section("content")
    <form id="createForm" action="{{route('StoreReview')}}" method="POST">
        @csrf
        <textarea name="recenzie" placeholder="Recenzie">{!! old('recenzie') !!}</textarea>
        @error('recenzie')
        <p class="text-bg-danger">*{{ $message }}</p>
        @enderror
        <input type="hidden" value="{{$cartea->id}}" name="idulCartii">
        <button>Adauga review</button>
    </form>
@endsection
