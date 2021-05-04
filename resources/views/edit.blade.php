@extends('layouts.app')

@section('content')
    <div
    class="container max-w-md mx-auto xl:max-w-3xl h-full flex bg-white rounded-lg shadow overflow-hidden"
    >
        <div class="mx-auto w-full xl:w-1/2 p-8">
            <form method="post" action="/todo/{{$todo->id}}">
                @csrf
                @method('PUT')
                <h1 class=" text-2xl font-bold">Edit Todo</h1>
                <div class="mb-4 mt-6">
                    <label
                    class="block text-gray-700 text-sm font-semibold mb-2"
                    >
                    Title
                    </label>
                    <input
                    class="text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10"
                    id="title"
                    name="title"
                    type="text"
                    placeholder="Your title"
                    value="{{$todo->title}}"
                    />
                </div>
                <div class="mb-6 mt-6">
                    <label
                    class="block text-gray-700 text-sm font-semibold mb-2"
                    >
                    Content
                    </label>
                    <input
                    class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"
                    id="content"
                    name="content"
                    type="text"
                    placeholder="Content"
                    value="{{$todo->content}}"
                    />
                </div>
                <div class="mb-6 mt-6">
                    <label
                    class="block text-gray-700 text-sm font-semibold mb-2"
                    >
                    Due
                    </label>
                    <input
                    class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"
                    id="due"
                    name="due"
                    type="text"
                    placeholder="Due"
                    value="{{$todo->due}}"
                    />
                </div>
                <div class="flex w-full mt-8">
                    <input
                    class="w-full bg-gray-800 hover:bg-grey-900 text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10"
                    type="submit"
                    value="Save Changes"
                    >
                    </input>
                </div>
            </form>
        </div>
    </div>
@endsection