<x-layout>


    <div class="container mx-auto mt-10 p-5">
        <!-- User Data Table -->
        <div class="mb-10">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 text-left border-r">Username</th>
                        <th class="py-2 px-4 bg-gray-200 text-left">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-r">{{ $user['username'] }}</td>
                        <td class="py-2 px-4 border-b">{{ $user['email'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Subjects Table -->
        <div>
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 text-left border-r">Subject</th>
                        <th class="py-2 px-4 bg-gray-200 text-left border-r">Pass Mark</th>
                        <th class="py-2 px-4 bg-gray-200 text-left">Mark Obtained</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td class="py-2 px-4 border-b border-r">{{ $subject->name }}</td>
                            <td class="py-2 px-4 border-b border-r">{{ $subject->pass_mark }}</td>
                            <td class="py-2 px-4 border-b">{{ $subject->mark_obtained }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>






    {{-- <div class="container mx-auto mt-10 p-5">
        <h1 class="text-3xl font-bold mb-5">Welcome, {{ $user['username'] }}</h1>

        <!-- User Data Table -->
        <div class="mb-10">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200">Username</th>
                        <th class="py-2 px-4 bg-gray-200">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user['username'] }}</td>
                        <td class="py-2 px-4 border-b">{{ $user['email'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Subjects Table -->
        <div>
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200">Subject</th>
                        <th class="py-2 px-4 bg-gray-200">Pass Mark</th>
                        <th class="py-2 px-4 bg-gray-200">Mark Obtained</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $subject['name'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $subject['pass_mark'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $subject['mark_obtained'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}


</x-layout>
