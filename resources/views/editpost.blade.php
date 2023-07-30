<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="flex  py-4 justify-center">
        
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/post/update/{{ $post->id }}">
        @csrf
        @if (session()->has('status'))
            <div class="mt-5 shadow bg-purple-500 font-bold py-2 px-4 rounded">
              {{ session('status') }}
            </div>
        @endif
        <div class="flex justify-center mb-3 underline">
            Eidt Post
        </div>

          <div class="mb-4 mt-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
              Title
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Title" value="{{ $post->title }}" required>
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
              Body
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="body" name="body" type="text" placeholder="Body" value="{{ $post->body }}" required>
          </div>
          <div class="flex items-center justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Submit
            </button>
          </div>
        </form>

      </div>
</x-app-layout>
