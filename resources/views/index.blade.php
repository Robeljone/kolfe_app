<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Login to your account</h2>
            <div id="success" class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 hidden" role="alert">
                <span class="font-medium">Success!</span>Login
            </div>
            <div  id="failed" class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 hidden" role="alert">
                <span class="font-medium">Failed !</span> Login Contact Admin
            </div>
            <form id="loginfrm" class="space-y-4">
                @csrf
                <div>
                    <label for="uname" class="block mb-2 text-sm font-medium text-gray-700">User Name</label>
                    <input type="text" name="uname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                        required>
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm text-gray-600">
                        &nbsp;
                    </label>
                    <a href="" class="text-sm text-blue-600 hover:underline">&nbsp;</a>
                </div>
                <button type="submit"
                    class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Login
                </button>
            </form>
            <p class="text-sm mt-4 text-center">
               Web Appication Back Office
            </p>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>
</html>
