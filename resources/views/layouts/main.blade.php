<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <title>Movie Hunter</title>
    <livewire:styles>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Lexend', sans-serif;
        }
    </style>

</head>
<body class="font-sans bg-white-900 text-gray-800">
    <nav class="text-white bg-orange-500 shadow-lg">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-2 py-1">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="/">
                     <img src="/img/logo.png" alt="" style="width:130px;">
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{route('movies.index')}}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/tv" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/actors" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-4 md:mt-3">
                    <img src="/img/avatar.jpeg" alt="avatar" srcset="" class="rounded-full w-8 h-8">
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    <livewire:scripts>
    @yield('scripts')

    <footer class='w-full bg-orange-200 text-center border-t border-grey-900 p-4'>
        &copy;	 Bart Tabusao
    </footer>
</body>
</html>