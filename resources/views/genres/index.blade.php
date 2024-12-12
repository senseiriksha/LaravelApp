<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Žanrovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table cellpadding="10" style="width: 500px; text-align: center;">
                        <tr style="border-bottom: 1px solid #fff">
                            <th>ID</th>
                            <th>Naziv</th>
                        </tr>
                        @foreach ($genres as $genre)
                        <tr style="border-bottom: 1px solid #fff">
                            <td>{{ $genre['id'] }}</td>
                            <td>{{ $genre['name'] }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
