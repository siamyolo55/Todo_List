@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-10 text-center text-white">
        <p class="text-3xl font-bold">Todo List</p>
        <div class="bg-white">
            @if (count($todos)>0)
                @foreach ($todos as $todo)
                    <div class="box-border h-25 w-auto p-4 border-2">
                        <p class="text-2xl text-blue-500 font-bold"><a href="todo/{{$todo->id}}"> {{$todo->title}}</a></p>
                        <span class="text-lg text-red-700 font-bold">{{$todo->due}}</span>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
