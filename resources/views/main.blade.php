@extends("layouts.app")

@section("content")
    <div id="container">
        <p>Welcome to our online book review website. You can
        view all the book reviews <a href="{{route('ShowBooks')}}"> here</a>.
        Please <a href="/register"> register </a> or <a href="/login"> log in </a>
        if you want to leave your personal review!<br>
        </p>

        <div class="gallery">
            <div id="prima" class="imgg"> <img src="https://images.unsplash.com/photo-1599056377758-4808a7e70337?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2066&q=80"> </div>
            <div id="doi" class="imgg"><img src="https://images.unsplash.com/photo-1588849928440-82469846c855?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1854&q=80"></div>
            <div id="trei" class="imgg"><img src="https://images.unsplash.com/photo-1536962693597-9dabf89e2161?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"></div>
            <div id="patru" class="imgg"><img src="https://images.unsplash.com/photo-1481047540402-8f3d39289bca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1776&q=80"></div>
            <div id="cinci" class="imgg"><img src="https://images.unsplash.com/photo-1598391990342-311775e3d374?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"></div>
            <div id="sase" class="imgg"><img src="https://images.unsplash.com/photo-1470549638415-0a0755be0619?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"></div>
            <div id="sapte" class="imgg"><img src="https://images.unsplash.com/photo-1488431211626-d814e98c084b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2073&q=80"></div>
            <div id="opt" class="imgg"><img src="https://images.unsplash.com/photo-1456081101716-74e616ab23d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1776&q=80"></div>
            <div id="noua" class="imgg"><img src="https://images.unsplash.com/photo-1670523834704-7407a9970b6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80"></div>
            <div id="zece" class="imgg"><img src="https://images.unsplash.com/photo-1685478236857-8fb7f61ba108?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"></div>
            <div id="unsprezece" class="imgg"><img src="https://images.unsplash.com/photo-1563178930-ed8083944fe2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGxpYnJhcnklMjBtYWNyb3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
        </div>
    </div>

    @endsection
