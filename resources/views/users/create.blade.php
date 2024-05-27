<x-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"> register
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="regester">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">username
                        address</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="username" required autocomplete="off"
                            value="{{ old('username') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('username')
                        <P class="text-xs text-red-500 font-semibold px-1">
                            {{ $message }}
                        </P>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            value="{{ old('email') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('email')
                        <P class="text-xs text-red-500 font-semibold px-1">
                            {{ $message }}
                        </P>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="off" required
                            value="{{ old('password') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password')
                        <P class="text-xs text-red-500 font-semibold px-1">
                            {{ $message }}
                            Must contain at least 8 characters,
                            including
                            uppercase,
                            lowercase,
                            numbers,
                            and special characters
                        </P>
                    @enderror
                </div>


                <div class="mb-5">
                    <div class="flex items-center justify-between">
                        <label for="re-password" class="block text-sm font-medium leading-6 text-gray-900">Repeat
                            Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="re-password" name="re-password" type="password" autocomplete="off" required
                            value="{{ old('re-password') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <span id="passwordMismatch" class="text-xs text-red-600 hidden">Passwords do not match</span>
                    </div>
                    @error('re-password')
                        <P class="text-xs text-red-500 font-semibold px-1">
                            {{ $message }}
                        </P>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                you have an acount?
                <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">sign in</a>
            </p>
        </div>
    </div>

</x-layout>
