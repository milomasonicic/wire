<div>
    Hi from users
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    status
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
            </tr>

            <input wire:model='active' type="checkbox">
            <input wire:model='search' type="search" class="border-b dark:bg-gray-800 dark:border-gray-700" placeholder="search">
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$user->active}}
                </td>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
            </tr>
                
            @endforeach

        </tbody>
    </table>

    {{$users->links()}}
</div>
