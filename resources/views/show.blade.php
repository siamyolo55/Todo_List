@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-10 text-center">
        <div class="bg-white">
            <h2 class="text-purple-600 text-3xl font-bold">{{$todo->title}} </p>
            <hr>
            <p class="text-black text-lg p-10">{{$todo->content}}</p>
        </div>
        <div>
            <a class="in;ine-block bg-green-700 h-13 w-25 p-4 text-white text-sm float-left font-bold" href="{{route('index')}}">Go Back</a>
            <a class="inline-block bg-blue-700 h-13 w-20 p-4 text-white text-sm float-none font-bold" href="/todo/{{$todo->id}}/edit">Edit</a>
            <form class="inline-block h-13 w-20 bg-red-700 p-4 float-right" method="post" action="/todo/{{$todo->id}}">
                @csrf
                @method('DELETE')
                <input type="submit" class="bg-red-700 text-white font-bold text-sm" value="Delete"/>
            </form>
        </div>
   
    </div>
@endsection