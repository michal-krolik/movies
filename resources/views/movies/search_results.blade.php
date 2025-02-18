<div class="px-4 sm:px-6 lg:px-8">
    <div class="mt-1 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                            Tytuł
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Gatunek
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Liczba polubień
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Średnia ocena
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @foreach($movies ?? [] as $movie)
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $movie->title }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $movie->genre->getLabel() ?? '-' }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ number_format($movie->likes) ?? 0 }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ number_format($movie->rating, 2) ?? '-' }} / 5</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
