<div>


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome do Motorista
                </th>
                <th scope="col" class="px-6 py-3">
                    Veiculo
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Ações
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $driver->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $driver->veiculo }}
                </td>
                <td class="px-6 py-4">
                    {{ $driver->email }}
                </td>
                <td class="px-6 py-4">

                </td>
            </tr>


            @endforeach
        </tbody>
    </table>
</div>

</div>
