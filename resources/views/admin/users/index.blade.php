@extends('layouts.app')

    @section('content')
    <div class="container mx-auto p-4">

        
        
        <div class="relative overflow-x-auto mt-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">User name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                @forelse ( $users as  $user )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$user->name}}</td>
                    <td class="px-6 py-4">{{$user->email}}</td>
                    <td class="px-6 py-4">
                    <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500">Edit</a>
                        <a href="{{route('users.show',$user->id)}}">Ver</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 ml-4">Delete</button>
        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    Sem informacoes
                </tr>
                @endforelse
                
                
            </tbody>
        </table>
        <div class="flex mt-3 justify-end">
            <a href="{{route('users.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">New user</a>

        </div>
        
        {{ $users->links() }}
    </div>
</div>
@endsection

