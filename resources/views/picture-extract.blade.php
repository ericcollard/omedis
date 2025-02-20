@push('pagetitle', 'Picture extraction')
@push('breadcrumb')
    @php(
    $breadcrumb_items = [
                ['title' => 'Picture extraction', 'url' => route('extract_picture_links')],
            ]
    )
    <livewire:breadcrumb-component :items="$breadcrumb_items" />
@endpush


<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" grid grid-cols-1  gap-6 lg:gap-8 p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h1 class="text-xl font-semibold text-gray-900 dark:text-white">
                        PICTURE Extraction from AFS
                    </h1>

                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 gap-4 p-4 bg-grey">

                    <div class="container mx-auto py-6">
                        @if(isset($csvData['error']))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Erreur !</strong>
                                <span class="block sm:inline">{{ $csvData['error'] }}</span>
                            </div>
                        @else
                            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                                    <table class="min-w-full table-auto">
                                        <thead class="bg-gray-100">
                                        <tr>
                                            @foreach(array_keys(reset($csvData)) as $header)
                                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ $header }}
                                                </th>
                                            @endforeach
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($csvData as $row)
                                            <tr class="hover:bg-gray-50">
                                                @foreach($row as $value)
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                        {{ $value ?? 'N/A' }}
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                        @endif
                    </div>




                </div>
            </div>
        </div>
    </div>

</x-app-layout>
