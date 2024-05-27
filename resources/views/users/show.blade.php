<x-layout>
    <div class="container mx-auto mt-10 p-5">

        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 text-left border-r">Id</th>
                    <th class="py-2 px-4 bg-gray-200 text-left border-r">Username</th>
                    <th class="py-2 px-4 bg-gray-200 text-left">Email</th>
                    <th class="py-2 px-4 bg-gray-200 text-left"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b border-r">{{ $user['id'] }}</td>
                        <td class="py-2 px-4 border-b border-r">{{ $user['username'] }}</td>
                        <td class="py-2 px-4 border-b">{{ $user['email'] }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="/users/{{ $user['id'] }}" class=" mb-5 text-blue-500">
                                <i class="material-icons">edit</i>

                            </a>
                            <a href="/users/{{ $user['id'] }}" class=" mb-5 text-red-500">
                                <i class="material-icons">delete_forever</i>

                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="py-2">
            {{ $users->links() }}
        </div>
    </div>
</x-layout>
