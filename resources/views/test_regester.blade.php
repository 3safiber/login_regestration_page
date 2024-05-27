<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"> register
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/regester" method="POST">

                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">username
                    </label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" required minlength="8"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <span class="text-xs text-gray-600">Must contain at least 8 characters, including uppercase,
                        lowercase, numbers, and special characters</span>
                </div>


                <div class="mb-5">
                    <div class="flex items-center justify-between">
                        <label for="re-password" class="block text-sm font-medium leading-6 text-gray-900">Repeat
                            Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="re-password" name="re-password" type="password" autocomplete="new-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <span id="passwordMismatch" class="text-xs text-red-600 hidden">Passwords do not match</span>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">sign
                        up</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                you have an acount?
                <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">sign in</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const submitButton = document.getElementById('submitButton');
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            const rePassword = document.getElementById('re-password');
            const passwordMismatch = document.getElementById('passwordMismatch');

            function validateForm() {
                const isUsernameValid = username.value.length >= 3;
                const isPasswordValid = password.value.match(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}/);
                const doPasswordsMatch = password.value === rePassword.value;

                passwordMismatch.classList.toggle('hidden', doPasswordsMatch);

                if (isUsernameValid && isPasswordValid && doPasswordsMatch) {
                    submitButton.disabled = false;
                } else {
                    submitButton.disabled = true;
                }
            }

            form.addEventListener('input', validateForm);

            form.addEventListener('submit', function(event) {
                if (submitButton.disabled) {
                    event.preventDefault();
                }
            });

            validateForm(); // Initial validation on page load
        });
    </script>

</x-layout>
