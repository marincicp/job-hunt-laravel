<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Hunt</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white ">

    <div class="px-10 py-4">

        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>


                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo" class="h-10 w-20">
                </a>
            </div>

            <div>
                <ul class="flex gap-6 font-medium tracking-wide">
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Salaries</a></li>
                    <li><a href="#">Companies</a></li>
                </ul>
            </div>
            <div>

                <a href="#">Post a Job</a>
            </div>
        </nav>

    </div>

    <main class="mt-10 max-w-[968px] mx-auto ">

        {{ $slot }}
    </main>
</body>

</html>
