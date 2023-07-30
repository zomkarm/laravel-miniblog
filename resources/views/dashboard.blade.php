<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  @if (session()->has('status'))
                  <div class="mt-5 shadow bg-purple-500 font-bold py-2 px-4 rounded">
                    {{ session('status') }}
                  </div>
              @endif
                              <table class="table-auto w-full shadow-md mt-5 rounded bg-black border-separate border-spacing-y-3">
                                <thead
                                  class="text-left text-gray-500 tracking-wider">
                                  <tr>
                                    <th scope="col" class="p-4">Name</th>
                                    <th scope="col" class="p-4">Title</th>
                                    <th scope="col" class="p-4">Body</th>
                                    <th scope="col" class="p-4">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tbody>                                        
                                  @foreach ($posts as $post) 
                                  
                                  <tr class="bg-card rounded text-black bg-neutral-900">
                                    <td class="p-4">{{ $post->user->name }}</td>
                                    <td class="p-4">{{ $post->title }}</td>
                                    <td class="p-4">{{ $post->body }}</td>
                                    <td class="p-4">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/post/edit/{{ $post->id }}">Edit</a>
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/post/delete/{{ $post->id }}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                          </tbody>
                                </tbody>
                              </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
