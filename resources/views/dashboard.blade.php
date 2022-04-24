<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8" align="center">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800 boder-gray-900">
                  <tr>
                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                      Product Name
                    </th>
                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                      Image(s)
                    </th>
                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                      Categories
                    </th>
                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                      URL
                    </th>
                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                      
                    </th>
                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                      Actions  
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                  <tr class="border-b bg-gray-800 boder-gray-900">
                    <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                        {{ $post->title }}
                    </td>
                    <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                        <img src="{{  asset('uploads/posts/').'/' . $post->postImage }}" width= "100px" height="100px" alt="image">
                    </td>
                    <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                        {{ $post->categories }}
                    </td>
                    <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                        {{ $post->hyperlink }}
                    </td>
                    <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">>
                        <a href= "" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">>
                        <a href= "" class="btn btn-red">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
