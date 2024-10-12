<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar User</title>
     @vite('resources/css/app.css')
</head>
<body style="margin: 0; padding: 0;">

    <x-nav>
    </x-nav>

    <h1 class="flex items-center justify-center font-medium font-sans text-black text-3xl pt-56">Criar Um Usuario</h1>

    <div class="bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <livewire:create-user />
                </div>
            </div>

            <div class="bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">

                    <livewire:todo />
                </div>
            </div>

</body>
</html>
