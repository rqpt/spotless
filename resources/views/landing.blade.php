<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        <title>Spotless</title>
    </head>
    <body class="max-w-xs sm:max-w-sm md:max-w-prose mx-auto font-light my-10">
        <header class="text-center">
            <div class="flex flex-col gap-4">
                <h1 class="font-semibold text-xl">Spotless</h1>
                <p>
                    The purpose of this site is to simply wipe your spotify
                    library in one quick go without much hassle.
                </p>
                <p>
                    You will need to provide your login credentials, and
                    optionally some songs, albums, or artists you wish to
                    shield from the impending nuke we're about to drop on your
                    account.
                </p>
                <p>
                    Simply click go and after a few moments, you will find
                    yourself with a squeeky clean library.
                </p>
                <p>Enjoy!</p>
            </div>
        </header>
        <section class="my-10">
            <form action="#" method="delete" x-data="{ showPassword: false }">
                @csrf
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="border-2 rounded-md">
                    </div>
                    <div class="flex flex-col">
                        <label for="password">Password:</label>
                        <div>
                            <input :type="showPassword ? 'text' : 'password'" name="password" class="border-2 rounded-md">
                            <button @click="showPassword = !showPassword" type="button" class="px-3 py-1 bg-gray-200 rounded-sm">
                                <span x-text="showPassword ? 'Hide' : 'Show'"></span>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div>
                            <label for="exclusions">Exclusions:</label>
                            <em class="text-xs font-extralight">(provide as a list of comma separated links)</em>
                        </div>
                        <textarea name="exclusions" class="border-2 rounded-md"></textarea>
                    </div>
                    <button class="w-max rounded-sm bg-sky-500 text-white px-4 self-center font-bold py-1">Destroy library</button>
                </div>
            </form>
        </section>
    </body>
</html>
